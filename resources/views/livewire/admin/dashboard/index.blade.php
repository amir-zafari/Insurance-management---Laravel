@section('titel','پنل مدیریت')
<div>
    <div class="header-area" id="headerArea">
        <div class="container">
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Logo Wrapper -->
                <div class="logo-wrapper"><a href="page-home.html"><img src="img/core-img/logo.png" alt=""></a></div>
                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- # Header Five Layout End -->
        </div>
    </div>
    <div class="page-content-wrapper">
        <!-- Welcome Toast -->
        <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert"
             aria-live="assertive" aria-atomic="true" data-bs-delay="6000" data-bs-autohide="true">
            <div class="toast-body">
                <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                    <path fill-rule="evenodd"
                          d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
                <div class="toast-text ms-3 me-2">
                    <p class="mb-1 text-white">به خانه بیمه خوش امدین</p><small class="d-block">روی "Add to Home Screen"
                        کلیک کنید تا برنامه روی سیستم شما نصب شود</small>
                </div>
            </div>
            <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast"
                    aria-label="Close"></button>
        </div>
        <!-- Hero Slides -->
        <div class="pt-4"></div>

        <div class="container">
            <div class="card">
                <div class="card-body direction-rtl">
                    <div class="row">
                        <div class="col-4">
                            <!-- Single Counter -->
                            <div class="single-counter-wrap text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-send-fill mb-3  text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                </svg>

                                <h4 class="mb-1   text-danger "><span class="counter">{{$karfarma}}</span>تومان </h4>
                                <p class="mb-0">پرداخت با کارفرمایان</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- Single Counter -->
                            <div class="single-counter-wrap text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-piggy-bank-fill  mb-3  text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                                </svg>
                                <h4 class="mb-1 text-warning "><span class="counter">{{$pol}}</span>تومان </h4>
                                <p class="mb-0">جمع پرداختی ها</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- Single Counter -->
                            <div class="single-counter-wrap text-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-gem mb-3 text-success" viewBox="0 0 16 16">
                                    <path
                                        d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/>
                                </svg>
                                <h4 class="mb-1 text-success"><span class="counter">{{$pol-$karfarma}}</span>تومان </h4>
                                <p class="mb-0">سود خالص</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-3"></div>

        <div class="container direction-rtl">

            <div class="card-body">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-card mx-auto text-center">
                            <div class="border-content border text-center mx-auto d-block bg-light rounded-circle"
                                 style="width: 8rem; height: 8rem;">
                                <a href="/bimeshode">
                                    <svg class="bi bi-award text-primary" xmlns="http://www.w3.org/2000/svg" width="100"
                                         height="110" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card mx-auto text-center">
                            <div class="border-content border text-center mx-auto d-block bg-light rounded-circle"
                                 style="width: 8rem; height: 8rem;">
                                <a href="/karfarma">
                                    <svg class="bi bi-award text-primary" xmlns="http://www.w3.org/2000/svg" width="100"
                                         height="110" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd"
                                              d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-card mx-auto text-center">
                            <div class="border-content border text-center mx-auto d-block bg-light rounded-circle"
                                 style="width: 8rem; height: 8rem;">
                                <a href="/hogog">
                                    <svg class="bi bi-award text-primary" xmlns="http://www.w3.org/2000/svg" width="80"
                                         height="110" fill="currentColor" viewBox="0 0 16 13">
                                        <path
                                            d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card mx-auto text-center">
                            <div class="border-content border text-center mx-auto d-block bg-light rounded-circle"
                                 style="width: 8rem; height: 8rem;">
                                <a href="/pol">
                                    <svg class="bi bi-award text-primary" xmlns="http://www.w3.org/2000/svg" width="100"
                                         height="115" fill="currentColor" viewBox="0 0 16 14">
                                        <path
                                            d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"></path>
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card bg-primary mb-2 bg-img" style="background-image: url('img/core-img/1.png')">
            <div class="card-body direction-rtl p-3">
                <div class="row g-1">
                    <h1 class=" text-center text-white">اطلاعات تماس</h1>
                    <div class="col-6 ">
                        <div class="feature-card mx-auto text-center">
                            <h2 class="text-white">کارفرم ها</h2>
                            @foreach ($karfarmas as $kar)
                                <div class="row">
                                    <p class="col-6 mb-1 text-white">{{$kar->name}}</p>
                                    <a style="color: white;padding: 0;margin-right: -18px;" class=" col-3 btn mb-3 btn-sm btn-link"
                                       href="https://api.whatsapp.com/send?phone=98{{$kar->somare}}&text=سلام "><i
                                            class="fa fa-whatsapp"></i></a>

                                    <a style="color: white;padding: 0;margin-right: -2px;padding-left: 28px;" class="col-3 btn mb-3 " href="tel:0{{$kar->somare}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                    </a>
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card mx-auto text-center">
                            <h2 class="text-white">بیمه شده ها</h2>
                            @foreach ($bimeshodes as $bim)
                                <div class="row">
                                    <p class="col-6 mb-1 text-white">{{$bim->name}}</p>
                                    <a style="color: white;padding: 0;margin-right: -18px;" class=" col-3 btn mb-3 btn-sm btn-link"
                                       href="https://api.whatsapp.com/send?phone=98{{$bim->somare}}&text=سلام "><i
                                            class="fa fa-whatsapp"></i></a>

                                    <a style="color: white;padding: 0;margin-right: -2px;padding-left: 28px;" class="col-3 btn mb-3 " href="tel:0{{$bim->somare}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                    </a>
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3"></div>
</div>







