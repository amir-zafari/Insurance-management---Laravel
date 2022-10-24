<?php

namespace App\Http\Livewire\Admin\Bimeshode;

use App\Models\bimeshode;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //=============================
    public bimeshode $bimeshode;

//================================
    public function deletebimeshode($id)
    {
        $bimeshode = bimeshode::find($id);
        $bimeshode->delete();
        $this->emit('toast', 'success', ' بیمه شده با موفقیت حذف شد');
        return redirect(route('bimeshode.index'));

    }


    public function render()
    {
        $bimeshodes = bimeshode::latest()->get();
        return view('livewire.admin.bimeshode.index', compact('bimeshodes'));
    }
}
