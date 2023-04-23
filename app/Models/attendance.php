<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;

    protected $table = 'attendancelogs';

    protected $fillable = ['event_id', 'student_id', 'student_name', 'department', 'time_in', 'updated_at', 'created_at'];
}
