<?php

namespace App\Http\Livewire\Admin\Karfarma;

use App\Models\karfarma;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Trashed extends Component
{
    protected $paginationTheme = 'bootstrap';
    public karfarma $karfarma;


    public function trashedkarfarma($id)
    {
        $product = karfarma::withTrashed()->where('id', $id)->first();
        $product->restore();
        $this->emit('toast', 'success', ' محصول با موفقیت بازیابی شد');
        return redirect(route('karfarma.trashed'));
    }


    public function render()
    {
        $karfarmas =DB::table('karfarmas')->whereNotNull('deleted_at')->get();
        return view('livewire.admin.karfarma.trashed',compact('karfarmas'));
    }
}
