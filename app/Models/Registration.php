<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\PaymentRegistration;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_uid',
        'student_id',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the student that owns the Registration
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    /**
     * Get the payment_registration associated with the Registration
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function payment_registration(): HasMany
    {
        return $this->hasMany(PaymentRegistration::class);
    }

    public function payment_histories(): HasMany
    {
        return $this->hasMany(PaymentHistory::class);
    }
}
