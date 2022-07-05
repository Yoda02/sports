<!-- <div class="container">
    <div class="content row">
      
        <div class="main-content col-md-9 col-12">
            <h2>Последние новости</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="/images/1.jpg"  alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
               
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="/images/2.png"  alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Статья 2</a>
                    </h3>
                    <i> <a href="#">Велоспорт</a></i>
                    <i class="far fa-calendar"> Mart 11, 2022</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="/images/3.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 3</a>
                    </h3>
                    <i> <a href="#">Волейбол</a></i>
                    <i class="far fa-calendar"> Mart 11, 2022</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
          
        </div>
       


        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>


            <div class="section topics">
                <h3>Трансляции</h3>
                <ul>
                <li><a href="https://football24.ru/index.php?do=go&url=aHR0cHM6Ly90Lm1lL2pvaW5jaGF0L0FBQUFBRDZzeGpTa0pJRkJacWZYX1E%3D">Футбол</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

        </div>
        <table>
	

</table>
    </div>
</div> -->

<?php

$db=new Db();
$data=$db->query('SELECT * FROM news');
var_dump(($data));