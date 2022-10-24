@section('titel', 'بیمه شدگان')

<div  >
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
                    <h6 class="mb-0">بیمه شدگان</h6>
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
                                <a class="btn m-1 btn-creative text-white btn-warning"
                                   href="{{ route('bimeshodegzarsh.index',$bimeshode->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                                    </svg>
                                </a>
                                <a class="btn m-1 btn-creative btn-primary"
                                   href="{{ route('gallery.index',$bimeshode->id) }}"><i class="bi bi-folder-fill"></i>
                                </a>
                                <a class="btn m-1 btn-creative btn-success"
                                   href="{{route('bimeshode.edit',$bimeshode)}}"><i class="fa fa-pencil"></i>
                                </a>

                                <a class="btn m-1 btn-creative btn-danger" wire:click="deletebimeshode({{ $bimeshode->id }})"
                                  ><i class="fa fa-trash"></i>
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
