@section('titel', 'لیست ماهانه ')

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
                    <h6 class="mb-0">لیست ماهانه</h6>
                </div>
                <!-- Settings -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper py-3">
        <div class="container">
            <div class="card invoice-card shadow">
                <div class="card-body">
                    <!-- Download Invoice -->
                    <div class="download-invoice text-end mb-3">
                        <a class="btn btn-sm btn-primary me-2" target="_blank" onclick="printdiv()"><i
                                class="fa fa-file-pdf-o me-1"></i>PDF</a>
                    </div>
                    <!-- Invoice Info -->
                    <div id="print_this">
                        <div class="invoice-info text-end mb-4">
                            <h5 class="mb-1">لیست ماهانه</h5>
                            <h6>تعداد بیمه شونده ها :
                                {{\App\Models\bimeshode::all()->count()}}
                            </h6>
                            <p class="mb-0">تاریخ و ساعت :
                                <?php echo date("Y/m/d");?>
                            </p>
                        </div>
                        <!-- Invoice Table -->
                        <div class="invoice-table">
                            <div class="table-responsive">
                                <table class="table table-bordered caption-top">
                                    <caption>لیست بیمه شونده ها</caption>
                                    <thead class="table-light">
                                    <tr>
                                        <th>نام</th>
                                        <th>نام پدر</th>
                                        <th>محل تولد</th>
                                        <th>تاریخ تولد</th>
                                        <th>شماره ملی</th>
                                        <th>شماره شناسنامه</th>
                                        <th>شماره بیمه</th>
                                        <th>شغل</th>
                                        <th>مبلغ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bimeshodes as $bime)
                                        <tr>
                                            <td>{{ $bime->name }}</td>
                                            <td>{{ $bime->pdar }}</td>
                                            <td>{{ $bime->mahl_tvalod }}</td>
                                            <td>{{ $bime->tarikh_tvalod }}</td>
                                            <td>{{ $bime->mly }}</td>
                                            <td>{{ $bime->shnasname }}</td>
                                            <td>{{ $bime->bime }}</td>
                                            <td>@foreach(\App\Models\jab::where('id',$bime->id_jab)->get() as $ca)
                                                    {{$ca->name}}
                                                @endforeach</td>
                                            <td>{{ $bime->hag_karfama+$bime->hag_malyat }}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot class="table-light">
                                    <tr>
                                        <td class="text-end" colspan="8">مبلغ پرداختی:</td>
                                        <td class="text-end">{{$ka}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function printdiv() {
            var printContents = document.getElementById('print_this').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</div>

