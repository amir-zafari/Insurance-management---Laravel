<?php

namespace App\Http\Livewire\Admin\Bimeshode;

use App\Models\bimeshode;
use Livewire\Component;
use Livewire\WithPagination;

class Update extends Component
{

    use WithPagination;
    //=========================
    protected $paginationTheme = 'bootstrap';
//===================================
    public bimeshode $bimeshode;
//===================================

    protected $rules = [
        'bimeshode.name' => 'required',
        'bimeshode.somare' => 'required',
        'bimeshode.mly' => 'required',
        'bimeshode.bime' => 'required',
        'bimeshode.id_jab' => 'required',
        'bimeshode.shnasname' => 'required',
        'bimeshode.mahl_tvalod' => 'required',
        'bimeshode.tarikh_tvalod' => 'required',
        'bimeshode.pdar' => 'required',
        'bimeshode.hag_ma' => 'required',
        'bimeshode.hag_karfama' => 'required',
        'bimeshode.pardakht' => 'nullable',
        'bimeshode.pardakht_hgog' => 'nullable',
        'bimeshode.id_karfama' => 'required',
        'bimeshode.text' => 'nullable',
        'bimeshode.cart' => 'nullable',
        'bimeshode.hag_malyat' => 'nullable'
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function bimeshodeForm()
    {
        $this->validate();
        $this->bimeshode->save();
        $this->emit('toast', 'success', ' بیمه شده با موفقیت ایجاد شد.');
        return redirect(route('bimeshode.index'));
    }

    public function render()
    {
        return view('livewire.admin.bimeshode.update');
    }
}
