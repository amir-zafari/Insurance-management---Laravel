<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gozarshGrdesh extends Model
{
    use HasFactory;
    protected $fillable=['id_bimeshode','id_karfama_bimeshode','bime'];
    public function getCreatedAtInJalali()
    {
        return verta($this->created_at)->format('Y/m/d');
    }
}
