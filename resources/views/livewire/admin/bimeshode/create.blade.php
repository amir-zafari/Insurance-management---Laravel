@section('titel', 'افزودن بیمه شده')

<div>
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button"><a href="/bimeshode">
                        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16"
                             fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                        </svg>
                    </a></div>
                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">افزودن بیمه شده</h6>
                </div>
                <!-- Settings -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-1">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="direction" >
                        <a class="btn m-1 btn-success" href="
{{ route('bimeshode.create') }}
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill me-2" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            افزودن</a>
                        <a class="btn m-1 btn-danger" href="
{{ route('bimeshode.trashed') }}
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill me-2" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            ({{\App\Models\bimeshode::onlyTrashed()->count()}})  سطل زباله</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3"></div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    @include('errors.error')





                    <form wire:submit.prevent="bimeshodeForm" enctype="multipart/form-data" role="form">
                        <div class="input-group mb-3"><span class="input-group-text">نام کامل</span>
                            <input class="form-control" wire:model.lazy="bimeshode.name"  type="text" aria-label="First name" placeholder="نام">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">نام پدر</span>
                            <input class="form-control" wire:model.lazy="bimeshode.pdar" type="text" placeholder="نام پدر" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">اعتبار</span>
                            <input class="form-control" wire:model.lazy="bimeshode.hag_ma" type="text" aria-label="Amount (to the nearest dollar)"
                                   placeholder="750"><span class="input-group-text">تومان</span>
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">حق کارفرما</span>
                            <input class="form-control" wire:model.lazy="bimeshode.hag_karfama" type="text" aria-label="Amount (to the nearest dollar)" placeholder="750">
                            <input class="form-control" wire:model.lazy="bimeshode.hag_malyat" type="text" aria-label="Amount (to the nearest dollar)" value="0" placeholder="مالیات">
                            <span class="input-group-text">تومان</span>
                        </div>
                        <div class="input-group mb-3">
                        <select class="form-select" wire:model.lazy="bimeshode.id_karfama" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                            <option value="-1" >کارفرما</option>
                            @foreach(\App\Models\karfarma::all() as $kar)
                                <option value="{{$kar->id}}">{{$kar->name}}</option>
                            @endforeach
                        </select>
                            </div>
                        <div class="input-group mb-3">
                            <select class="form-select" wire:model.lazy="bimeshode.id_jab" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                            <option value="-1" >کار</option>
                            @foreach(\App\Models\jab::all() as $jab)
                                <option value="{{$jab->id}}">{{$jab->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">تولد</span>
                            <input class="form-control" wire:model.lazy="bimeshode.tarikh_tvalod" type="text" aria-label="First name" placeholder=" تاریخ">
                            <input class="form-control" wire:model.lazy="bimeshode.mahl_tvalod" type="text" aria-label="Last name" placeholder="محل">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">شماره بیمه</span>
                            <input class="form-control" wire:model.lazy="bimeshode.bime" type="text" placeholder="شماره بیمه" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">شماره تماس
                                </span>
                            <input class="form-control" wire:model.lazy="bimeshode.somare" type="text" placeholder="شماره مبایل" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">شماره کارت
                                </span>
                            <input class="form-control" wire:model.lazy="bimeshode.cart" type="text" placeholder="شماره کارت" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>                        <div class="input-group mb-3"><span class="input-group-text">شماره</span>
                            <input class="form-control" wire:model.lazy="bimeshode.mly" type="text" aria-label="First name" placeholder=" ملی">
                            <input class="form-control" wire:model.lazy="bimeshode.shnasname" type="text" aria-label="Last name" placeholder="شناسنامه">
                        </div>
                        <div class="input-group"><span class="input-group-text">یاداشت</span>
                            <textarea class="form-control" wire:model.lazy="bimeshode.text" aria-label="With textarea"
                                      placeholder="........."></textarea>
                        </div>
                        <div class="pt-3"></div>
                        <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center"
                                type="button">افزودن
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill me-2" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
