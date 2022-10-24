<?php

namespace App\Http\Livewire\Admin\Karfarma;

use App\Models\karfarma;
use Livewire\Component;
use Livewire\WithPagination;

class Update extends Component
{

    use WithPagination;
    //=========================
    protected $paginationTheme = 'bootstrap';
//===================================
    public karfarma $karfarma;
//===================================

    protected $rules = [
        'karfarma.somare' => 'required|min:11',
        'karfarma.name' => 'required|min:2',
        'karfarma.karkah' => 'required',
        'karfarma.gardsh' => 'nullable',
        'karfarma.text' => 'nullable'];

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function karfarmaForm()
    {
        $this->validate();
        $this->karfarma->save();
        $this->emit('toast', 'success', ' کارفرما با موفقیت ایجاد شد.');
        return redirect(route('karfarma.index'));
    }

    public function render()
    {
        return view('livewire.admin.karfarma.update');
    }
}
