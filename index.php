<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Дизайн - Детска музикална школа "Свиленград"</title>
        <meta name="description" content='Детска музикална школа "Свиленград"'>
        <meta name="keywords" content="детска, музикална, школа,свиленград">
        <meta name="robots" content="index,follow" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/superfish.css" />
        <link rel="stylesheet" type="text/css" href="css/tipsy.css" />
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="UTF8"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/tipsy.js"></script>
        <script type="text/javascript">
            $(function () {
                $(".sf-menu a").click(function () {
                    alert('Очаквайте скоро!');
                    return false;
                });
                $('a.tooltip').tipsy({
                    'gravity': $.fn.tipsy.autoNS,
                    'fade': true
                });
		$('ul.sf-menu').superfish();
                $("a[rel^='prettyPhoto']").prettyPhoto();
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div class="logo"></div>
                <div class="menu shadow">
                    <ul class="sf-menu">
                        <li class="sfHover"><a href="#" class="first">Начало</a></li>
                        <li><a href="#">За школата</a>
                            <ul>
                                <li><a href="#">Създател</a></li>
                                <li><a href="#">История</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Класове</a>
                            <ul>
                                <li><a href="#">Тромпет</a>
                                    <ul>
                                        <li><a href="#">Изявени ученици</a></li>
                                        <li><a href="#">Преподавател</a></li>
                                        <li><a href="#">За инструмента</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Флейта</a>
                                    <ul>
                                        <li><a href="#">Изявени ученици</a></li>
                                        <li><a href="#">Преподавател</a></li>
                                        <li><a href="#">За инструмента</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Ударни инструменти</a>
                                    <ul>
                                        <li><a href="#">Изявени ученици</a></li>
                                        <li><a href="#">Преподавател</a></li>
                                        <li><a href="#">За инструмента</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Кларинет</a>
                                    <ul>
                                        <li><a href="#">Преподавател</a></li>
                                        <li><a href="#">За инструмента</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Новини</a></li>
                        <li><a href="#">Снимки</a></li>
                        <li><a href="#">Видеа</a></li>
                        <li><a href="#">Спонсори</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </div>
            </div>
            <div id="content" class="shadow">
                <div class="left-bar">
                    <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>За школата</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <p>
                                Школата е основана от Васко Стефанов през ноември 2008 год. Тогава се преподават само тромпет и ударни инструменти. След около година и половина, вече е достъпно и обучението с флейта.
                            </p>
                            <p style="margin-top: 10px">
                                <a href="#" class="button blue">Прочети повече</a>
                            </p>
                        </div>
                    </div>
                     <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>Последни новини</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h1><a href="#" title="Прочети цялата новина">Здравка Василева - солистка в операта!</a></h1>
                            <p class="thumb">
                                <a href="#"><img src="images/articles/zdravka.jpg" alt="Здравка"></a>
                            </p>
                            <p>
                                Децата от детската музикална школа на Свиленград ще се представят със свои изпълнения пред връстниците си от националното музикално училище „Любомир Пипков” в София. Концертът на местните таланти в столицата ще се състои на 11 юни.16-те млади музиканти бяха избрани да покажат уменията си пред децата от специализираното училище по време на прегледа на даровити деца, който се състоя преди дни в Хасково. Нашите деца по-никакъв начин не отстъпват пред съучениците си от музикалното училище.
                            </p>
                            <p>
                                <a href="#" class="button blue">Прочети цялата новина</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right-bar">
                    <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>Търсачка</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                           <form method="POST">
                               <input type="text" name="q" class="search-input" value=""> <input type="submit" class="button blue" value="Давай">
                           </form>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>Последни снимки</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                           <a href="images/fullscreen/penchev.jpg" rel="prettyPhoto[Photos1]" title="Пенчо Пенчев - преподавател по тромпет"><img src="images/gallery/penchev.jpg" style="margin-right: 5px; max-height: 90px; float: left;"></a>
                           <a href="images/fullscreen/zdravka.jpg" rel="prettyPhoto[Photos1]" title="Здравка Василева - тромпет"><img src="images/gallery/zdravka.jpg"  rel="prettyPhoto[gallery1]" style="max-height: 90px;"></a>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>Видеоклип</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                           <a href="http://www.youtube.com/watch?v=-pCWLhbamvo" rel="prettyPhoto[YoutTube]" title="Хасково, 2012"><img src="images/gallery/video.jpg" style="width: 100%;"></a>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="head">
                            <div class="inner">
                                <div class="title">
                                    <h1>Реклама</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                           <a href="http://shareit.bg" title="ShareIT"><img src="images/advertisement/shareit.png" style="width: 100%;"></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div id="footer" class="shadow">
                <div class="webhosting"><a href="http://superhosting.bg" title="Хостинг и домейн от СуперХостинг.БГ"><img src="images/superhosting.gif"></a></div>
                <div class="copyright">&copy; Детска музикална школа "Свиленград"<br /> Сайтът е създаден от <a href="http://ygeorguev.eu" class="tooltip" title="Код и дизайн от Ясен Георгиев">Ясен Георгиев</a></div>
            </div>
        </div>
    </body>
</html>