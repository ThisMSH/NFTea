<?php
include "connectData/connect.php"?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script defer src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Collection</title>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md p-3 header-navbar">
            <div class="container-lg">
                <a href="index.php" class="navbar-brand d-flex align-items-center logo">
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
                                <a href="index.php" class="nav-link nav-link-mod">
                                    <span class="px-lg-3 px-md-2">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="collection.php" class="nav-link nav-link-mod active">
                                    <span class="px-lg-3 px-md-2">Collection</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="stats.php" class="nav-link nav-link-mod">
                                    <span class="px-lg-3 px-md-2">Stats</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Login -->
                        <a href="log.php">
                            <button class="btn rounded-pill px-3 py-2 nav-link-mod btn-login"><span>Login</span></button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Scroll to Top button -->
        <button onclick="topFunction()" id="ScrollTop">
            <img src="img/scroll-top-studioz.png" alt="">
        </button>
        <!-- Top page -->
        <div class="container top-collection">
            <div class="row top-collection-row">
                <div class="col-12 col-md-6">
                    <p class="top-collection-welcome">
                        Here where you can Discover Our Collections and NFTs, and even add your own ones. 
                    </p>
                    <div class="home-welcome-btn">
                        <div class="btn-home-top btn-home-top-mod">
                            <a href="log.php" data-bs-toggle="" data-bs-target="">Add Collection</a>
                        </div>
                        <div class="btn-home-top">
                            <a href="log.php" data-bs-toggle="" data-bs-target="">Add NFT</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="img/Coll1/1.png" class="d-block" alt="NFT Image">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/Coll2/1.png" class="d-block" alt="NFT Image">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/Coll3/1.png" class="d-block" alt="NFT Image">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/Coll4/1.png" class="d-block" alt="NFT Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
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
        <!-- Content -->
        <div class="container-bg-blue">
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <div>
                            <nav>
                                <div class="nav nav-tabs collection-nav" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="collections-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL Collections</button>
                                    <button class="nav-link" id="nfts-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ALL NFTs</button>
                                </div>
                            </nav>
                            <br>
                            <div class="tab-content" id="nav-tabContent">
                                <!-- All Collections content -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="collections-tab" tabindex="0">
                                    <div class="container">
                                        <div class="row">
                                        <?php 
                                                $Coll = mysqli_query($conn,"select * from collection");
                                                $i = 0;
                                                while($row1 = mysqli_fetch_assoc($Coll) ) { 
                                                    $p = $row1['Pid'];
                                                                                                        
                                                            $name = mysqli_query($conn,"select * from users where Pid = $p");
                                                            $user = mysqli_fetch_assoc($name);
                                                            ?>
                                            <div class="col-12 col-md-4 mb-4">
                                                <div class="card p-3">
                                                    <img src="img/1.jpg" class="card-img-top" alt="Collection image">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><i class="fa-solid fa-signature"></i> <?php echo $row1['name'] ?> <i class="fa-solid fa-paintbrush"></i></h5>
                                                        <p class="card-text"><i class="fa-solid fa-palette"></i> Made by: <span><?php echo $user['username']?></span></p>
                                                        <p class="card-ID"><i class="fa-solid fa-hashtag"></i> ID: <span>#<?php echo $row1['Cid']?></span></p>
                                                    </div>
                                                    <div class="btn-container">
                                                        <a href="coll.php?ID=<?php echo $row1['Cid']?>" type="button" class="btn btn-primary add-delete-btn special-btn bg-gradient">
                                                            <i class="bi bi-patch-plus-fill"></i>
                                                            <p>Click to see NFTs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- ALL NFTs content -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nfts-tab" tabindex="0">
                                    <div class="container">
                                        <div class="row">
                                        <?php
                                        $Nft = mysqli_query($conn,"select * from nft ");
                                        while($row2 = mysqli_fetch_assoc($Nft)){
                                                $p = $row2['Pid'];
                                                $n = mysqli_query($conn,"select * from users where Pid = $p");
                                                $name = mysqli_fetch_assoc($n);
                                                ?>
                                            <div class="col-12 col-md-4 mb-4">
                                                <div class="card p-3">
                                                    <img src="<?php echo $row2['image']?>" class="card-img-top" alt="Collection image">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-signature" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M3 17c3.333 -3.333 5 -6 5 -8c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 4.877 2.5 6c1.5 2 2.5 2.5 3.5 1l2 -3c.333 2.667 1.333 4 3 4c.53 0 2.639 -2 3 -2c.517 0 1.517 .667 3 2" />
                                                            </svg>
                                                            <?php echo $row2['name']?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing-sign" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                                                                <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                                                                <path d="M16 7h4" />
                                                            </svg>
                                                        </h5>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <p class="card-text"><i class="fa-solid fa-user-large"></i> Owned by: <span><?php echo $name['username']?></span></p>
                                                                    <p class="card-collection"><i class="fa-solid fa-folder"></i> Collection: <span>#</span><?php echo $row2['Cid']?></p>
                                                                    <p class="card-ID"><i class="fa-solid fa-hashtag"></i> ID: <span>#<?php echo $row2['Nid']?></span></p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="card-price"><i class="fa-solid fa-coins"></i> Price:<br><br> <span><?php echo $row2['prix']?></span> ETH</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p class="card-description">Description:</p>
                                                                    <p class="card-description-details"><?= $row2['description']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <!-- FAQ section -->
        <div class="title-container d-flex justify-content-center">
            <h2 class="titles">FAQ</h2>
        </div>
        <div class="container faq-container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    What is an NFT?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    An <strong>NFT</strong> (non-fungible token) is a unique digital item stored on a blockchain. NFTs can represent almost anything, and serve as a digital record of ownership.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is a crypto wallet?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    A <strong>crypto wallet</strong> is a program that helps you buy, sell, and store your cryptocurrency and (in many cases) your NFTs. Think of it as your address on the blockchain— you can send and receive items from it, it stores your items, and you want to keep it locked and safe. In this article, we’ll walk through the types of crypto wallets and how to set one up.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is a floor price?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    <strong>Floor price</strong> is the lowest price for collection items, rather than the average item price, and is updated in real-time. Dutch auctions are not included in floor price calculations.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="true" aria-controls="collapseFour">
                                    What is minting?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    <strong>Minting</strong> an NFT is the process of writing a digital item to the blockchain. This establishes its immutable record of authenticity and ownership.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How do I delete an NFT?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Just click on the "Trash <i class="fa-solid fa-trash"></i>" button, you can delete your NFTs only.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How can I add an NFT?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    At the top of Collection page click "Add NFT" and fill the form, you must have a collection for it first.
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
    
    <script>

    </script>
</body>
</html>