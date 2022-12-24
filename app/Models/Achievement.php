<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Achievement extends Model
{
    protected $fillable = [
        'nameAchievement', 'description', 'pathToachievement',
    ];

    public function players(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }

}
