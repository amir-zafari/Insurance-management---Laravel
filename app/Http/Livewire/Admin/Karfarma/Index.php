<?php

namespace App\Http\Livewire\Admin\Karfarma;

use App\Models\karfarma;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //=============================
    public karfarma $karfarma;

//================================//

    public function delete($id)
    {
        $karfarma = karfarma::find($id);
        $karfarma->delete();
        $this->emit('toast', 'success', ' کارفرما با موفقیت حذف شد');
        return redirect(route('karfarma.index'));
    }


    public function render()
    {
        $karfarmas = karfarma::latest()->get();
        return view('livewire.admin.karfarma.index', compact('karfarmas'));
    }
}
