<!doctype html>
<html lang="ru">
<?php
include 'config.php';
include 'menu.php'; ?>?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

<head>
    <title>SQL1</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="width: 100%">
        <a class="navbar-brand" href="#">SQL-запрос №4. Список национальностей, проживающих в регионе 'Драконовы
            Горы'.</a>
    </nav>
    <style>
    body {
        background: url('//dhgf5mcbrms62.cloudfront.net/60019845/cover-ST2GeU/lGrRaOX-1200x1200.jpg');
    }

    table {
        position: absolute;
        left: 19%;
        top: 16%;
    }

    #container {
        color: white;
        background: #ecf0f1;
        position: absolute;
        left: 17%;
        top: 13%;
        width: 1050px;
        height: 500px;
        background: rgba(255, 255, 255, 0.45);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(2.5px);
        -webkit-backdrop-filter: blur(2.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .table th,
    .table td {
        border-top: none !important;
        border-left: none !important;
        border: 0px !important;
    }
    </style>
    <div id="container">
        <div class="row">
            <div class="col mt-3">
            </div>
        </div>
    </div>

    <table class="table table-hover tabb" style="width: 1180px">
        <thead class="table">
            <tr>
                <th>Страна</th>
                <th>Регион</th>
                <th>Национальность</th>
            </tr>
            <?php
    //Получаем данные
    $sql = mysqli_query($link, 'SELECT countries.name, countries.region, nationality.nationality from countries inner join nationality on countries.name = nationality.name where (countries.region = "Драконовы Горы");;');
    while ($result = mysqli_fetch_array($sql)) {
        echo "<tr><td> {$result['name']}  </td><td> {$result['region']} </td><td>  {$result['nationality']}  </td>";
    }
    ?>
        </thead>
    </table>
    <script>
    $(document).ready(function() {
        $('.nav-link-collapse').on('click', function() {
            $('.nav-link-collapse').not(this).removeClass('nav-link-show');
            $(this).toggleClass('nav-link-show');
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>