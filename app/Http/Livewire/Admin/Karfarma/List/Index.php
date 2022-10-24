<?php

namespace App\Http\Livewire\Admin\Karfarma\List;

use App\Models\bimeshode;
use App\Models\karfarma;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public bimeshode $bimeshode;
    public karfarma $karfarma;
    protected $rules = [
        'category.check' => 'nullable'

    ];


    public function render()
    {
        $ka=0;
        foreach (bimeshode::where('id_karfama', $this->karfarma->id)->get() as $po){
            $ka=$ka+$po->hag_karfama+$po->hag_malyat;
        }
        $bimeshodes = bimeshode::where('id_karfama', $this->karfarma->id)->latest()->get();
        return view('livewire.admin.Karfarma.list.index',compact('bimeshodes','ka'));
    }
}
