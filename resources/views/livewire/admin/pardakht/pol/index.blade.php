@section('titel', 'حق بیمه ')

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
                    <h6 class="mb-0">حق بیمه</h6>
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
                            <th>مبلغ پرداختی</th>
                            <th>عمليات</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($bimeshodes as $bimeshode)
                            <tr>
                                <td>{{ $bimeshode->name }}</td>
                                <td>@foreach(\App\Models\karfarma::where('id',$bimeshode->id_karfama)->get() as $ca)
                                        {{$ca->name}}
                                    @endforeach</td>
                                <td>{{ $bimeshode->hag_ma }}</td>
                                <td>
                                    @if ($bimeshode->pardakht == 1)
                                        <a class="btn m-1 btn-creative btn-success"
                                           wire:click="updateDisable({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a class="btn m-1 btn-creative btn-danger"
                                           wire:click="updateEnable({{ $bimeshode->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square-fill" viewBox="0 0 16 16">
                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z"/>
                                            </svg>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
