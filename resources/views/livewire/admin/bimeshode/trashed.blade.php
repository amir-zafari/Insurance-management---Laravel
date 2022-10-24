@section('titel', 'سطل زباله')

<div  >
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
                    <h6 class="mb-0">سطل زباله</h6>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            ({{\App\Models\bimeshode::onlyTrashed()->count()}})  سطل زباله</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3"></div>
        <div class="container">
            <div class="card">
                <div class="card-body p-3">

                    <table class="data-table w-100" id="dataTable" >
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>کارفرما</th>
                            <th>شماره تماس</th>
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
                                <td>{{ $bimeshode->somare }}</td>
                                <td>
                                    <a class="btn m-1 btn-creative btn-primary"
                                       wire:click="trashedbimeshode({{$bimeshode->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                        </svg>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
