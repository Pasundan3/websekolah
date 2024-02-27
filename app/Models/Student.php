<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Family;
use App\Models\Registration;

class Student extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the families for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function families(): HasMany
    {
        return $this->hasMany(Family::class);
    }

    /**
     * Get the registration associated with the Student
     *
     * @return \IlluminaRegistrationatabase\Eloquent\Relations\HasOne
     */
    public function registration(): HasOne
    {
        return $this->hasOne(Registration::class);
    }
}
