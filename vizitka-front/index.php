<!DOCTYPE HTML>

<html>

<head>
    <title>Vizitka</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="vizitka-front/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="loading">

    <div class="menu" style="width: 100%;">
        <nav class="navbar navbar-expand-lg navbar-light bg-grey">
            <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#header" style="color: white;">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects" style="color: white;">Мои проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#learning" style="color: white;">Образование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#technology-stack" style="color: white;">Стек</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <div id="bg"></div>
    <div id="main" class="container">

        <!-- Header -->
        <header id="header" class="text-center">
            <div id="carouselExampleIndicators" class="carousel slide"
                style="width: 300px; height: 400px; margin: 0 auto;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="vizitka-front/img/slider-1.jpg" alt="slider-photo" width="300px" , height="400px">
                    </div>
                    <div class="carousel-item">
                        <img src="vizitka-front/img/slider-2.jpg" alt="slider-photo" width="300px" , height="400px">
                    </div>
                    <div class="carousel-item">
                        <img src="vizitka-front/img/slider-3.jpg" alt="slider-photo" width="300px" , height="400px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
            <h1>Фомин Тимофей</h1>
            <p>Junior разработчик (в недалеком будущем junior+)</p>
            <nav>
                <ul class="sotial-site-list list-inline">
                    <li class="list-inline-item"><a class="link-item" href="https://www.instagram.com"
                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="link-item" href="https://www.telegram.org" target="_blank"><i
                                class="fab fa-telegram"></i></a></li>
                    <li class="list-inline-item"><a class="link-item" href="https://www.github.com" target="_blank"><i
                                class="fab fa-github"></i></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="content-container">
                <section id="projects">
                    <div class="text-center">
                        <span class="project-label">Мои проекты</span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card"
                                    style="max-width: 300px; min-width: 300px; max-heigt: 300px; min-height: 300px; margin-top: 10px;">
                                    <img src="vizitka-front/img/photo_2024-07-27_12-09-14.jpg" class="card-img-top"
                                        alt="Карточка проекта">
                                    <div class="card-body">
                                        <h5 class="card-title">Сайт для тренажерного зала "Олимпия"</h5>
                                        <a href="https://github.com/Sorn221/olimpia_website"
                                            class="btn btn-primary">Репозиторий</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card"
                                    style="max-width: 300px; min-width: 300px; max-heigt: 300px; min-height: 300px; margin-top: 10px;">
                                    <img src="vizitka-front/img/photo_2024-07-27_12-09-31.jpg" class="card-img-top"
                                        alt="Карточка проекта">
                                    <div class="card-body">
                                        <h5 class="card-title">Магазин спорт товаров "Yeti Cave"</h5>
                                        <a href="https://github.com/Sorn221/php_web_project"
                                            class="btn btn-primary">Репозиторий</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card"
                                    style="max-width: 300px; min-width: 300px; max-heigt: 300px; min-height: 300px; margin-top: 10px;">
                                    <img src="vizitka-front/img/3.png" class="card-img-top" alt="Карточка проекта">
                                    <div class="card-body">
                                        <h5 class="card-title">Desktop магазин по продаже телефонов</h5>
                                        <a href="https://github.com/Sorn221/wpf_phone"
                                            class="btn btn-primary">Репозиторий</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="learning">
                    <div class="content-box">
                        <h3>Образование</h3>
                        <p>
                        <ul>
                            <li>
                                Закончил 9 классов в школе №167
                            </li>
                            <li>
                                4 курса Уральского радио технического колледжа по
                                специальности
                                "Программирование в компьютерных системах"
                            </li>
                            <li>
                                Бесплатные курсы по алгоритмам от
                                ВШЭ
                            </li>
                            <li>
                                На данный момент зачислен на 1 курс УРГЭУ СИНХ на специальность "Информатика и
                                вычислительная техника"
                            </li>
                        </ul>
                        </p>
                    </div>
                </section>
                <section id="contact">
                    <div class="content-box">
                        <h3>Контакты</h3>
                        <p>
                        <ul>
                            <li>
                                Email: tf.dotblades@mail.ru
                            </li>
                            <li>
                                Телефон: +7(922) 188 90-24
                            </li>
                            <li>
                                tg: <a href="https://t.me/codeGodddd">https://t.me/codeGodddd</a>
                            </li>
                        </ul>
                        </p>
                    </div>
                </section>
                <section id="biography">
                    <div class="content-box">
                        <h3>Краткая биография</h3>
                        <p>
                            На данный момент являюсь сотрудником компании "LuckRu", занимаю позицию junior разработчика.
                            <br>
                            Выполняю разные интересные задачи в основном завязанные на сборе и выводе данных в коректном
                            виде. <br>
                            В свободное время посещаю секцию бокса. Люблю смотреть фильмы/аниме и играть в игры.
                            <br>
                            Очень хочу стать классным и уникальным специалистом, стараюсь каждый день изучать что то
                            новое и повышать свою квалификацию.
                            <br>
                            Из последнего:
                        <ul>
                            <li>
                                Научился анимировать изображения с помощью css
                            </li>
                            <li>
                                Научился писать Api, пользоваться Postman
                            </li>
                            <li>
                                Активно изучаю docker
                            </li>
                            <li>
                                Подтянул знания по js
                            </li>
                        </ul>
                        </p>
                    </div>
                </section>
                <section id="technology-stack">
                    <div class="content-box">
                        <h3>Мой стэк технологий</h3>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        PHP
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionPhp">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOnePhpOffice"
                                                        aria-expanded="true" aria-controls="collapseOnePhpOffice">
                                                        PHPOffice/phpspreadsheet
                                                    </button>
                                                </h2>
                                                <div id="collapseOnePhpOffice" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionPhp">
                                                    <div class="accordion-body" style="display: flex;">
                                                        <div class="text-content-accordion">
                                                            Пример результата использования знаний, умений, навыков
                                                            PHPOffice из реальной рабочей задачи.
                                                            При нажатии на кнопку экспорта на сервере формируется excel
                                                            документ по шаблону.
                                                        </div>
                                                        <div class="gif-content-accordion">
                                                            <img class="gif" src="vizitka-front/img/gif/PHPOficeSkills.gif" alt="gif">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOnePhpLaravel" aria-expanded="true"
                                                        aria-controls="collapseOnePhpLaravel">
                                                        Laravel
                                                    </button>
                                                </h2>
                                                <div id="collapseOnePhpLaravel" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionPhp">
                                                    <div class="accordion-body" style="display: flex;">
                                                        <div class="text-content-accordion">
                                                            К сожелению у меня не оказалось под рукой готового проекта,
                                                            поэтому в примере я показываю как c помощью консоли
                                                            запустить встроенный локальный сервер на laravel.
                                                            Вводим в консоль команду 'php artisan serve' и нам
                                                            становится доступен докальный сервер с портом 8000, где нас
                                                            встречает приветственная страница Laravel.
                                                        </div>
                                                        <div class="gif-content-accordion">
                                                            <img class="gif" src="vizitka-front/img/gif/laravelSkills.gif" alt="gif">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        JS
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionJs">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseVue"
                                                        aria-expanded="true" aria-controls="collapseVue">
                                                        VUE
                                                    </button>
                                                </h2>
                                                <div id="collapseVue" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionJs">
                                                    <div class="accordion-body" style="display: flex;">
                                                        <div class="text-content-accordion">
                                                            Vue - очень классный и необходимый инструмент. С его помощью
                                                            можно показывать измененные данные без обновления страницы
                                                            (реактивность). В примере показано как данные меняются сразу
                                                            после клика на кнопку.
                                                        </div>
                                                        <div class="gif-content-accordion">
                                                            <img class="gif" src="vizitka-front/img/gif/vueSkills.gif" alt="gif">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseQuasar"
                                                        aria-expanded="true" aria-controls="collapseQuasar">
                                                        Quasar
                                                    </button>
                                                </h2>
                                                <div id="collapseQuasar" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionJs">
                                                    <div class="accordion-body" style="display: flex;">
                                                        <div class="text-content-accordion">
                                                            Quasar - это наш швейцарский нож. Хоть я познакомился с ним
                                                            совсем недавно, но уже активно использую. Готовые компоненты
                                                            втыкаем то тут, то там. Очень удобно классно и ваще он
                                                            мегахарош. В примере демонстрирую некоторые из
                                                            использованных мною компонентов в реальных рабочих задачах.
                                                        </div>
                                                        <div class="gif-content-accordion">
                                                            <img class="gif" src="vizitka-front/img/gif/jsSkills.gif" alt="gif">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        CSS
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionCss">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseBootstrap"
                                                        aria-expanded="true" aria-controls="collapseBootstrap">
                                                        Bootstrap
                                                    </button>
                                                </h2>
                                                <div id="collapseBootstrap" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionCss">
                                                    <div class="accordion-body" style="display: flex;">
                                                        <div class="text-content-accordion">
                                                            Bootstrap - бессмертная классика, мне просто нравится
                                                            использовать его в пет-проектах или когда нужно что то
                                                            быстренько сделать, при этом особо не напрягаясь(открыл доку
                                                            -> скопипастил код -> халлилуя святой дух все завелось и
                                                            ДАЖЕ работает ). В примере показываю, как я использовал
                                                            карточки, кнопки и формы из данного фреймворка в своем
                                                            дипломном проекте.
                                                        </div>
                                                        <div class="gif-content-accordion">
                                                            <img class="gif" src="vizitka-front/img/gif/bootstrapSkills.gif"
                                                                alt="gif">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        HTML
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="display: flex;">
                                        <div class="text-content-accordion">
                                            А че говорить... нууу хуй. Какой либо пример вставлять бессмысленно ибо html
                                            везде и вся ебать его за ногу, так что держите мем)
                                        </div>
                                        <div class="gif-content-accordion">
                                            <img class="image" src="vizitka-front/img/mem1.jpg" alt="gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        DOCKER
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="display: flex;">
                                        <div class="text-content-accordion">
                                            Docker оказался чуть сложнее и обширнее чем я ожидал, непосредственно данный
                                            проект планировался с использованием докера, но я тупой + не успеваю, так
                                            что держите снова мем)
                                        </div>
                                        <div class="gif-content-accordion">
                                            <img class="image" src="vizitka-front/img/mem2.jpg" alt="gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- Footer -->
        <footer id="footer" class="text-center">
            <span class="copyright">&copy; Все права защищенны нах</span>
        </footer>

    </div>

</body>

</html>