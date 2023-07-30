<!doctype html>
<html lang="ru">

<head>
    <?php
    include 'config.php';
    include 'CRUD_countries.php';
    include 'menu.php'; ?>
    <!--    <div class="sidenav">-->
    <!--        <a href="http://localhost/license.php?del=6">Таблицы"</a>-->
    <!--        <a href="http://localhost/license.php">Таблица "License"</a>-->
    <!--        <a href="http://localhost/join1.php">SQL-запрос</a>-->
    <!--        <a href="http://localhost/Zad.php" data-bs-toggle="modal" data-bs-target="#modal" >Задание</a>-->
    <!--    </div>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <title>Пункт вывоза</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="width: 300px">
        <a class="navbar-brand" href="#">Таблица — Страны</a>
    </nav>
    <style>
    .modal-backdrop,
    .modal-backdrop.fade.in {
        opacity: 0.05 !important;
        filter: alpha(opacity=0) !important;
    }

    table {
        position: absolute;
        left: 200px;
        top: 48px;
    }
    </style>
    <div class="body">

        <?php

    $host = 'localhost';
    $user = 'valery';
    $pass = 'password';
    $db_name = '2_lab';
    $link = mysqli_connect($host, $user, $pass, $db_name);
    if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
    }

    ?>
    </div>
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="staticBackdropLabel2">Добавление</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" <div class="form-group">
                        <div class="row mb-3">
                            <div class="form-group col-md-6">
                                <label>ID</label>
                                <input type="text" class="form-control" autocomplete="disabled" name="e_country_id"
                                    placeholder="Введите ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Название</label>
                                <input type="text" class="form-control" autocomplete="disabled" name="e_name"
                                    placeholder="Название">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Регион</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="e_region"
                                placeholder="Название">
                        </div>
                        <div class="form-group mb-3">
                            <label>Площадь</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="e_area"
                                placeholder="Площадь страны">
                        </div>

                        <div class="form-group mb-3">
                            <label>Эконом.развитие</label>
                            <input type="text" class="form-control" autocomplete="disabled"
                                name="e_economic_development" placeholder="Место в рейтинге">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
                    <input type="submit" value="Добавить" class="btn btn-primary" </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="staticBackdropLabel1">Режим редактирования</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" <div class="form-group">
                        <div class="row mb-3">
                            <div class="form-group col-md-6">
                                <label>ID</label>
                                <input type="text" class="form-control" autocomplete="disabled" name="e_country_id"
                                    placeholder="Введите ID"
                                    value="<?= isset($_GET['red']) ? $forzal['country_id'] : ''; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Название</label>
                                <input type="text" class="form-control" autocomplete="disabled" name="e_name"
                                    placeholder="Название" value="<?= isset($_GET['red']) ? $forzal['name'] : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Регион</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="e_region"
                                placeholder="Название" value="<?= isset($_GET['red']) ? $forzal['region'] : ''; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label>Площадь</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="e_area"
                                placeholder="Площадь страны" value="<?= isset($_GET['red']) ? $forzal['area'] : ''; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label>Эконом.развитие</label>
                            <input type="text" class="form-control" autocomplete="disabled"
                                name="e_economic_development" placeholder="Место в рейтинге"
                                value="<?= isset($_GET['red']) ? $forzal['economic_development'] : ''; ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
                    <input type="submit" value="Изменить" class="btn btn-outline-dark" </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <h4 id="word">Таблица — Страны</h4>
    <table class="table shadow table table-striped table-bordered table-hover tabb" style="width: 1336px">
        <thead class="table">
            <tr align="center">
                <th>ID страны</th>
                <th>Название страны</th>
                <th>Регион</th>
                <th>Площадь</th>
                <th>Эконом. развитие</th>
                <th>Действие</th>
            </tr>
        </thead>
        <?php
    $u='';
    //Получаем данные
    $sql = mysqli_query($link, 'SELECT * FROM `countries`;');
    while ($result = mysqli_fetch_array($sql)) { ?>
        <tr>
            <td><?=$result['country_id']?></td>
            <td><?=$result['name']?></td>
            <td><?=$result['region']?></td>
            <td><?=$result['area']?></td>
            <td><?=$result['economic_development']?></td>

            <td style=width:180px>
                <a href="?del=<?=$result['country_id']?>" class='btn btn-outline-dark btn-sm bi bi-trash text-end'
                    title="Удалить запись" style="margin-left: 10px;" data-bs-toggle='modal'
                    data-bs-target='#staticBackdrop<?=$result['country_id']?>'></a>
                <a href="?red=<?=$result['country_id']?>" class='btn btn-outline-dark btn-sm bi bi-pencil text-end'
                    title="Редактировать" style="margin-left: 5px;"
                    data-bs-target='#staticBackdrop1<?=$result['country_id']?>''</a>
                <a href="?view=<?=$result['country_id']?>" class=' btn btn-outline-dark btn-sm bi bi-eye text-end'
                    title="Просмотр" style="margin-left: 8px;" data-bs-toggle='modal'
                    data-bs-target='#staticBackdrop3<?=$result['country_id']?>'></a>
            </td>
            <?php require 'modal_countries.php'; ?>
        </tr>
        <?php } ?>
        <?php
    if (isset($_GET['red'])) {?>

        <script type="text/javascript">
        $(window).on('load', function() {
            $('#staticBackdrop1').modal('show');
        });
        </script>
        <?php
    }
    ?>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>