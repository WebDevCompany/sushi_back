<div>

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

        <article class="main__box cursor">
            <div class="main__box-img"><img src=" {{asset('images/Vlad/С филадельфией.png')}} " alt=""></div>
            <p class="text">Пицца</p>
        </article>

        <article class="main__box section__two">
        <div class="main__box-img cursor"><img src=" {{asset('images/Vlad/Акции.png')}} " alt=""></div>
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
                <p class="product__titl-one">{{ $productsNew[0]->title }}</p>
                <p class="product__description">{{ $productsNew[0]->weight }} грамм, {{ $productsNew[0]->number_of_pieces }} кусочков</p>
                <div class="product__wrap">
                     <span class="product__price">{{ $productsNew[0]->prise }} СОМ</span>
                    <button class="product__btn">Хочу!</button>
                </div>
            </div>


            <div class="product__box">
                <div class="product__img"> <img src=" {{asset('images/Vlad/product2.png')}} " alt="">  </div>
                <p class="product__titl">{{ $productsNew[1]->title }}</p>
                <p class="product__description">{{ $productsNew[1]->weight }} грамм, {{ $productsNew[1]->number_of_pieces }} кусочков</p>
                <div class="product__wrap">
                <span class="product__price">{{ $productsNew[1]->prise }} СОМ</span>
                <button class="product__btn">Хочу!</button>
            </div>
            </div>

            <div class="product__box">
                <div class="product__img"> <img src=" {{asset('images/Vlad/Product3.png')}} " alt=""></div>
                <p class="product__titl">{{ $productsNew[2]->title }}</p>
                <p class="product__description">{{ $productsNew[2]->weight }} грамм, {{ $productsNew[2]->number_of_pieces }} кусочков</p>
                <div class="product__wrap">
                <span class="product__price">{{ $productsNew[2]->prise }} СОМ</span>
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
