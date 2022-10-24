@section('titel', ' گردش حقوق')

<div>
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button"><a href="/">
                        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16"
                             fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                        </svg>
                    </a></div>
                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">گردش حقوق</h6>
                </div>
                <!-- Settings -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-3">
        <div class="pt-8"></div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="data-table w-100" id="dataTable">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>کارفرما</th>
                            <th>شماره تماس</th>
                            <th>شماره کارت</th>
                            <th>عمليات</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach(\App\Models\karfarma::where('gardsh',1)->get() as $ka)
                            @foreach(\App\Models\bimeshode::where('id_karfama',$ka->id)->get() as $bimeshode)
                            <tr>
                                <td>{{ $bimeshode->name }}</td>
                                <td>@foreach(\App\Models\karfarma::where('id',$bimeshode->id_karfama)->get() as $ca)
                                        {{$ca->name}}
                                    @endforeach</td>
                                <td>{{ $bimeshode->somare }}</td>
                                <td>{{ $bimeshode->cart }}</td>
                                <td>
                                    @if ($bimeshode->pardakht_hgog == 3)
                                    <a class="btn m-1 btn-creative btn-success"
                                       wire:click="update1({{ $bimeshode->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                    </a>
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="update2({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="update3({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </a>
                                    @elseif($bimeshode->pardakht_hgog == 2)
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="update1({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="update2({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update3({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 16 16">
                                                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                            </svg>
                                        </a>
                                    @elseif($bimeshode->pardakht_hgog == 1)
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="update1({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update2({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-2-fill" viewBox="0 0 16 16">
                                                <path d="M0 3a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3zm5.5 1a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm6.5 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update3({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 16 16">
                                                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update1({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-1-fill" viewBox="0 0 16 16">
                                                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm5 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update2({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-2-fill" viewBox="0 0 16 16">
                                                <path d="M0 3a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3zm5.5 1a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm6.5 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                            </svg>
                                        </a>
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="update3({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 16 16">
                                                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                            </svg>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @endforeach

                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
