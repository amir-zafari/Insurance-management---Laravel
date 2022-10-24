@section('titel', ' مدارک ')

<div >
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
                    <h6 class="mb-0">مدارک</h6>
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
                        @include('errors.error')
                        <form wire:submit.prevent="galleryForm" enctype="multipart/form-data" role="form"
                        <div class="form-group">
                            <label class="form-label" for="customFileLg">افزودن مدرک</label>
                            <input class="form-control border-0 form-control-lg" wire:model.lazy="img" id="customFileLg" type="file">
                            <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>

                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>

                            </div>
                            @if ($img)
                                <img class=" form-control mb-3 mt-3" width="200" src="{{ $img->temporaryUrl() }}" style="max-height:none;  height: 300px;">
                            @endif


                        </div>

                        <button  class="btn m-1 btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill me-2" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            افزودن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="card-body p-3">
                    <table class="data-table w-100" id="dataTable" >
                        <thead>
                        <tr>
                            <th>مدرک</th>
                            <th>بیمه شده</th>
                            <th>عمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($gallerys as $bimeshode)
                        <tr>
                            <td><img width="70px" src="{{ asset("storage/$bimeshode->img ") }}"></td>
                            <td>@foreach(\App\Models\bimeshode::where('id',$bimeshode->product_id)->get() as $ca)
                                    {{$ca->name}}
                                @endforeach</td>
                            <td>
                                <a class="btn m-1 btn-creative btn-primary"
                                   href="#"><i class="fa fa-eye"></i>
                                </a>

                                <a class="btn m-1 btn-creative btn-danger" wire:click="deletegallery({{ $bimeshode->id }})"
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
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = progressSection.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });

        });
    </script>
</div>
