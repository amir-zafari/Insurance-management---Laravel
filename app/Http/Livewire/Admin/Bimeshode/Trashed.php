<?php

namespace App\Http\Livewire\Admin\Bimeshode;

use App\Models\bimeshode;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Trashed extends Component
{
    //protected $paginationTheme = 'bootstrap';
    public bimeshode $bimeshode;


    public function trashedbimeshode($id)
    {
        $product = bimeshode::withTrashed()->where('id', $id)->first();
        $product->restore();
        $this->emit('toast', 'success', ' محصول با موفقیت بازیابی شد');
        return redirect(route('bimeshode.trashed'));
    }


    public function render()
    {
        $bimeshodes =DB::table('bimeshodes')->whereNotNull('deleted_at')->get();
        return view('livewire.admin.bimeshode.trashed',compact('bimeshodes'));
    }
}
