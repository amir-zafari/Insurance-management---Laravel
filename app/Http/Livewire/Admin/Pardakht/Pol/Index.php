<?php

namespace App\Http\Livewire\Admin\Pardakht\Pol;

use App\Models\bimeshode;
use App\Models\gozarshPardakht;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public bimeshode $bimeshode;

    public function updateDisable($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'pardakht' => 0
        ]);
        return redirect(route('pol.index'));

    }

    public function updateEnable($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'pardakht' => 1
        ]);

        gozarshPardakht::create([
            'id_bimeshode' => $bimeshode->id,
            'id_karfama_bimeshode' => $bimeshode->id_karfama,
            'pol_bime' => $bimeshode->hag_ma,
            'id_jab' =>$bimeshode->id_jab
        ]);
        return redirect(route('pol.index'));
    }


    public function render()
    {

        $bimeshodes = bimeshode::latest()->get();
        return view('livewire.admin.pardakht.pol.index',compact('bimeshodes'));
    }
}
