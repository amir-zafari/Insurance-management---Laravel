<?php

namespace App\Http\Livewire\Admin\Jab;

use App\Models\jab;
use Livewire\Component;
use Livewire\WithPagination;

class Update extends Component
{

    use WithPagination;
    //=========================
    protected $paginationTheme = 'bootstrap';
//===================================
    public jab $jab;
//===================================

    protected $rules = [
        'jab.name' => 'required',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function jabForm()
    {
        $this->validate();
        $this->jab->save();
        $this->emit('toast', 'success', ' شغل با موفقیت ایجاد شد.');
        return redirect(route('jab.index'));
    }

    public function render()
    {
        return view('livewire.admin.jab.update');
    }
}
