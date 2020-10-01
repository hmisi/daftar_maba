<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maba extends Model
{
    protected $table = 'maba';
    protected $fillable = ['name', 'npm', 'cls', 'email', 'wa', 'q1', 'q2', 'q3'];
    use HasFactory;
}
