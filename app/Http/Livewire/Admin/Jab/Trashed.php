<?php

namespace App\Http\Livewire\Admin\Jab;

use App\Models\jab;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Trashed extends Component
{
    protected $paginationTheme = 'bootstrap';
    public jab $jab;


    public function trashedjab($id)
    {
        $product = jab::withTrashed()->where('id', $id)->first();
        $product->restore();
        $this->emit('toast', 'success', ' محصول با موفقیت بازیابی شد');
        return redirect(route('jab.trashed'));
    }


    public function render()
    {
        $jabs =DB::table('jabs')->whereNotNull('deleted_at')->get();
        return view('livewire.admin.jab.trashed',compact('jabs'));
    }
}
