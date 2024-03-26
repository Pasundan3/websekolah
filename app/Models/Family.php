<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Family extends Model
{
    use HasFactory;

    /**
     * Get the student that owns the Family
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $fillable = [
        'name',
        'nik',
        'date_of_birth',
        'gender',
        'religion',
        'address',
        'phone_number',
        'last_education',
        'working_as',
        'income',
        'parent_status',
        'student_id'
    ];
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
