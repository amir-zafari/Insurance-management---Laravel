<?php

namespace App\Http\Livewire\Admin\Bimeshode\Bimeshodegzarsh;


use App\Models\gozarshGrdesh;
use App\Models\gozarshPardakht;
use App\Models\bimeshode;
use App\Models\gallery;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    //=========================
    protected $paginationTheme = 'bootstrap';
    public $readyToLoad = true;
//===================================
    public \App\Models\bimeshode $bimeshode;
    public \App\Models\gallery $gallery;
    public \App\Models\gozarshPardakht $gozarshPardakht;
    public \App\Models\gozarshGrdesh $gozarshGrdesh;
//===================================


    //=============================
    public function render()
    {
        $bimeshodes= bimeshode::where('id', $this->bimeshode->id)->get() ;
//        dd($bimeshodes);
        $gallerys =  Gallery::where('product_id', $this->bimeshode->id)->get() ;
        $gozarshPardakhts = GozarshPardakht::where('id_bimeshode', $this->bimeshode->id)->get() ;
        $gozarshGrdeshs =  GozarshGrdesh::where('id_bimeshode', $this->bimeshode->id)->get() ;

        return view('livewire.admin.bimeshode.bimeshodegzarsh.index', compact('bimeshodes',
            'gallerys','gozarshPardakhts','gozarshGrdeshs'));
    }
}
