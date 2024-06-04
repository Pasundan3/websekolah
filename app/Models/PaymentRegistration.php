<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;

class PaymentRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'image_url',
        'amount',
        'remaining_amount',
        'paid_amount'
    ];

    /**
     * Get the registration that owns the PaymentRegistration
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class, 'registration_id');
    }
}
