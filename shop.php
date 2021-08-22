<?php

include 'header.php';

?>

<html>
<head>
<link rel="stylesheet" href="styles/shopStyles.css">
<script src="scripts/shopfilter.js"></script>
</head>

<body>
<div class = "button-container">

    <button class="btn btn-outline-primary" onclick="shopFilter('all')">All Products</button>
    <button class="btn btn-outline-primary" onclick="shopFilter('amd')">AMD</button>
    <button class="btn btn-outline-primary" onclick="shopFilter('nvidia')">NVIDIA</button>

</div>



<div class="shop-container">

    <div class="filter card text-center amd">
        <img class="card-img-top" src="https://www.extremetech.com/wp-content/uploads/2020/09/Radeon-6000-Feature-640x353.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">Radeon 6900 XT</h5>
        <p class="card-text">Powered by RDNA 2</p>
        <p class="card-text price">$999</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>

    
    
    <div class="filter card text-center amd">
    <img class="card-img-top" src="https://www.amd.com/system/files/108116-radeon-rx-vega-56-1260x709.png" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">Radeon RX Vega 56</h5>
        <p class="card-text">For extreme gaming</p>
        <p class="card-text price">$1499</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

    </div>

    <div class="filter card text-center amd">
    <img class="card-img-top" src="https://cdn.thefpsreview.com/wp-content/uploads/2021/04/amd-radeon-rx-580-graphics-card-gray-background.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RX 580</h5>
        <p class="card-text">Great performance for a lower price</p>
        <p class="card-text price">$599</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>

    <div class="filter card text-center nvidia">
    <img class="card-img-top" src="https://assets1.ignimgs.com/2020/09/24/rtx-3090-blogroll-1600909176729.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RTX 3090</h5>
        <p class="card-text">NVIDIA's top of the line card</p>
        <p class="card-text price">$1999</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

    </div>

    <div class="filter card text-center nvidia">
    <img class="card-img-top" src="https://images.anandtech.com/doci/13796/RTX2060_Car_678x452.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RTX 2060</h5>
        <p class="card-text">Enter the world of RTX</p>
        <p class="card-text price">$999</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

    </div>

    <div class="filter card text-center nvidia">
    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/nDzrxYQQYkhd5jFW33nuY6.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">GTX 1660 Ti</h5>
        <p class="card-text">Rule the game</p>
        <p class="card-text price">$899</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>


    </div>

    <div class="filter card text-center nvidia">
    <img class="card-img-top" src="https://www.cnet.com/a/img/gnS5xTEH2ycQSGboH4laXdZ0S2s=/940x0/2020/10/26/54b9e816-4679-480c-b8dc-11373e969347/rtx-3070-dsc09367.jpg" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RTX 3070</h5>
        <p class="card-text">The ultimate play</p>
        <p class="card-text price">$1299</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

    </div>

    <div class="filter card text-center nvidia">
    <img class="card-img-top" src="https://overclock3d.net/gfx/articles/2021/02/17095050473l.JPG" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RTX 3080 OC White Edition</h5>
        <p class="card-text">Winter is coming</p>
        <p class="card-text price">$4999</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

    </div>

    <div class="filter card text-center amd">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiyjLIcm1RWf3BJEwddjRrWoqX1ER-xC5wiA&usqp=CAU" style="width:18rem;">
        <div class="card-body">
        <h5 class="card-title">RX 5600 XT</h5>
        <p class="card-text">Built for 1080p gaming</p>
        <p class="card-text price">$999</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
        </div>


    </div>
    
</div>




</body>


</html>


