<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoModel extends Model
{
    protected $table = 'demo_c';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    use HasFactory;
}
