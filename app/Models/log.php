<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $fillable = ['n_bimeshode','s_bimeshode','k_bimeshode','m_bimeshode','g_bimeshode','n_karfarma'
        ,'s_karfarma','m_karfarma', 'g_karfarma','all', 'sod'];
}
