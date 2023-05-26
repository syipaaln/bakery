<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donuts extends Model
{
    use HasFactory;
    protected $table = 'donuts';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
