<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_id',
        'amount',
        'image_url',
        'pendaftaran',
        'kegiatan_awal',
        'seragam',
        'spp',
        'dsp'
    ];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class, 'registration_id');
    }
}
