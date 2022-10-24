<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class karfarma extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name','somare','karkah','text','gardsh'];
}

