<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bimeshode extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'somare',

        'mly', 'bime', 'id_jab', 'shnasname', 'mahl_tvalod',

        'tarikh_tvalod', 'pdar', 'hag_ma', 'hag_karfama',

        'pardakht', 'pardakht_hgog', 'id_karfama', 'text','check','cart'];
}
