 
 <?php include_once "../partion/header.php"  ?>

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
</header>
    <!-- Header !!!-->

    <!-- Category -->
    <div>
      
        <div class="cate-contianer container">
            <div class="cate-header">
                <ul>
                    <li><a href="">الرئيسية</a></li>
                    <li><a href="">الكتب العربية</a></li>
                    <li><a href="">كتب إلكترونية</a></li>
                </ul>
            </div>
            <div class="filter-container" >

                <div class="box-filter">
                   <span><i class="fas fa-book-open"></i></span> <input type="text"placeholder="ابحث بالاسم او بالصنف" id="Myinput"  onkeyup="searchFunc()">
                        <div class="slelt-filter">
                            <div class="header">
                                <button>تصفح النتائج</button>
                            </div>
                            <div class="chckbox">
                                <p>علامة تجارية</p>
                                <input class="chk" type="checkbox">
                            </div>
                            <div class="chckbox">
                                <p>السعر </p>
                                <input  class="chk" type="checkbox">
                            </div>
                            <div class="progress">
                                <p></p>
                                <span></span>
                                <p></p>
                            </div>
                                <div class="salary">
                                    <p>ر س 5</p>
                                    <p>ر س 150</p>
                                </div>
                            <div class="chckbox">
                                <p>صيغة الكتاب </p>
                                <input  class="chk" type="checkbox">
                            </div>
                        </div>
                </div>

                <div class="result">

                    <div class="select-order">
                        <label for="">الترتيب بحسب</label>
                        <select name="oreder" id="">
                            <option value="">الرجاء الاختيار</option>
                            <option value="">السعر </option>
                            <option value=""> الفئة</option>
                            <option value=""> النوع</option>
                            
                        </select>
                    </div>

                    <!-- All books  container-->
                    <div class="container-book" id="container-book">
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
                            <!-- item1 -->

                            <div class="items">
                                <div class="img">
                                        <img src="images/book/book5.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"><span><i class="fas fa-book-open"></i></span> كتاب ورقي </h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" > Modern Manger Fundemental<span>(كتاب ورقي)</span></p>
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
                                        <img src="images/book/book6.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"> <span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" >تعلم معنا<span>(كتاب الكتروني)</span></p>
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
                                        <img src="images/book/book7.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"><span><i class="fas fa-book-open"></i></span> كتاب إلكتروني </h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" >gravity of us<span>(كتاب الكتروني)</span></p>
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
                                        <img src="images/book/book8.png" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"><span><i class="fas fa-book-open"></i></span> كتاب إلكتروني </h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" > كتالوج الحب <span>(كتاب الكتروني)</span></p>
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
                                        <img src="images/book/book9.png" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"><span><i class="fas fa-book-open"></i></span> كتاب إلكتروني</h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" > Angular 2+ <span>(كتاب الكتروني)</span></p>
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
                                        <img src="images/book/book10.png" alt="">
                                </div>
                                <div class="text">
                                    <h6 class="title"><span><i class="fas fa-book-open"></i></span> كتاب إلكتروني </h6>
                                    <p class="star">
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star best"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <p class="name-book" >Android<span>(كتاب الكتروني)</span></p>
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
                    </div>
  <!-- All books  container-->
                </div>
            </div>

        </div>

    </div>
     <!-- Category!!!! -->
     
    <?php include_once "../partion/footer.php" ?>