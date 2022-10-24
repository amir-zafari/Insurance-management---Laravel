@section('titel', 'گزارشات ')

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
                    <h6 class="mb-0">گزارشات</h6>
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
                        <a class="btn btn-sm btn-light" wire:click="bime()"><i class="fa fa-print me-1"></i>ثبت اطلاعات</a>
                    </div>
                    <!-- Invoice Info -->
                    <div id="print_this">
                        <div class="invoice-info text-end mb-4">
                            <h5 class="mb-1">گزارش گیری ماهانه</h5>
                            <h6>شماره برگه :
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
                                        <th>نام بیمه شده</th>
                                        <th>شماره تلفن</th>
                                        <th>کارفرما بیمه شده</th>
                                        <th>گردش حقوق</th>
                                        <th>مبلغ پرداختی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bimeshodes as $bime)
                                        <tr>
                                            <td>{{ $bime->name }}</td>
                                            <td>{{ $bime->somare }}</td>
                                            <td>@foreach(\App\Models\karfarma::where('id',$bime->id_karfama)->get() as $ca)
                                                    {{$ca->name}}
                                                @endforeach</td>
                                            <td>@if ($bime->pardakht_hgog == 3)
                                                    <span class="m-1 text-dark">پرداخت کامل</span>
                                                @elseif($bime->pardakht_hgog == 2)
                                                    <span class="m-1  text-dark">پرداخت ناقص</span>
                                                @elseif($bime->pardakht_hgog == 1)
                                                    <span class="m-1  text-dark">پرداخت ناقص</span>
                                                @else
                                                    <span class="m-1 text-dark">پرداخت نشده</span>
                                                @endif</td>
                                            <td>@if ($bime->pardakht == 1) {
                                                <span class="m-1 text-dark">پرداخت شده({{$bime->hag_ma}})</span>
                                                @else
                                                    <span class="m-1 text-dark">پرداخت نشده({{$bime->hag_ma}})</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot class="table-light">
                                    <tr>
                                        <td class="text-end" colspan="4">مبلغ پرداختی:</td>
                                        <td class="text-end">{{$pol}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-table">
                            <div class="table-responsive">
                                <table class="table table-bordered caption-top">
                                    <caption>لیست کارفرمایان</caption>
                                    <thead class="table-light">
                                    <tr>
                                        <th>نام کارفرما</th>
                                        <th>شماره تلفن</th>
                                        <th>گردش حقوق</th>
                                        <th>مبلغ دریافتی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($karfarmas as $kar){
                                    ?>
                                    <tr>
                                        <td>{{ $kar->name }}</td>
                                        <td>{{ $kar->somare }}</td>
                                        <td>@if ($kar->gardsh == 1)
                                            <span class="m-1 text-dark">گردش حقوق دارد</span>
                                            @else
                                                <span class="m-1 text-dark">گردش حقوق ندارد</span>
                                            @endif
                                        </td>
                                        <td>
                                            <?php
                                            $print = 0;
                                            foreach (\App\Models\bimeshode::where('id_karfama', $kar->id)->get() as $ca) {
                                                $print += $ca->hag_karfama + $ca->hag_malyat;
                                            }
                                            echo $print;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot class="table-light">
                                    <tr>
                                        <td class="text-end" colspan="3">مبلغ پرداختی:</td>
                                        <td class="text-end">{{$ka}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-end" colspan="3">مبلغ سود:</td>
                                        <td class="text-end">{{$pol-$ka}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <p class="mb-0">Notice: This is auto generated invoice.</p>
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

