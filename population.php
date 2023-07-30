<!doctype html>
<html lang="ru">

<head>
    <?php
    include 'config.php';
    include 'CRUD_population.php';
    include 'menu.php'; ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <title>Население</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="width: 300px">
        <a class="navbar-brand" href="#">Таблица — Население</a>
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
                        <div class="form-group mb-3">
                            <label>ID</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="i_population_id"
                                placeholder="Введите ID">
                        </div>
                        <div class="form-group mb-3">
                            <label>Страна</label>
                            <select type="number" name="country_id" class="form-control">
                                <option> </option>
                                <?php
                        $re = mysqli_query($link,"SELECT MIN(`country_id`) AS `country_id`, `name` FROM `countries` GROUP BY `country_id`;");
                        $re = mysqli_fetch_all($re);
                        foreach ($re as $res){ ?>
                                <option type="number" name="country_id" value="<?=$res[0]?>"><?=$res[1]?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Население</label>
                            <input type="text" class="form-control" autocomplete="disabled" name="population"
                                placeholder="Кол-во""></div>
                <div class=" modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
                            <input type="submit" value="Добавить" class="btn btn-primary" </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="staticBackdropLabel1">Режим редактирования</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>ID</label>
                                <input type="number" class="form-control" autocomplete="disabled" name="i_population_id"
                                    placeholder="Введите ID"
                                    value="<?= isset($_GET['red']) ? $forzal['population_id'] : ''; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Страна</label>
                                <select type="number" name="country_id" class="form-control"
                                    value="<?= isset($_GET['red']) ? $forzal['country_id'] : ''; ?>">
                                    <?php
                            $re = mysqli_query($link,"SELECT MIN(`country_id`) AS `country_id`, `name` FROM `countries` GROUP BY `country_id`;");
                            $re = mysqli_fetch_all($re);
                            foreach ($re as $res){
                            if($forzal['country_id']<>$res[0]){
                                ?>
                                    <option type="number" name="country_id" value="<?=$res[0]?>"><?=$res[1]?></option>
                                    <?php } else{ ?>
                                    <option type="number" selected="selected" name="country_id" value="<?=$res[0]?>">
                                        <?=$res[1]?></option> <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Население</label>
                                <input type="number" class="form-control" autocomplete="disabled" name="population"
                                    placeholder="Кол-во"
                                    value="<?= isset($_GET['red']) ? $forzal['population'] : ''; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
                                <input type="submit" value="Изменить" class="btn btn-outline-dark" </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
$resour = $_POST['population'];
echo $resour?>


    <!--<h4 id="word">Таблица  —  полезные ископаемые</h4>-->
    <h4 id="word">Таблица — Население</h4>
    <table class="table shadow table table-striped table-bordered table-hover tabb" style="width: 1336px">
        <thead class="table">
            <tr align="center">
                <th>ID</th>
                <th>Страна</th>
                <th>Население</th>
                <th>Действие</th>
            </tr>
        </thead>
        <?php
    $u='';
    //Получаем данные
    $sql = mysqli_query($link, 'SELECT `population`.`population_id`, `population`.`population`, `countries`.`country_id` FROM `population` INNER JOIN `countries` ON `countries`.`country_id` = `population`.`country_id`;');
    while ($result = mysqli_fetch_array($sql)) { ?>
        <tr>
            <td><?=$result['population_id']?></td>
            <td><?=$result['country_id']?></td>
            <td><?=$result['population']?></td>
            <td style=width:150px>
                <a href="?del=<?=$result['population_id']?>" class='btn btn-danger btn-sm bi bi-trash text-end'
                    title="Удалить запись" style="margin-left: 10px;" data-bs-toggle='modal'
                    data-bs-target='#staticBackdrop<?=$result['population_id']?>'></a>
                <a href="?red=<?=$result['population_id']?>" class='btn btn-warning btn-sm bi bi-pencil text-end'
                    title="Редактировать" style="margin-left: 5px;" </a>
                    <a href="?view=<?=$result['population_id']?>" class='btn btn-primary btn-sm bi bi-eye text-end'
                        title="Просмотр" style="margin-left: 8px;" data-bs-toggle='modal'
                        data-bs-target='#staticBackdrop3<?=$result['population_id']?>'></a>
            </td>
            <?php require 'modal_population.php'; ?>
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