<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>География</title>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta property="og:url" content="https://codepen.io/hrtzt/details/NPZKRN">
    <meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

    <script>
    $(document).ready(function() {
        $('.nav-link-collapse').on('click', function() {
            $('.nav-link-collapse').not(this).removeClass('nav-link-show');
            $(this).toggleClass('nav-link-show');
        });
    });
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Sidebar Nav</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav flex-column" id="navbarCollapse">
            <ul class="navbar-nav mr-auto sidenav nav flex-column" id="navAccordion">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task.php">Задание</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse"
                        data-target="#collapseSubItems2" aria-controls="collapseSubItems2"
                        aria-expanded="false">Таблицы</a>
                    <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="countries.php">
                                <span class="nav-link-text">Страны</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="population.php">
                                <span class="nav-link-text">Население</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nationality.php">
                                <span class="nav-link-text">Национальность</span>
                            </a>
                        </li>
                        <!--                    <li class="nav-item">-->
                        <!--                        <a class="nav-link" href="#">-->
                        <!--                            <span class="nav-link-text">Пункт вывоза - Полезные ископаемые</span>-->
                        <!--                        </a>-->
                        <!--                    </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="forma.php">
                                <span class="nav-link-text">Форма залегания</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse"
                        data-target="#collapseSubItems4" aria-controls="collapseSubItems4"
                        aria-expanded="false">SQL-запросы</a>
                    <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="sql1.php">
                                <span class="nav-link-text">SQL-1 "Исчерпаны через 5 лет"</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sql2.php">
                                <span class="nav-link-text">SQL-2 "Потребность не удовлетворяется"</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sql3.php">
                                <span class="nav-link-text">SQL-3 "Прибыльный Эльдарадо"</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sql4.php">
                                <span class="nav-link-text">SQL-4 "Твердое топливо - открытым способом"</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="form-inline ml-auto mt-2 mt-md-0">
                <button type="button" style=" margin-right: 20px" class="btn btn-primary bi bi-plus-square btn-sm"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    &nbsp;Добавить данные
                </button>
            </form>
        </div>
    </nav>

    <style>
    .nav-link:hover {
        transition: all 0.4s;
        background-color: #FE5260;
        ;
    }

    .nav-link-collapse:after {
        float: right;
        content: '\f067';
        font-family: 'FontAwesome';
    }

    .nav-link-show:after {
        float: right;
        content: '\f068';
        font-family: 'FontAwesome';
    }

    .nav-item ul.nav-second-level {
        padding-left: 0;
    }

    .nav-item ul.nav-second-level>.nav-item {
        padding-left: 20px;
    }

    @media (min-width: 992px) {
        .sidenav {
            position: absolute;
            top: 0;
            left: 0;
            width: 200px;
            height: calc(100vh - 3.5rem);
            margin-top: 3.5rem;
            border-radius: 0;
            background: #343a40;
            box-sizing: border-box;
        }

        .navbar-expand-lg .sidenav {
            flex-direction: column;
        }
    }
    </style>
</body>

</html>