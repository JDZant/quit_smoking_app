<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @method static whereQuitAttemptId(mixed $id)
 * @method static whereIn(string $string, $rewards)
 */
class Reward extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $guarded = [];

    //relations
    public function quitAttempt(): BelongsTo
    {
        return $this->belongsTo(quitAttempt::class);
    }
}
