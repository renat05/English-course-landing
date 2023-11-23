
<?php
include 'send.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="main.css">
      <link rel="stylesheet" type="text/css" href="response.css">
      <link rel="icon" type="image/x-icon" href="img/logo.png">
      <title>English course</title>
   </head>
   <body> 
      <div class="container">
         <header>
            <div class="header-info">
               <img class="header-logo" src="img/logo.png">
               <h2 class="logo-text">English</h2>
            </div>
         </header>
         <main>
            <div class="bg">
               <img class="img-rec" src="img/rec.png">
               <img class="img-coffee-1" src="img/coffe-1.png">
               <img class="img-coffee-2" src="img/coffe.png">
               <div>
               </div>
            </div>
            <div class="main-bg">
               <div>
                  <h2 class="text-1">Вкладывайте незначительные деньги каждый день в копилку своих знаний.</h2>
                  <h3 class="text-2">Следующий курс для вас будет стоить всего <strong>178 рублей в день</strong> </h3>
                  <div class="info-btn">
                     <div class="info-btn-1">
                        <h3 class="btn-number">01</h3>
                        <div class="btn-block">
                           <h4 class="btn-info-text">Ноября</h4>
                           <p class="second-text">Ближайший старт</p>
                        </div>
                     </div>
                     <div  class="info-btn-2">
                        <h3 class="btn-number">21</h3>
                        <div class="btn-block">
                           <h4 class="btn-info-text">Октября</h4>
                           <p class="second-text">Конец акции</p>
                        </div>
                     </div>
                  </div>
                  <div class="btn-2">
                     <a href="#read" class="button-1">Узнать подробнее</a>
                     <a href="#free" class="button-2">Бесплатная консультация</a>
                  </div>
               </div>
               <div>
                  <img class="img-man" src="img/man.png">
               </div>
            </div>

            <section id="read" class="prices">
               <h1 class="header-price">Выберите свой вариант обучения </h1>
               <div class="main-price-lists">
             <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "english";
$conn = new mysqli($host, $username, $password, $database);
$query = "SELECT * FROM promo_prices";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    foreach ($result as $row) {
?>
        <div class="price">
            <div class="pr-main">
                <div class="price-head-text">
                    <h2 class="course-text"><?= $row['title'] ?></h2>
                    <h2 class="course-price"><?= $row['price'] ?></h2>
                    <p class="course-sale"><?= $row['oldprice'] ?></p>
                    <div class="course-discount">
                        <p class="dis">-56%</p>
                    </div>
                </div>
                <ul class="lists">
                    <li class="list-item"> <img src="img/check.svg"> <strong><?= $row['months'] ?> месяца обучения</strong></li>
                     <li class="list-item"> <img src="img/check.svg"> Грамматическая выжимка</li>
                           <li class="list-item"> <img src="img/check.svg"> Разговорный тренажёр</li>
                           <li class="list-item"> <img src="img/check.svg">  Слова с ассоциациями</li>
                           <li class="list-item"> <img src="img/check.svg"> Регулярные мини-задания</li>
                           <li class="list-item"> <img src="img/check.svg"> Персональный куратор</li>
                           <li class="list-item"> <img src="img/check.svg"> Сертификат об обучении</li>
                           <li class="list-item"> <img src="img/check.svg"> Best Teachers</li>
                           <li class="list-item"> <img src="img/check.svg"><strong> Звонки от Second Teacher</strong></li>
                </ul>
                <p class="predoplata">предоплата</p>
                <p class="price-predoplata"><?= $row['prepay'] ?></p>
                <button class="pred-button">внести предоплату из рф</button>
                <button class="pred-button-2">внести предоплату из-за границы</button>
            </div>
        </div>
<?php
    }
}
$conn->close();
?>

               </div>
            </section>

            <section class="banner-section">
               <div class="banner">
               </div>
            </section>
      </div>
        
      			<section id="free">
                  <div class="form">
                 
      <form id="applicationForm" action="" method="POST">
        <div class="">
            <div class="items">
                <h2 class="form-text">Еще думаете?</h2>
                <p class="form-p">Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение</p>
                <input class="form-input" type="text" name="name" placeholder="Введите ваше имя" required>
                <input class="form-input" type="text" name="phone" placeholder="Введите ваш телефон" required>
                <input class="form-input" type="email" name="email" placeholder="Введите ваш email" required>
                <button class="form-btn" type="submit">записаться</button>
                <p class="form-end-text">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой конфиденциальности</p>
            </div>
        </div>
    </form>

    <div id="successMessage" style="display: none;">
     <p> <img class="result" src="img/check-2.svg"></p>
        <p class="message">Спасибо за вашу заявку! Мы свяжемся с вами в ближайшее время.</p>
    </div>
    <div id="errorMessage" style="display: none;">
       <p><img class="result" src="img/error.svg"></p>
        <p class="message">Что-то пошло не так, повторите попытку позже.</p>
    </div>


               

                  <div class="footer">
               
               <div class="footer-logo">
               <img src="img/footer-logo.png">
               <p class="footer-logo-text">English</p>
               </div>
               <p class="footer-text-1">2015 - 2021 © English. Все права защищены. <br>
               Политика конфиденциальности <br>
               Соглашение об обработке персональных данных
               </p>
            <p class="footer-text-2">ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0
         ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000</p>
            <div class="icons">
               <img src="img/vk.svg">
               <img src="img/tg.svg">
               </div>
                  </div>
         </div>
      		
      </section>
      		<footer>
      		
      </footer>
      </main>
      <script src="main.js"></script>
   </body>
</html>
