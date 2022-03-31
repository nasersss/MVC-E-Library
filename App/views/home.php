 
 <?php include_once "../partion/header.php"  ?>
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
    <!-- Header !!-->
    <div class="box-search container">

        <div class="logo">
            <img src="images/logo.svg" alt="">
        </div>

        <div class="search">
            <input type="text" placeholder="البحث">
            <i class="fas fa-search search-icon"></i>
        </div>

        <div class="crad">
            <a href="checkout.html" target="_blank"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
   
 
    <!-- slider -->

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
</header>
    <!-- Header !!!-->

    <main class="container">
        <div class="main-container container" >
            <!--  header of main section -->
            <div class="main-header">
                <div class="main-title">
                    <h3>تصفح حسب القسم</h3>
                </div>
                <div class="slid-section" id="slider1">
                              <!-- arrow -->
                    <a class="prev" id="slide-left" onclick="leftScrol(0)">&#10094;</a>
                    <a class="next"id="slide-right" onclick="rightScrol(0)">&#10095;</a>
                <!-- arrow -->
                     <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo1"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo1">
                                    دين
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! -->
                    <!-- items -->
                    <div class="item">
                        <div class="icon">
                            <span class="costo2"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo2">
                                    تاريخ
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! --> <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo3"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo3">
                                    روايات
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! --> <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo4"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo4">
                                   سياسة
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! --> <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo5"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo5">
                                    اقتصاد
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! --> <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo6"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo6">
                                  طبخ
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! -->
                     <!-- items -->
                     <div class="item">
                        <div class="icon">
                            <span class="costo7"><i class="fas fa-star "></i>
                               
                            </span>
                            <div class="name">
                                <h4 class="costo7">
                                    تربية
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- items!!! -->
                   
                    
                </div>
            </div>
        </div>
        <!--  header of main section !!!!--> 

        <!--    advert-img section -->
        <section>
            <div class="img">
                <div class="some-img">
                    <img src="slider/1.png" alt="">
                    <img src="slider/2.jpg" alt="">
                    <img src="slider/3.jpg" alt="">
                    <img src="slider/4.jpg" alt="">
                </div>
                <div class="advert-img">
                    <img src="slider/4.jpg" alt="">
                </div>
            </div>
        </section>
        <!--    advert-img section !!!!-->
       
        <!-- All books  container-->
                <!-- section 1 -->
        <section class="section">
            <div class="main-title flex-between">
                <h3> العروض الحالية</h3>
                <p onclick="viewAll(1)">عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container">
                <!-- arrow -->
                    <a class="prev" id="slide-left" onclick="leftScrol(1)">&#10094;</a>
                    <a class="next"id="slide-right" onclick="rightScrol(1)">&#10095;</a>
                <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  

<!-- section 1 -->
        </section>
        <!-- section 2 -->
        <section class="section">
            <div class="main-title flex-between">
                <h3>الكتب الدينية</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container">
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(2)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(2)">&#10095;</a>
                 <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
        <!-- section 3 -->
        <section class="section">
            <div class="main-title flex-between">
                <h3>الكتب التاريخية</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container">
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(3)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(3)">&#10095;</a> <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
        <!-- section 4 -->
        <section class="section">
            <div class="main-title flex-between">
                <h3>السياسية</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container" >
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(3)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(3)">&#10095;</a> <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
          <!-- section 5 -->
          <section class="section">
            <div class="main-title flex-between">
                <h3>الاقتصاد</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container" >
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(3)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(3)">&#10095;</a> <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
          <!-- section 6 -->
          <section class="section">
            <div class="main-title flex-between">
                <h3>الطبخ</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container">
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(3)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(3)">&#10095;</a> <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
         <!-- section 6 -->
         <section class="section">
            <div class="main-title flex-between">
                <h3>افضل الروايات الرومنسية</h3>
                <p>عرض الكل</p>
            </div>
            <div class="slid-section container-book section-container">
                <!-- arrow -->
                <a class="prev" id="slide-left" onclick="leftScrol(3)">&#10094;</a>
                <a class="next"id="slide-right" onclick="rightScrol(3)">&#10095;</a> <!-- arrow -->

                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book10.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book4.png" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                                
                    <!-- item1 -->
                    <div class="items">
                    <div class="img">
                            <img src="images/book/book1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                        <p class="star">
                            <i class="fas fa-star best"></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star best "></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="name-book">لأنك الله  <span>(كتاب الكتروني)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                    <div class="img">
                            <img src="images/book/book2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><span ><i class="fas fa-book-open"></i></span>  كتاب ورقي </h6>
                        <!-- star -->
                        <p class="star">

                        </p>
                        <p class="name-book"> إحياء علوم الدين <span>(كتاب ورقي)</span></p>
                    </div>
                    <div class="footer-item">
                        <h6>99.99 <small>رس</small></h6>
                        <p><small>شامل الضريبة</small></p>
                        <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                        <div class="icon">
                            <p><i class="fas fa-star"></i></p>
                            <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                            <p><i class="fas fa-exchange-alt"></i></p>
                        </div>
                    </div>
                    </div>
                    <!-- item1 -->
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"><span><i class="fas fa-book-open"></i></span>  كتاب إلكتروني</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >Smart Reading<span>(كتاب الكتروني)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->   
                    <!-- item1 -->

                    <div class="items">
                        <div class="img">
                                <img src="images/book/book4.png" alt="">
                        </div>
                        <div class="text">
                            <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب ورقي</h6>
                            <p class="star">
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star best"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="name-book" >التفكير السليم<span>(كتاب ورقي)</span></p>
                        </div>
                        <div class="footer-item">
                            <h6>99.99 <small>رس</small></h6>
                            <p><small>شامل الضريبة</small></p>
                            <p>صيغ أخري : <b>كتاب مطبوع</b></p>
                            <div class="icon">
                                <p><i class="fas fa-star"></i></p>
                                <p class="shopping"><i class="fas fa-cart-plus"></i></p>
                                <p><i class="fas fa-exchange-alt"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- item1 -->  
        </section>
        <!-- product section -->

    </main>


    <?php include_once "../partion/footer.php" ?>