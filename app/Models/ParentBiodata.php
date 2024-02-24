<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Userprofile;

class ParentBiodata extends Model
{
    use HasFactory;

    /**
     * Get the user_profile that owns the ParentBiodata
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_profile(): BelongsTo
    {
        return $this->belongsTo(UserProfile::class, 'user_profile_id');
    }
}
