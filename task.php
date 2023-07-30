<!doctype html>
<html lang="en">

<head>
    <?php include 'menu.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>


<body>
    <div id="container">
        <div class="row">
            <div class="col mt-3">
                <h1>Добро пожаловать!</h1>
                <p>Реализовать систему с визуальным интерфейсом.
                    Предусмотреть вывод информации из всех таблиц (SELECT и JOIN для вывода информации целиком)
                    Должно присутствовать несколько форм для внесения и изменения данных.
                    Формы для ввода-вывода должны располагаться на раздельных страницах и оформлены визуально опрятно.
                    Для делающих на PHP, в рамках верстки допускается использовать любой css фреймворк (Bootstrap,
                    Tailwind и тд)
                    Система должна быть навигационно связана (присутствовать меню). Запросы по заданию, можно объеденить
                    в рамках одной страницы (сделать например несколько кнопок, при нажатии на которую производится
                    запрос и переход на страницу с результатом. Как вариант, использовать модальные окна).</p>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа/ Задание №4/ Вариант №25</a>
    </nav>

    <style>
    #container {
        border-radius: 10px;
        background: #efefef;
        box-shadow: 20px 20px 60px #cccccc,
            -20px -20px 60px #ffffff;
        width: 1000px;
        height: 500px;
        position: absolute;
        left: 22%;
        top: 15%
    }

    h1 {
        color: #0e0e0e;
        font-weight: 200;
        padding: 30px 20px 20px 50px;
        margin: 15px;
        align-content: center
    }

    p {
        color: #0e0e0e;
        top: 5%;
        font-size: 16px;
        line-height: 26px;
        text-indent: 50px;
        margin: 15px;
        padding: 40px 15px 100px 30px
    }

    .date {
        background: #fe921f;
        color: #ffffff;
        font-family: ‘Lato’, sans-serif;
        font-size: 12px;
        font-weight: bold;
        line-height: 12px;
        letter-spacing: 1px;
        margin: 0 0 30px;
        padding: 10px 15px 8px;
        text-transform: uppercase;
    }

    body {}
    </style>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>