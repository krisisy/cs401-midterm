<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'program',
        'enrollment_year',
        'birthday', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'class_student');
    }

}
