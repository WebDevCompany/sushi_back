<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <title>Sushi</title>
    <link rel="stylesheet" href="{{ asset('css/Vlad/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"> 
   

</head>
<body>
   
    <div class="project">
    <!-- left-bar ------------------------------>
    <div class = 'left_sidebar'>
        <figure class = 'left_sidebar_logo'>
            <div class = 'left_sidebar_logo_image'>
                <img src=" {{asset('/img/left_sidebar/logo.png')}} ">  
                <figcaption><span>ROMSEM</span></figcaption>  
            </div> 
        </figure>
            <div class="logo__border"></div>
            <!-- <hr> -->

            <!-- nav --------------------------->
            <div class = 'left_sidebar_menu'>
                <ul class='left_sidebar_menu_list'>
                    <li>
                        <img src=" {{ asset('images/Vlad/Vlad/left_sidebar/pizza.png') }} ">
                        <span class = 'left_sidebar_menu_text'>Пицца</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/sets.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Сеты</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/wok.png')}} ">
                        <span class = 'left_sidebar_menu_text'>WOK</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/rolls.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Роллы</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/sushi.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Суши</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/salats.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Салаты</span>
                        <span class = 'left_sidebar_menu_soon'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/soup.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Супы</span>
                        <span class = 'left_sidebar_menu_soon '>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/corndogs.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Корн доги</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/drink.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Напитки</span>
                        <span class = 'left_sidebar_menu_soon hide'>СКОРО</span>
                    </li>
                </ul>
                    <li >
                        <img src=" {{asset('images/Vlad/Vlad/left_sidebar/actions.png')}} ">
                        <span class = 'left_sidebar_menu_text'>Акций</span>
                    </li>
                </ul>

            </div>

    </div>
    <!-- end-left-bar ------------------------------>

    <!-- main ----------------------------------->
    <div class="main">
    <!-- header ----------------------------->
        <header class="header">
            <div class="header__contact">
                <h4 class="contact-text">Наш телефон</h4>
                <p class="header__contact-telephone">+996 705 188 955</p>
                <p class="header__contact-telephone">+996 555 188 955</p>
                <p class="contact__time"> <img src=" {{asset('images/Vlad/Часы.jpg')}} " alt="">работаем с 10:00 до 00:00</p>
            </div>
                
            <div class="header__wrap">
                <div class="header__wrap-city">
                    <p>Город:</p>
                    <p class="city">Бишкек</p>
                </div>

                <div class="header__wrap-content">                   
                    <button class="header__comment">
                        <a href="/reviews">Отзывы</a></button>
                    <div class="dropdown">
                        
                        <button class="dropbtn">Доставка и оплата</button>

                        <div class="dropdown-content">

                          <a href="#" class="sorting">Сортировка</a>
                          <a href="#" class="dropdown-content_border">По умолчанию <img src=" {{asset('images/Vlad/Vector 4.png')}} " alt=""></a>
                          
                          <a href="#">По умолчанию</a>

                          <a href="#">Название</a>
                          <a href="#">Сначала дешевле</a>
                          <a href="#">Сначала дороже</a>
                          <a href="#">Количество кусочков</a>
                          <a href="#">Вес</a>
                        </div>                             
                                 
                     </div>  
                    <div class="fas fa-search fa-2x "></div>     
                 </div> 
            </div>
        </header>
        <!-- btn__slider ------------------------------------------->
        <div class="btn__slider">
            <button class="btn__slider-left"><img src=" {{asset('images/Vlad/Left.png')}} " alt=""></button>                
            <button class="btn__slider-right"><img src=" {{asset('images/Vlad/right.png')}} " alt=""> </button>
        </div>
    <!-- main-content ----------------------->
    <div class="main-content">
        <div class="main-banner">
            <img src=" {{asset('images/Vlad/banner.png')}} " alt=""> 
            
        </div>

        <div class="slider-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    <!-- section ---------------------------------->
     <section class="main__section" > <!--сделать класс -->
        
        <article class="cursor"> <!--переделать все в отдельные болки и сделать классы -->
            <img src=" {{asset('images/Vlad/С лососем.png')}} " alt="" left='0'> 
            <p class="text">Чикен</p>
        </article>

        <article class="section__two ">
            <div class="two__text cursor">
                <img src=" {{asset('images/Vlad/С угрем.png')}} " alt=""> 
                <p class="text">С угрем</p>
            </div> 

            <div class="two__text cursor" >
                <img src=" {{asset('images/Vlad/Без мяса.png')}} " alt="">
                <p class="text">Корн дог</p>   
            </div>
            
        </article>
      
         <article class="cursor">
            <img src=" {{asset('images/Vlad/С филадельфией.png')}} " alt="">
            <p class="text">Пицца</p> 
        </article> 

        <article class="cursor">
            <img src=" {{asset('images/Vlad/Акции.png')}} " alt="">
            <p class="text">Акции</p> 
        </article> 

    </section>

        <div class="offer">
            <span >Новинки </span> <span class="pop">Популярное</span>
        </div>
        
        <!-- content__product ------------------------------->
        <div class="content__product">
            <div class="product__box">
                <div class="product__img"> <img src=" {{asset('images/Vlad/Rectangle 3.png')}} " alt="">  </div>
                <p class="product__titl-one">Саломон сет</p>
                <p class="product__description">1050 грамм, 30 кусочков</p>
                <div class="product__wrap">                
                     <span class="product__price">1500 СОМ</span>
                    <button class="product__btn">Хочу!</button>
                </div>
            </div>          
       
        
            <div class="product__box">
                <div class="product__img"> <img src=" {{asset('images/Vlad/product2.png')}} " alt="">  </div>
                <p class="product__titl">Филадельфия и <br> лосось сет</p>
                <p class="product__description">1260 грамм, 36 кусочков</p>
                <div class="product__wrap">                
                <span class="product__price">1150 СОМ</span>
                <button class="product__btn">Хочу!</button>
            </div>
            </div>          
       
            <div class="product__box">
                <div class="product__img"> <img src=" {{asset('images/Vlad/Product3.png')}} " alt=""></div>
                <p class="product__titl">Самая большая Филадельфия</p>
                <p class="product__description">2050 грамм, 45 кусочков</p>
                <div class="product__wrap">                
                <span class="product__price">2100 СОМ</span>
                <button class="product__btn">Хочу!</button>
            </div>
            </div>          
         </div>

         <!-- content__presentation ------------------------------------------>
         <div class="content__presentation">

            <h2 class="presentation__titl">Заказать суши в Бишкеке</h2>
            <p class="presentation__text">Ресторан “Суши и Лапша” предлагаем своим клиентам самые вкусные суши с доставкой на дом, приготовленные по классическим и адаптированным к европейской аудитории рецептам, а также собственным наработкам наших поваров. Мы ценим время наших клиентов, поэтому вы можете заказать суши в Харькове с доставкой на дом или в офис. </p>
                <br> В нашем меню более 20 видов суши:
                <br>
                 <ul class="presentation__text-indent">
                    <li >Классические с сырым лососем, тунцом, окунем.</li>
                    <li >Экзотические с тигровой креветкой, морским гребешком.</li>
                    <li >Пикантные с копченым лососем, угрем.</li>
                </ul>
                <br>   
            <div class="presentation__text-bac">   
                          
                <p>В меню также представлены гунканы: с начинкой из красной икры и тобико, а также феликсы, где японский </p>
                <p>майонез сочетается с рыбой, морепродуктами, угрем. Любители острых блюд могут купить суши с соусом спайси.</p>
                <p>Популярные начинки — копченая курица, снежный краб, креветки, гребешки, тунец, лосось и окунь.</p>
            </div> 
         </div>

         <div class="presentation__info">
            <button class="presentation__btn">Подробнее</button>
            <button class="presentation__btn-vector"><img src=" {{asset('images/Vlad/Vector 4.png')}} " alt=""></button>

         </div>
    </div>
    </div>
    <!--end-main ----------------------------------->

    <!-- right-bar ------------------------------------>
    <div class="right-bar">            
        <div class="right-bar__basket"> 
            <h2>Ваша корзина пуста</h2>
            <p> Добавьте же скорее что-нибудь!</p>
            <button class="right-bar__btn">Бесплатная доставка от 800 СОМ</button>
        </div>
        <div class="right-bar__map">
            <img src=" {{asset('images/Vlad/Rectangle 9.png')}} " class="img-map" alt="">
            <img src=" {{asset('images/Vlad/Ellipse 1.png')}} " class="map-ellipse" alt="">
            <img src=" {{asset('images/Vlad/Vector (1).png')}} " class="map-ellipse-vector alt="">
            <img src=" {{asset('images/Vlad/Vector (2).png')}} " class="map-ellipse-one alt="">
            <h3 class="map-subtext">Укажите адрес</h3>
            <p class="map-text">И узнайте время доставки</p>
        </div>    
    </div> 
    <!--end-right-bar ------------------------------------>

    </div>

    



    <script src="main.js"></script>
</body>
</html>