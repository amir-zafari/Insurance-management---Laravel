<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\bimeshode;
use App\Models\karfarma;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $pol=0;
        $karfarma=0;
        foreach (bimeshode::where('pardakht', 1)->get() as $po){
        $pol+=$po->hag_ma;
        $karfarma=$karfarma+$po->hag_karfama+$po->hag_malyat;
                }
        $bimeshodes = bimeshode::latest()->get();
        $karfarmas = karfarma::latest()->get();
        return view('livewire.admin.dashboard.index',compact('pol','karfarma','bimeshodes','karfarmas'));
    }
}
