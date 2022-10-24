<?php

namespace App\Http\Livewire\Admin\Karfarma\Check;

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

    public function updateDisable($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'check' => '0'
        ]);
        return redirect(route('karfarma.check',$this->karfarma->id));

    }

    public function updateEnable($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->update([
            'check' => '1'
        ]);
        return redirect(route('karfarma.check',$this->karfarma->id));
    }


    public function render()
    {
        $bimeshodes = bimeshode::where('id_karfama', $this->karfarma->id)->latest()->get();
        return view('livewire.admin.Karfarma.check.index',compact('bimeshodes'));
    }
}
