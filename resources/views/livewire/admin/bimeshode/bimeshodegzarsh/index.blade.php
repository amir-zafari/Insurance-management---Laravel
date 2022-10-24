@section('titel', ' گزارش ')

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
                    <h6 class="mb-0">گزارش</h6>
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
            <div class="card product-details-card mb-3">
                <span class="badge bg-warning text-dark position-absolute product-badge">مدارک</span>
                <div class="card-body">
                    <div class="product-gallery owl-carousel">
                        @foreach ($gallerys as $bimeshode)
                            <div class="single-product-image"><a class="gallery-img2"
                                                                 href="{{ asset("storage/$bimeshode->img ") }}"
                                                                 data-effect="mfp-zoom-in"><img class="rounded"
                                                                                                src="{{ asset("storage/$bimeshode->img ") }}"
                                                                                                alt=""></a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card product-details-card mb-3 direction-rtl">
                <div class="card-body">
                    @foreach ($bimeshodes as $bimeshode)
                        <h4>{{$bimeshode->name}}</h4>
                        <br>
                        <h4>پول پرداختی : {{$bimeshode->hag_ma}}</h4>
                        <h4>پول کارفرما : {{$bimeshode->hag_karfama+$bimeshode->hag_malyat}}
                            (مالیات{{$bimeshode->hag_malyat}})</h4>
                        <h4>کار فرما:
                            @foreach(\App\Models\karfarma::where('id',$bimeshode->id_karfama)->get() as $ca)
                                {{$ca->name}}</h4>
                        <h4>شماره کارفرما : {{$ca->somare}}</h4>

                    @endforeach

                </div>
            </div>
            <div class="card product-details-card mb-3 direction-rtl">
                <div class="card-body">
                    <h5>توضیحات</h5>
                    <p class="mb-0">{{$bimeshode->text}}</p>
                    <div class="card-body p-3">

                        <table class="data-table w-100" id="dataTable">
                            <thead>
                            <tr>
                                <th>مشخصات</th>
                                <th>اطلاعات</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>نام</td>
                                <td>{{ $bimeshode->name }}</td>
                            </tr>
                            <tr>
                                <td>نام پدر</td>
                                <td>{{ $bimeshode->pdar }}</td>
                            </tr>
                            <tr>
                                <td>شغل</td>
                                <td>@foreach(\App\Models\jab::where('id',$bimeshode->id_jab )->get() as $ca)
                                    {{$ca->name}}</h4>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>تاریخ تولد</td>
                                <td>{{ $bimeshode->tarikh_tvalod }}</td>
                            </tr>
                            <tr>
                                <td>محل تولد</td>
                                <td>{{ $bimeshode->mahl_tvalod }}</td>
                            </tr>
                            <tr>
                                <td>شماره بیمه</td>
                                <td>{{ $bimeshode->bime }}</td>
                            </tr>
                            <tr>
                                <td>شماره ملی</td>
                                <td>{{ $bimeshode->mly }}</td>
                            </tr>
                            <tr>
                                <td>شماره شناسنامه</td>
                                <td>{{ $bimeshode->shnasname }}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="card related-product-card mb-3 direction-rtl">
                <div class="card-body">

                    <?php $dataPoints = []; ?>
                    @foreach ($gozarshPardakhts as $item)
                        <p>ایدی کار فرما  {{$item->id_karfama_bimeshode}} =>
                        نام کار فرما
                            @foreach(\App\Models\karfarma::where('id',$item->id_karfama_bimeshode)->get() as $ca)
                            {{$ca->name}}</h4>

                            @endforeach

                        </p>
                        <?php
                        array_push($dataPoints, ["y" => $item->id_karfama_bimeshode, "label" => $item->getCreatedAtInJalali()]);
                        ?>

                    @endforeach

                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                </div>
                <div class="card-body">

                    <?php $dataPoints1 = []; ?>
                    @foreach ($gozarshPardakhts as $item)
                        <p>ایدی کار   {{$item->id_jab}} =>
                            نام کار
                            @foreach(\App\Models\jab::where('id',$item->id_karfama_bimeshode)->get() as $ca)
                            {{$ca->name}}</h4>

                            @endforeach

                        </p>
                        <?php
                        array_push($dataPoints1, ["y" => $item->id_karfama_bimeshode, "label" => $item->getCreatedAtInJalali()]);
                        ?>

                    @endforeach

                    <script>
                        window.onload = function () {
                            var chart = new CanvasJS.Chart("chartContainer", {
                                title: {
                                    text: "کارفرما"
                                },
                                axisY: {
                                    title: ""
                                },
                                data: [{
                                    type: "line",
                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                }]
                            });
                            chart.render();

                            var chart = new CanvasJS.Chart("chartContainer1", {
                                title: {
                                    text: "شغل"
                                },
                                axisY: {
                                    title: ""
                                },
                                data: [{
                                    type: "line",
                                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                }]
                            });
                            chart.render();
                        }
                    </script>

                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>

                </div>

            </div>
            <div class="card product-details-card direction-rtl">
            <div class="card-body ">
<h4>گردش حقوق</h4>
                <table class="data-table w-100" id="dataTable">
                    <thead>
                    <tr>
                        <th>تاریخ</th>
                        <th>تایید</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($gozarshGrdeshs as $bimeshode)
                    <tr>
                        <td>{{ $bimeshode->getCreatedAtInJalali() }}</td>
                        <td>
                            {{ $bimeshode->bime }}</td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            </div>
        </div>

    </div>
</div>
