<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_file', 
        'grade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
