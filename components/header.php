<header id="header">
    <div class="top p-1 d-none d-lg-block d-xl-block" style="background-color: #e8e8e8;">
        <div class="text-right mr-5">
            <ul class="list-unstyled align-items-center justify-content-center">
                <li class="align-middle list-inline-item border-start border-end border-secondary">
                    <a class="text-decoration-none black-blue-link" href="">
                        Marketplace
                    </a>
                </li>
                <li class="align-middle list-inline-item border-start border-end border-secondary">
                    <a class="text-decoration-none black-blue-link" href="">
                        Help
                    </a>
                </li>
                <li class="align-middle list-inline-item border-start border-end border-secondary">
                   <span onclick="changeCountryMenu()" class="font-weight-bold hover-blue-effect">
                        <span id="country-flag-container-top"></span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="center" style="background-color: #323232;">
        <!-- Large screen open -->
        <div class="d-none d-lg-block d-xl-block">
            <div class="container text-center">
                <ul class="list-unstyled align-items-center justify-content-center inline-block" style="display: inline-block;">
                    <li class="list-inline-item p-3">
                        <a style="font-size:24px;" class="font-weight-bold text-decoration-none text-white p-3" href="">
                            INTENSE
                        </a>
                    </li>
                    <li class="hover-brown list-inline-item p-3">
                        <a class="font-weight-bold text-decoration-none text-white p-3" href="./men.php">
                            MEN
                        </a>
                    </li>
                    <li class="hover-brown list-inline-item p-3">
                        <a class="font-weight-bold text-decoration-none text-white p-3" href="">
                            WOMEN
                        </a>
                    </li>
                </ul>
                <div class="inline-block" style="display: inline-block;">
                    <div class="input-group position-relative" style="width: 350px;">
                        <input id="main-seach-input" style="border-radius: 12px;" class="form-control form-rounded border-0" type="text" placeholder="Search..">
                        <div class="input-group-append border-0" style="border-radius: 12px;">
                            <span id="main-search-icon" class="input-group-text bg-white border-0 position-absolute h-100" style="border-radius: 12px; left:90%;">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="inline-block" style="display: inline-block;">
                    <div class="ml-2">
                        <ul class="list-unstyled m-0 mt-2 inline-block" style="display: inline-block;">
                            <li class="list-inline-item pl-2">
                                <i class="fa fa-user cursor-pointer text-white" style="font-size:33px;" aria-hidden="true"></i>
                            </li>
                            <li class="list-inline-item pl-2">
                                <a href="">
                                    <i class="fa fa-heart text-white" style="font-size:33px;" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item pl-2">
                                <a href="">
                                    <i class="fa fa-shopping-bag text-white" style="font-size:33px;" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Large screen close -->
        <!-- Small screen open -->
        <div class="d-lg-none d-xl-none">
            <div class="container">
                <div class="p-3">
                    <i class="fa fa-bars text-white cursor-pointer" style="font-size:26px;" aria-hidden="true"></i>
                    <a style="font-size:24px;" class="font-weight-bold text-decoration-none text-white mr-3 ml-3" href="">
                        INTENSE
                    </a>
                    <div class="inline-block" style="display: inline-block; float: right;">
                    <div class="ml-4">
                        <ul class="list-unstyled m-0 mt-2 inline-block" style="display: inline-block;">
                            <li class="list-inline-item">
                                <a href="">
                                    <i class="fa fa-search text-white" style="font-size:23px;" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li id="navbar-dropdown-item" class="list-inline-item position-relative">
                                <i id="navbar-user-icon" class="fa fa-user cursor-pointer text-white" style="font-size:23px;" aria-hidden="true"></i>
                                <div id="navbar-dropdown">
                                    asd
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <a href="">
                                    <i class="fa fa-heart text-white" style="font-size:23px;" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="">
                                    <i class="fa fa-shopping-bag text-white" style="font-size:23px;" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Small screen close -->
    </div>
    <div class="bottom d-none d-lg-block d-xl-block" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col pt-4">
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white" href="">MEN</a>
                </div>
                <div class="col text-center">
                    <div id="freeCodeText" class="text-white pt-3 pb-3 font-weight-bold blue-border-hover cursor-pointer">
                        <p style="font-size:14px;" class="m-0">NEW HERE? Get 20% off everything *</p>
                        <p style="font-size:14px;" class="m-0">With code: HELLO</p>
                    </div>
                </div>
                <div class="col text-right pt-4">
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white" href="">WOMEN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Drop open -->
        <div class="container">
            <div id="freeCodeMsg" class="text-center shadow-lg p-3 mb-5 bg-white rounded">
                <div class="mt-3">
                    <p>Enter code HELLO for 20% discound for first three products you buy</p>
                </div>
            </div>
        </div>
    <!-- Drop close -->
    <div class="bottom-mobile d-lg-none d-xl-none">
       <div class="text-center p-3 border-top" style="background-color: black;">
            <div class="container">
                <p style="font-size:18px;" class="m-0 text-white font-weight-bold">DISCOVER OVER 850 BRANDS</p>
            </div>
       </div>
    </div>
</header>