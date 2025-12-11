<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <p class="contacts__title">Поскольку наша псевдокомпания не имеет своего телефона или почты, то вот вам контакты непосредственно наших горе разработчиков (или разработчика)</p>
    <div class="contacts__carousel">
        <div class="carousel">
            <div class="slides" id="slides">
                <div class="slide"><img src="/img/none1.jpg" alt="Слайд 1">
                    <p class="contacts__underimg">Первый неизвество кто</p>
                    <p class="contacts__underimg">Фронтенд-разработчик</p>
                    <p class="contacts__underimg">Номер телефона: 8 (982) ###-##-##</p>
                    <p class="contacts__underimg">Почта: realmail100proc@mysite.ru</p>
                </div>
                <div class="slide"><img src="/img/none2.jpg" alt="Слайд 2" >
                    <p class="contacts__underimg">Второй неизвество кто</p>
                    <p class="contacts__underimg">Бэкенд-разработчик</p>
                    <p class="contacts__underimg">Номер телефона: 8 (912) ###-##-##</p>
                    <p class="contacts__underimg">Почта: realmail100proctochno@mysite.ru</p>
                </div>
            </div>
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="index.js">

    </script>
</body>
</html>