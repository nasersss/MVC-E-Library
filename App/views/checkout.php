<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة الشراء</title>
     <!-- font-awesome -->
    <!-- offline font-awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

      <!-- online font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        

    <!-- style -->
    <link rel="stylesheet" href="css/costom.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    

</head>
<body dir="rtl"id="body" class="bodyAR">

    <!-- checkout  -->

    <div class="checkout-container">
                <div class="heaader-checkout">
                    <h3><i class="fas fa-shopping-cart"></i> السلة </h3>
                    <p>(<span> 3 </span> منتجات )</p>
                </div>

                <div class="book">
                    <div class="card-product">
                        <div class="header">
                            <div class="header-details">
                                <img src="images/mada.jpg" width="100px"alt="">
                                <div>
                                <h4> عنوان الكتاب المحدد<span>( كتاب إلكتروني )</span> </h4>
                                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
                            
                                </div>    
                            </div>
                            <div class="salary">
                                <p class="red">3.33 <small>رس</small></p>
                            </div>
                        </div>
                        <div class="note-cart">
                            <div class="note">
                                <p><b>ملاحظة </b> هذا المنتج رقمي وسيتم توصيته من خلال البريد الالكتروني</p>
                                <p><a href="#">كيفية الحصول على المنتج</a></p>
                            </div>
                            <div class="count">
                                <p id="count">1</p>
                               <div>
                                <button onclick="incrment()">+</button>
                                <button onclick="decrment()">-</button>
                              
                               </div>
                            </div>
                        </div>
                        <div class="footer">
                            <p><span>&times; </span>احذف</p>
                        </div>
                    </div> <div class="card-product">
                        <div class="header">
                            <div class="header-details">
                                <img src="images/mada.jpg" width="100px"alt="">
                                <div>
                                <h4> عنوان الكتاب المحدد<span>( كتاب إلكتروني )</span> </h4>
                                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
                            
                                </div>    
                            </div>
                            <div class="salary">
                                <p class="red">3.33<small>رس</small></p>
                            </div>
                        </div>
                        <div class="note-cart">
                            <div class="note">
                                <p><b>ملاحظة </b> هذا المنتج رقمي وسيتم توصيته من خلال البريد الالكتروني</p>
                                <p><a href="#">كيفية الحصول على المنتج</a></p>
                            </div>
                            <div class="count">
                                <p>1</p>
                               <div>
                                <button>+</button>
                                <button>-</button>
                               </div>
                            </div>
                        </div>
                        <div class="footer">
                            <p><span>&times; </span>احذف</p>
                        </div>
                    </div> <div class="card-product">
                        <div class="header">
                            <div class="header-details">
                                <img src="images/mada.jpg" width="100px"alt="">
                                <div>
                                <h4> عنوان الكتاب المحدد<span>( كتاب إلكتروني )</span> </h4>
                                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
                            
                                </div>    
                            </div>
                            <div class="salary">
                                <p class="red">3.33 <small>رس</small></p>
                            </div>
                        </div>
                        <div class="note-cart">
                            <div class="note">
                                <p><b>ملاحظة </b> هذا المنتج رقمي وسيتم توصيته من خلال البريد الالكتروني</p>
                                <p><a href="#">كيفية الحصول على المنتج</a></p>
                            </div>
                            <div class="count">
                                <p>1</p>
                               <div>
                                <button onclick="incrment()">+</button>
                                <button onclick="decrment()">-</button>
                               </div>
                            </div>
                        </div>
                        <div class="footer">
                            <p><span>&times; </span>احذف</p>
                        </div>
                    </div>
                </div>
           
            <div class="pyment">
                <div class="pyment-card">
                    <div class="header">
                        <div>
                            <p>المجموع</p>
                            <p>تكاليف الشحن</p>
                            <p><b>المجموع الكلي</b> <small style="color:#ccc;">شامل الضريبة</small> </p>
                        </div>
                        <div>
                            <p>68.96 <small>رس</small> </p>
                            <p class="green">مجاني</p>
                            <p class="red"><b>68.97</b> <small>رس</small></p>
                        </div>
                    </div>
                    <div class="body">
                       
                    </div>
                    <div class="footer">
                        <p>بالضغط على إنهاء التسوق أنت توافق على <a href="#">الشروط ولأحكام  </a> و <a href="#">سياية الخصوصية</a></p>
                        <button onclick="openModal() ">إنهاء التسجيل</button>
                    </div>
                </div>
            </div>
    </div>

  
  <!-- Modal for enter informaition of pyament  -->
    <!-- login and resisteration -->
    <div class="modal_container" id="modal">
        <div class="pymentStep">
            <span class="close" >&times;</span>

            <div class="header-pyment flex-center">
                <h2 class="border-b">بيانات الدفع</h2>
            </div>
            <!-- personal-Information -->

                <div class="body-pyment">
                    <div class="personalInfo step">
                        <div class="titelOperation flex-center">
                            <h3>المعلومات الشخصية</h3>
                        </div>
                        <div class="form">
                                    <form action="" dir="rtl">
                                    <div class="flex-between" >
                            
                                            <input id="phon" type="text" name="f-name" placeholder="التلفون" required="" >
                                            <select name="" id="">
                                                <option value="">رمز البلد</option>
                                                <option value="">+976</option>
                                                <option value="">+967</option>
                                                <option value="">+965</option>
                                            </select>  
                                </div>
                                <input  type="text" name="f-name" placeholder="الاسم الكامل" required="" >
                                <input   type="email" name="email" placeholder="الايميل" required="" >
                                <input   type="text" name="address" placeholder="العنوان" required="" >
                                <input type="text" name="city" placeholder="المدينة">
                                
                            </form>
                         </div>
                    </div>
    
                <!-- pyment step -->
    
                    <div class="pymentinfo step">
                        <div class="titelOperation flex-center">
                            <h3> بيانات بطاقة الدفع</h3>
                        </div>
                        <div class="form">
                                    <form action="" dir="rtl">
                                <input  type="text" name="name-card" placeholder="الاسم على البطاقة" required="" >
                                <input   type="email" name="card-number" placeholder="0000-0000-0000-0000" required="" >
                                <input   type="text" name="Ex-date" placeholder="الشهر" required="" >
                                <input type="text" name="year" placeholder="السنة">
                                <input type="text " name="cvv" placeholder="CVV">
                                
                            </form>
                            </div>
                    </div>
                <!-- confirm step -->
                    <div class="confirm step">
                        <div class="titelOperation flex-center">
                            <h3> تأكيد عملية الشراء</h3>
                        </div>
                        <p>هل أنت متأكد من بياناتك وتريد الدفع؟؟</p>
                    </div>
                <!-- don step -->
                    <div class="done step flex-center">
                        <div class="titelOperation flex-center">
                            <h3> تمت العملية بنجاح</h3>
                        </div>
                            <h4 class="success"><i class="far fa-check-circle"></i></h4>
                    </div>
                </div>
            <!-- details step -->
           
                

               <div class="pyment-footer">
                   <div class="flex-center">
                                    <button id="prve-btn" type="reset">السابق</button>
                                    <button type="submit" id="next-btn" >التالي</button>
                                </div>
                    <div class="operation flex-center">
                        <div class="numberOperation flex-center">
                            <p id ="operationNumber">0</p>/<p>4</p>
                        </div>
                    </div>
                    <div class="progressOperation">
                       

                            <div class="circl active ">
                                <p>1</p>
                            </div>
                            <span class="progress"></span>
                            <div class="circl">
                                <p>2</p>
                            </div>
                            <span class="progress"></span>
                            <div class="circl">
                                <p>3</p>
                            </div>
                            <span class="progress"></span>
                            <div class="circl end">
                                <p>4</p>
                            </div>
                      
                    </div>
               </div>
<!-- End modal -->
        </div>
    
</div>
    <!--  -->
    <script>
        const nextBTN = document.querySelector('#next-btn');
        const privBTN = document.querySelector('#prve-btn');
        const numberOperation=document.getElementById('operationNumber');
        const steps = document.querySelectorAll('.circl');
        const modalstep=document.getElementsByClassName('step');
        
        
        let index=0;
        for(let m=0;m<modalstep.length;m++){
        modalstep[m].style.display="none";
        }
        modalstep[index].style.display="block";

        nextBTN.addEventListener('click',()=>{  
            index++;
            if(index >steps.length){
                index = steps.length;
            }
            else{
                
                changesteps();
            }
        });

        privBTN.addEventListener('click',()=>{

            for(let m=0;m<index;m++){
                modalstep[m].style.display="none";
                }

            index--;
            if(index<0){
                index = 1;
                
            }
            else{
            
                changesteps();
            }
        });

function changesteps(){
    for(let m=0;m<index;m++){

                modalstep[m].style.display="none";
             }

        modalstep[index-1].style.display="block";

            steps.forEach((item,i)=>{

            if(i<index){
                numberOperation.innerHTML=i+1;
                item.classList.add('active');
            }
            else{
                item.classList.remove('active');  
            }

            })
}

    </script>
    <script src="js/main.js"></script>
</body>
</html>