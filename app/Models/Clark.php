<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clark extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'isTrue']; //is_admin


    /** @use HasFactory<\Database\Factories\ClarkFactory> */
    use HasFactory;
}
