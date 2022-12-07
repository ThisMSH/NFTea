<?php
include "connectData/connect.php";
session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to our NFT store.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cloud_&_cup.css">
    <script src="https://kit.fontawesome.com/b44b654493.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>NFTea</title>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md p-3 header-navbar">
            <div class="container-lg">
                <a href="index-log.php" class="navbar-brand d-flex align-items-center logo">
                    <!-- Start of coffee cup in header -->
                    <div class="d-flex cupcup cupcup-header">
                        <div class="cup-container">
                            <div class="cup-handle cup-handle-header"></div>
                            <div class="cup cup-header">
                                <div class="cup-top cup-top-header">
                                    <div class="cup-vapour cup-vapour-header">
                                        <span style="--i:1"></span>
                                        <span style="--i:5"></span>
                                        <span style="--i:12"></span>
                                        <span style="--i:6"></span>
                                        <span style="--i:8"></span>
                                        <span style="--i:3"></span>
                                        <span style="--i:14"></span>
                                        <span style="--i:19"></span>
                                        <span style="--i:11"></span>
                                        <span style="--i:4"></span>
                                        <span style="--i:7"></span>
                                        <span style="--i:10"></span>
                                        <span style="--i:2"></span>
                                        <span style="--i:17"></span>
                                    </div>
                                    <div class="cup-vapour-two cup-vapour-two-header">
                                        <div class="mid-vapour vap1-header"></div>
                                        <div class="mid-vapour vap2-header"></div>
                                    </div>
                                    <div class="cup-circle-top cup-circle-top-header"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of coffee cup in header -->
                    <span class="nftea-header">NF<span>Tea</span></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title nftea-offcanvas" id="offcanvasNavbarLabel"><span>NF<span>Tea</span></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto gap-2">
                            <li class="nav-item">
                                <a href="index-log.php" class="nav-link nav-link-mod active">
                                    <span class="px-lg-3 px-md-2">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="collection-log.php" class="nav-link nav-link-mod">
                                    <span class="px-lg-3 px-md-2">Collection</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="stats-log.php" class="nav-link nav-link-mod">
                                    <span class="px-lg-3 px-md-2">Stats</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Logout -->
                        <a href="#" class="user-header">
                            <img src="img/default-user-icon-8.jpg" alt="User Default Avatar">
                        </a>
                        <div class="user-container">
                            <div class="user-info">
                                <p><?php echo $_SESSION['username'] ?></p>
                                <a href="connectData/destroyed.php" class="btn rounded-pill px-3 py-2 btn-login btn-logout"><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        <!-- Scroll to Top button -->
        <button onclick="topFunction()" id="ScrollTop">
            <img src="img/scroll-top-studioz.png" alt="">
        </button>
        <!-- Top page -->
        <div class="container top-page">
            <div class="row">
                <div class="col top-page-welcome">
                    <p class="home-welcome">
                        Welcome to <span>NF<span>Tea</span></span>,<br>where you can<br>
                        <div class="text-rotate-container">
                            <div class="text-rotate" id="t-r1"><p>Explore...</p></div>
                            <div class="text-rotate" id="t-r2"><p>Collect...</p></div>
                            <div class="text-rotate" id="t-r3"><p>Sell...</p></div>
                            <div class="text-rotate" id="t-r4"><p>Mint...</p></div>
                        </div>
                    </p>
                    <div class="home-welcome-btn">
                        <div class="btn-home-top">
                            <a href="collection.php">Collections</a>
                        </div>
                        <div class="btn-home-top">
                            <a href="stats.php">Statistics</a>
                        </div>
                    </div>
                </div>
                <div class="col top-page-logo">
                    <!-- Start of the cloud -->
                    <div class="cloud">
                        <div class="cloud-itc-ani">
                            <div class="itc-cloud"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-itc">
                                <defs>
                                    <linearGradient id="gradient-fill-itc" x2="1" y2="1">
                                        <stop offset="0%" stop-color=#8ea6f6 />
                                        <stop offset="50%" stop-color=#fff />
                                        <stop offset="100%" stop-color=#cc9ce4 />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm-5.573-12.786L9.252 24h12.875L23 20.429h-7.722l.848-3.483 1.427-.571.68-2.75-1.41.571L18.342 8h-5.129l-2.081 8.429-1.444.58L9 19.768l1.427-.554z"/>
                            </svg>
                        </div>
                        <div class="cloud-eth-ani">
                            <div class="eth-cloud"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-eth">
                                <defs>
                                    <linearGradient id="gradient-fill-eth" x1="1" y1="1">
                                        <stop offset="0%" stop-color=#8ea6f6 />
                                        <stop offset="50%" stop-color=#fff />
                                        <stop offset="100%" stop-color=#cc9ce4 />
                                    </linearGradient>
                                </defs>
                                <g fill-rule="evenodd">
                                    <path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm7.994-15.781L16.498 4 9 16.22l7.498 4.353 7.496-4.354zM24 17.616l-7.502 4.351L9 17.617l7.498 10.378L24 17.616z"/>
                                    <g fill-rule="nonzero">
                                        <path fill-opacity=".298" d="M16.498 4v8.87l7.497 3.35zm0 17.968v6.027L24 17.616z"/>
                                        <path fill-opacity=".801" d="M16.498 20.573l7.497-4.353-7.497-3.348z"/>
                                        <path fill-opacity=".298" d="M9 16.22l7.498 4.353v-7.701z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="cloud-btc-ani">
                            <div class="btc-cloud"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-btc">
                                <defs>
                                    <linearGradient id="gradient-fill-btc" x2="1" y1="1">
                                        <stop offset="0%" stop-color=#8ea6f6 />
                                        <stop offset="50%" stop-color=#fff />
                                        <stop offset="100%" stop-color=#cc9ce4 />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm7.189-17.98c.314-2.096-1.283-3.223-3.465-3.975l.708-2.84-1.728-.43-.69 2.765c-.454-.114-.92-.22-1.385-.326l.695-2.783L15.596 6l-.708 2.839c-.376-.086-.746-.17-1.104-.26l.002-.009-2.384-.595-.46 1.846s1.283.294 1.256.312c.7.175.826.638.805 1.006l-.806 3.235c.048.012.11.03.18.057l-.183-.045-1.13 4.532c-.086.212-.303.531-.793.41.018.025-1.256-.313-1.256-.313l-.858 1.978 2.25.561c.418.105.828.215 1.231.318l-.715 2.872 1.727.43.708-2.84c.472.127.93.245 1.378.357l-.706 2.828 1.728.43.715-2.866c2.948.558 5.164.333 6.097-2.333.752-2.146-.037-3.385-1.588-4.192 1.13-.26 1.98-1.003 2.207-2.538zm-3.95 5.538c-.533 2.147-4.148.986-5.32.695l.95-3.805c1.172.293 4.929.872 4.37 3.11zm.535-5.569c-.487 1.953-3.495.96-4.47.717l.86-3.45c.975.243 4.118.696 3.61 2.733z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="nft-cloud"></div>
                            <img class="cloud-icon" src="img/icons/nft.png" alt="NFT icon" style="--i:3">
                        </div>
                    </div>
                    <!-- Start of the Tea Cup -->
                    <div class="cupcup">
                        <div class="cup-container">
                            <div class="cup-handle"></div>
                            <div class="cup">
                                <div class="cup-top">
                                    <div class="cup-vapour">
                                        <span style="--i:1"></span>
                                        <span style="--i:5"></span>
                                        <span style="--i:12"></span>
                                        <span style="--i:6"></span>
                                        <span style="--i:8"></span>
                                        <span style="--i:3"></span>
                                        <span style="--i:14"></span>
                                        <span style="--i:19"></span>
                                        <span style="--i:11"></span>
                                        <span style="--i:4"></span>
                                        <span style="--i:7"></span>
                                        <span style="--i:10"></span>
                                        <span style="--i:2"></span>
                                        <span style="--i:17"></span>
                                    </div>
                                    <div class="cup-vapour-two">
                                        <div class="mid-vapour vap1"></div>
                                        <div class="mid-vapour vap2"></div>
                                    </div>
                                    <div class="cup-circle-top"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nftea-home">
                        <h1>NF<span>Tea</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page break purple start -->
        <div class="break-display">
            <div class="page-break p-b-purple">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="page-break p-b-purple">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!-- Brief statistics -->
        <?php 
        $totalCol = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM collection "));
        $totalNft = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM nft "));
        $totalUsers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users "));
        $order = mysqli_query($conn,"SELECT * FROM `nft` ORDER BY `nft`.`prix` ASC");
        $row = mysqli_fetch_assoc($order);
        ?>
        <div class="container-bg-purple">
            <div class="title-container d-flex justify-content-center">
                <h2 class="titles">Quick Statistics</h2>
            </div>
            <div class="container">
                <div class="row breif-stats">
                    <div class="col-12 col-md">
                        <p><?php echo $totalCol  ?></p>
                        <p>Total Collections</p>
                    </div>
                    <div class="col-12 col-md">
                        <p><?php echo $totalNft  ?></p>
                        <p>Total NFTs</p>
                    </div>
                    <div class="col-12 col-md">
                        <p><?php
                        if(mysqli_num_rows($order) === 0)
                        {
                            echo 0;
                        }else{
                            echo $row['prix'];
                        }
                          ?></p>
                        <p>Floor Price (ETH)</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page break purple end -->
        <div class="break-display">
            <div class="page-break p-b-purple p-b-180">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="page-break p-b-purple p-b-180">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!-- Some of our collection -->
        <div class="title-container d-flex justify-content-center">
            <h2 class="titles">Our latest NFTs</h2>
        </div>
        <div class="container collection-home">
            <div class="row">
            <?php 
            
            if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `nft` ")) < 3)
            {
                $i = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `nft`"));
            }else{
                $i = 3;
            }
            $sqlN = mysqli_query($conn, "SELECT * FROM `nft` order by `Nid` desc");
            while($i>0 && $rowColl = mysqli_fetch_assoc($sqlN)){
                
                ?>
                <div class="col">
                    
                    <div class="collection-container">
                        <div class="collection-1"></div>
                        <div class="collection-1-img">
                            <img src="<?php echo $rowColl['image']?>" alt="member image">
                        </div>
                        <div class="collection-1-name">
                            <h3><?php echo $rowColl['name']?></h3>
                        </div>
                    </div>
                </div>
                <?php $i--; }?>
                <!-- <div class="col">
                    <div class="collection-container">
                        <div class="collection-1"></div>
                        <div class="collection-1-img">
                            <img src="img/worryHypeCry.png" alt="member image">
                        </div>
                        <div class="collection-1-name">
                            <h3>Name of the NFT</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collection-container">
                        <div class="collection-1"></div>
                        <div class="collection-1-img">
                            <img src="img/worryHypeCry.png" alt="member image">
                        </div>
                        <div class="collection-1-name">
                            <h3>Name of the NFT</h3>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Page break blue start -->
        <div class="break-display">
            <div class="page-break p-b-blue">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-b" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#809af5 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="page-break p-b-blue">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-b" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#809af5 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!-- About Us -->
        <div class="container-bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center">
                        <h2 class="titles">About Us</h2>
                        <div class="home-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugit numquam officiis ab quidem quae voluptate quisquam rem, mollitia recusandae, necessitatibus iure perferendis libero voluptatem. Id, aliquam nostrum ea perspiciatis quaerat reprehenderit repellat tempora corrupti numquam pariatur fuga vel illum alias quia accusantium maxime dicta laborum fugit. Nulla, porro beatae.</div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page break blue end -->
        <div class="break-display">
            <div class="page-break p-b-blue p-b-180">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-b" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#809af5 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="page-break p-b-blue p-b-180">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-b" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#809af5 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!-- Our Team -->
        <div class="title-container d-flex justify-content-center">
            <h2 class="titles">Our Team</h2>
        </div>
        <div class="container team">
            <div class="row">
                <div class="col">
                    <div class="team-member">
                        <div class="member"></div>
                        <div class="member-img">
                            <img src="img/worryTongue.gif" alt="member image">
                        </div>
                        <div class="member-info">
                            <div class="member-details">
                                <h3>El Mahdi Saissi Hassani</h3>
                                <p class="hover-hint">Hover on me!<br></p>
                                <p class="click-hint">Click on me!<br></p>
                                <p><span><span>You</span>Code</span> Learner</p>
                                <p class="member-contact">Contact info</p>
                                <div class="member-socials">
                                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member">
                        <div class="member member-purple"></div>
                        <div class="member-img member-img-purple">
                            <img src="img/sali.jpg" alt="member image">
                        </div>
                        <div class="member-info">
                            <div class="member-details">
                                <h3>Tobana Skious</h3>
                                <p class="hover-hint">Hover on me!<br></p>
                                <p class="click-hint">Click on me!<br></p>
                                <p><span><span>You</span>Code</span> Learner</p>
                                <p class="member-contact">Contact info</p>
                                <div class="member-socials">
                                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member">
                        <div class="member"></div>
                        <div class="member-img">
                            <img src="img/103.gif" alt="member image">
                        </div>
                        <div class="member-info">
                            <div class="member-details">
                                <h3>Abdesslam Hannouni</h3>
                                <p class="hover-hint">Hover on me!<br></p>
                                <p class="click-hint">Click on me!<br></p>
                                <p><span><span>You</span>Code</span> Learner</p>
                                <p class="member-contact">Contact info</p>
                                <div class="member-socials">
                                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page break purple start -->
        <div class="break-display">
            <div class="page-break p-b-purple">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="page-break p-b-purple">
                <svg id="ejzxV0PmoEn1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" width="1920" height="300">
                    <defs>
                        <linearGradient id="gradient-fill-p" x2="0" y2="1">
                            <stop offset="0%" stop-color=#fff />
                            <stop offset="100%" stop-color=#c895e3 />
                        </linearGradient>
                    </defs>
                    <g>
                        <path d="M-3.759262,146.192424l87.67102,55.790649l10.868308-7.245539L194.043948,91.850883q32.604925.000001,32.604925.724554t111.943575,159.401854l30.068986-5.796431L485.31461,171.55181l46.009171-50.356495L665.728527,63.955558l55.428372.362277l80.787758,114.479514l28.257602-6.158708L935.262572,87.865836l33.691756,3.62277l54.703818,78.976373l28.926761,26.201344l80.434371,83.137472l17.772336-1.777233l96.563026-140.105251l45.615663,3.554468l124.110148,56.57527l35.840878-2.369645L1564.887047,67.128172l67.238671,2.962056l47.985308,159.951026l19.253364-3.554467L1805.702202,93.194265l36.729495,4.443084l79.226771,51.515092l1.159352,153.171264-1925.089678.175086q-1.575979-156.176984-1.487404-156.306367Z" fill="#fff" stroke-width="0"/>
                        <g transform="translate(0 0.000001)">
                            <line x1="51.647722" y1="-53.492284" x2="-51.647722" y2="53.492284" transform="translate(141.455698 145.839596)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-59.566851" y1="-85.0955" x2="59.56685" y2="85.095501" transform="translate(282.442534 172.535167)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-66.439948" y1="41.565879" x2="66.439948" y2="-41.565879" transform="translate(424.486561 210.173561)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="73.149401" y1="-31.256232" x2="-73.149401" y2="31.256232" transform="translate(592.550174 95.13099)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="46.147944" y1="64.476206" x2="-46.147944" y2="-64.476206" transform="translate(759.631916 119.841414)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="58.527798" y1="-47.369228" x2="-58.527798" y2="47.369227" transform="translate(880.292682 131.860259)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-30.850166" y1="-44.634283" x2="30.850167" y2="44.634283" transform="translate(995.926108 130.438088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="-42.906133" y1="-43.60493" x2="42.906134" y2="43.60493" transform="translate(1093.69558 239.210341)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="50.044054" y1="-72.609372" x2="-50.044053" y2="72.609372" transform="translate(1198.909653 208.176476)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="71.611861" y1="32.435961" x2="-71.611861" y2="-32.435961" transform="translate(1353.732812 169.295448)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="61.508056" y1="-71.006769" x2="-61.508056" y2="71.006769" transform="translate(1508.968551 131.238691)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="25.373832" y1="83.308304" x2="-25.373832" y2="-83.308304" transform="translate(1655.677829 148.01355)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="57.494463" y1="-71.86808" x2="-57.494463" y2="71.86808" transform="translate(1751.746385 160.333792)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(-5.517539 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <line x1="78.482462" y1="50.606178" x2="-78.482461" y2="-50.606177" transform="translate(1914.482461 144.449088)" fill="none" stroke="inherit" stroke-width="3"/>
                            <rect width="46" height="46" rx="3" ry="3" transform="translate(186 54)"/>
                            <rect width="40" height="40" rx="3" ry="3" transform="translate(331 243)"/>
                            <rect width="60" height="60" rx="3" ry="3" transform="translate(475 119)"/>
                            <rect width="70" height="70" rx="3" ry="3" transform="translate(654 0)"/>
                            <rect width="38" height="38" rx="3" ry="3" transform="translate(795.099707 170)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(926.540684 50)"/>
                            <rect width="36" height="36" rx="3" ry="3" transform="translate(1018.708844 164)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1129 275)"/>
                            <rect width="55" height="55" rx="3" ry="3" transform="translate(1242.062771 90)"/>
                            <rect width="47" height="47" rx="3" ry="3" transform="translate(1409 193)"/>
                            <rect width="75" height="75" rx="3" ry="3" transform="translate(1559-2.145577)"/>
                            <rect width="25" height="25" rx="3" ry="3" transform="translate(1677 223)"/>
                            <rect width="45" height="45" rx="3" ry="3" transform="translate(1800 55)"/>
                            <rect width="32" height="32" rx="3" ry="3" transform="translate(66.999999 190)"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row footer-links">
                <div class="col-12 col-md nftea-footer d-flex align-items-center justify-content-evenly">
                    <!-- Coffe Cup logo in footer -->
                    <div class="d-flex cupcup cupcup-header">
                        <div class="cup-container">
                            <div class="cup-handle cup-handle-header cup-handle-footer"></div>
                            <div class="cup cup-header">
                                <div class="cup-top cup-top-header cup-top-footer">
                                    <div class="cup-vapour cup-vapour-header cup-vapour-footer">
                                        <span style="--i:1"></span>
                                        <span style="--i:5"></span>
                                        <span style="--i:12"></span>
                                        <span style="--i:6"></span>
                                        <span style="--i:8"></span>
                                        <span style="--i:3"></span>
                                        <span style="--i:14"></span>
                                        <span style="--i:19"></span>
                                        <span style="--i:11"></span>
                                        <span style="--i:4"></span>
                                        <span style="--i:7"></span>
                                        <span style="--i:10"></span>
                                        <span style="--i:2"></span>
                                        <span style="--i:17"></span>
                                    </div>
                                    <div class="cup-circle-top cup-circle-top-header"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of the Coffe Cup logo -->
                    <div class="nftea-footer-name">
                        <span>NF<span>Tea</span>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Crypto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="socials-footer">
            <a href="#"><i class="fa-brands fa-discord"></i></a>
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-square-reddit"></i></a>
            <a href="#"><i class="fa-brands fa-square-youtube"></i></a>
        </div>
        <div class="copyright">© 2022 NFTea, Inc. All rights reserved.</div>
    </footer>
</body>
</html>