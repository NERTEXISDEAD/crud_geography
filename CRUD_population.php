<?php
include 'config.php';
$new_url = 'population.php';

//Удаляем, если что
if (isset($_GET['del'])) {
    $sql = mysqli_query($link, "DELETE FROM `population` WHERE `population_id`={$_GET['del']}");
    header('Location: '.$new_url);
}

if (isset($_POST["i_population_id"])) {
    if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `population` SET `population_id`='{$_POST['i_population_id']}',`country_id`='{$_POST['country_id']}',`population`='{$_POST['population']}' WHERE `population_id`={$_GET['red']}");
        header('Location: '.$new_url);
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `population` (`population_id`, `country_id`, `population`) VALUES ('{$_POST['i_population_id']}', '{$_POST['country_id']}', '{$_POST['population']}');");
    }
}

if (isset($_GET['red'])) {
    $sql = mysqli_query($link, "SELECT `population_id`, `country_id`, `population` FROM `population` WHERE `population_id`={$_GET['red']}");
    $forzal = mysqli_fetch_array($sql);
}

?>