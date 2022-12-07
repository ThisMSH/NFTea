<?php
include "connectData/connect.php";
session_start();
?>
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
                                <a href="index-log.php" class="nav-link nav-link-mod">
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
    <main>
        <!-- Scroll to Top button -->
        <button onclick="topFunction()" id="ScrollTop">
            <img src="img/scroll-top-studioz.png" alt="">
        </button>
        <!-- Top page -->
        <?php 
        $idColl = $_GET['ID'];
        $collTable = mysqli_query($conn,"select * from collection where Cid = $idColl");
        $coll = mysqli_fetch_assoc($collTable);
        $p =$coll['Pid'];
        $name = mysqli_query($conn,"select * from users where Pid = $p");
        $user = mysqli_fetch_assoc($name);
        $nftTable = mysqli_query($conn,"select * from nft where Cid = $idColl");
        
        ?>
        <div class="container top-collection">
            <div class="row top-collection-row">
                <div class="col collX">
                    <h1 class="card-title top-collection-welcome d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-signature"></i><p><?php echo $coll['name'] ?></p><i class="fa-solid fa-paintbrush"></i>
                    </h1>
                </div>
            </div>
            <div class="row collY">
                <div class="col-12">
                    <p class="card-text"><i class="fa-solid fa-palette"></i> This collection is made by: <span><?php echo $user['username']?></span></p>
                </div>
                <div class="col-12">
                    <p class="card-ID"><i class="fa-solid fa-hashtag"></i> ID: <span>#<?php echo $coll['Cid'] ?></span></p>
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
                <?php while($row2 = mysqli_fetch_assoc($nftTable)){
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
                                            <p class="card-collection"><i class="fa-solid fa-folder"></i> Collection: <span>#<?php echo $row2['Cid']?></span></p>
                                            <p class="card-ID"><i class="fa-solid fa-hashtag"></i> ID: <span>#<?php echo $row2['Nid']?></span></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-price"><i class="fa-solid fa-coins"></i> Price:<br><br> <span><?php echo $row2['prix']?></span> ETH</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-description">Description:</p>
                                            <p class="card-description-details"><?php echo $row2['description']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
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