<?php

namespace App\Http\Livewire\Admin\Pardakht\Hgog;

use App\Models\bimeshode;
use App\Models\gozarshGrdesh;
use App\Models\karfarma;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public bimeshode $bimeshode;
    public karfarma $karfarma;

    public function update1($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'pardakht_hgog' => 1
        ]);
        return redirect(route('hogog.index'));

    }

    public function update2($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'pardakht_hgog' => 2
        ]);
        return redirect(route('hogog.index'));
    }

    public function update3($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'pardakht_hgog' => 3
        ]);
        gozarshGrdesh::create([
            'id_bimeshode' => $bimeshode->id,
            'id_karfama_bimeshode' => $bimeshode->id_karfama,
            'bime' => 'تایید شده',

        ]);
        return redirect(route('hogog.index'));
    }

    public function render()
    {

        $bimeshonde = karfarma::latest()->get();

        return view('livewire.admin.pardakht.hgog.index',compact('bimeshonde'));
    }
}
