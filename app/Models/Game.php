<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @method static where(string $string, int $gameId)
 * @method static create(array $array)
 * @method static find(int $gameId)
 * @method static getUpcomingGames()
 * @method static get()
 */
class Game extends Model
{
    protected $fillable = [
        'date',
        'name',
        'polygon',
        'linkForIframe',
        'linkForGoogle',
        'levels',
        'time',
        'tags-icon',
        'finished',
    ];

    public function players(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }

    /**
     * Возращает незавершенные игры
     *
     * @return array
     */
    public static function getGames(): array
    {
        return self::get();
    }

    /**
     * Возращает завершенные игры
     *
     * @return array
     */
    public static function getFinishedGames(): array
    {
        return self::where('finished', '1')->get();
    }

    /**
     * Возращает количество игр
     *
     * @return int
     */
    public static function getCountGames(): int
    {
        return self::get()->count();
    }

    /**
     * По заданому имени игры возращает id игры
     *
     * @param string $gameName Имя игры
     *
     * @return int
     */
    public static function getIdByName(string $gameName): int
    {
        return self::where('name', $gameName)->get()[0]->id;
    }

    /**
     * Проверяет есть ли игра по имени
     *
     * @param  string $gameName
     * @return bool
     */
    public static function hasGame(string $gameName): bool
    {
        if (self::where('name', $gameName)->count() >= 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Возращает имя игры по id
     *
     * @param int $gameId id игры
     *
     * @return string
     */
    public static function getNameById(int $gameId): string
    {
        return self::find($gameId)->name;
    }

    /**
     * Привязывает игрока к игре
     *
     * @param int $gameId id игры
     * @param int $playerId id игрока
     *
     * @return void
     */
    public static function attach(int $gameId, int $playerId): void
    {
        if (DB::table('game_player')->where('player_id', $playerId)
            ->where('game_id', $gameId)->count() <= 0)
        {
            self::find($gameId)->players()->attach($playerId);
        }
    }
}
