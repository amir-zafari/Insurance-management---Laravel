<?php

namespace App\Http\Livewire\Admin\Bimeshode\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    //=========================
    protected $paginationTheme = 'bootstrap';
    public $img;
    public $readyToLoad = true;
//===================================
    public gallery $gallery;
    public \App\Models\bimeshode $bimeshode;
//===================================

    public function mount()
    {
        $this->gallery = new gallery();
    }

    protected $rules = [
        'gallery.product_id' => 'nullable'
    ];

    public function update($title)
    {
        $this->validateOnly($title);
    }

    public function galleryForm()
    {
        $this->validate();
        $this->gallery->product_id = $this->bimeshode->id;
        $this->gallery->img = $this->uploadimage();
        $this->gallery->save();
        $this->emit('toast', 'success', ' عکس با موفقیت ایجاد شد');
        return redirect(route('gallery.index',$this->bimeshode->id));
    }

    public function uploadimage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "public/Gallery/$year/$month";
        $name = $this->img->getclientoriginalname();
        $this->img->storeAs($directory, $name);
        return "/Gallery/$year/$month/$name";
    }
    public function deletegallery($id)
    {
        $gallerys = gallery::find($id);
        $gallerys->delete();
        $this->emit('toast', 'success', ' عکس با موفقیت حذف شد');
        return redirect(route('gallery.index',$this->bimeshode->id));

    }

    //=============================
    public function render()
    {
        $gallerys = $this->readyToLoad ? gallery::where('product_id', $this->bimeshode->id)->get() :[];
        return view('livewire.admin.bimeshode.gallery.index', compact('gallerys'));
    }
}
