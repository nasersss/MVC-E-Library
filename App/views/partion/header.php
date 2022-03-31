<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الكتاب </title>
     <!-- font-awesome -->
    <!-- offline font-awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

      <!-- online font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        

    <!-- style -->
    <link rel="stylesheet" href="css/costom.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/media.css">

</head>
<body dir="rtl"id="body" class="bodyAR" >

    <!-- Header -->
    <header>
        <nav class="container">
            <div class="togle-bar" >
                <div class="icon" onclick="myFunction()">
                   <span></span>
                   <span></span>
                    <span></span>
                </div>
                <div class="brand">
                    <h3>القائمة</h3>
                </div>
            </div>
            <ul id="nav-bar-list">
                <li style="border-right: none;" onclick="openModal()"> <a href="#" > <span><i class="fas fa-user"></i></span> ادخل لحسابك أو سجل الآن</a></li>
                <li><a href="#"><span><i class="fas fa-star"></i></span> المفضلة</a></li>
                <li><a href="#"><span><i class="fas fa-truck-moving"></i></span> تتبع الشحنة</a></li>
                <li><a href="#"><span><i class="fas fa-cogs"></i></span> طلبات الصيانة</a></li>
                <li><a href="#"><span><i class="fas fa-info-circle"></i></span> المساعدة</a></li>
                <li><a href="#"> <span><i class="fas fa-map-marker-alt"></i></span> فروعنا</a></li>
                <li><a href="#"><span></span> اليمن</a></li>
                <li><a href="#" id="lang"><span><i class="fas fa-language"></i> </span>English</a></li>
            </ul>
        </nav>
   <!-- Navbar!!! -->

    <div class="box-search container">

        <div class="logo">
            <img src="images/logo.svg" alt="">
        </div>

        <div class="search">
            <input type="text" placeholder="البحث">
            <i class="fas fa-search search-icon"></i>
        </div>

        <div class="crad">
            <p><i class="fas fa-shopping-cart"></i></p>
        </div>
    </div>
   
    <!-- slider -->
    <div class="timer">
        <h3>اغتنم عروض بداية العام الوقت المتبقي </h3>
       <div>
        <p id="days" class="number"></p>
        <p class="text-timer">يوم</p>
       </div>
       <p>:</p>
        <div>
            <p id="hours" class="number"></p>
            <p class="text-timer">ساعة</p>
        </div>
        <p>:</p>
        <div>
            <p id="minut" class="number"></p>
            <p class="text-timer">دقيقة </p> 
        </div>
        <p>:</p>
        <div>
            <p id="second" class="number"></p> 
            <p class="text-timer">ثانية </p>
        </div>
    </div>
    <div class="slider-container">

        <img class="mySlides" src="slider/1.png" style="width:100%">
        <img class="mySlides"  src="slider/2.jpg" style="width:100%">
        <img class="mySlides"  src="slider/3.jpg" style="width:100%">
        
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>    
</div>
    
    <div class="flex-center p-10">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <!-- slider -->
</div>
</header>
 <!-- Header !!-->
