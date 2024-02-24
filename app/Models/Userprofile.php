<?php

namespace App\Models;

use App\Models\ParentBiodata;

class Userprofile extends BaseModel
{
    protected $casts = [
        'date_of_birth' => 'datetime',
        'last_login' => 'datetime',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Retrieves the associated User model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   /**
    * Get all of the parents for the Userprofile
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function parents(): HasMany
   {
       return $this->hasMany(ParentBiodata::class, 'user_profile_id');
   }
}
