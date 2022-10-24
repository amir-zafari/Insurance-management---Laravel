<?php

namespace App\Http\Livewire\Admin\Jab;

use App\Models\jab;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //=============================
    public jab $jab;

//================================
    public function deletejab($id)
    {
        $jab = jab::find($id);
        $jab->delete();
        $this->emit('toast', 'success', ' شغل با موفقیت حذف شد');
        return redirect(route('jab.index'));
    }


    public function render()
    {
        $jabs = jab::latest()->get();
        return view('livewire.admin.jab.index', compact('jabs'));
    }
}
