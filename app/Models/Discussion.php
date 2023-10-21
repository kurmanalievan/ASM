<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;
    public function userto()
    {
        return $this->belongsTo(User::class, 'to');
    }
    public function userfrom()
    {
        return $this->belongsTo(User::class, 'from');
    }
}
