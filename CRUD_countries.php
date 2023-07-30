<?php
include 'config.php';
$new_url = 'countries.php';

//Удаляем, если что
if (isset($_GET['del'])) {
    $sql = mysqli_query($link, "DELETE FROM `countries` WHERE `country_id`={$_GET['del']}");
    header('Location: '.$new_url);
}

if (isset($_POST["e_country_id"])) {
    if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `countries` SET `country_id` = '{$_POST['e_country_id']}',`name` = '{$_POST['e_name']}',`region` = '{$_POST['e_region']}',`area` = '{$_POST['e_area']}', `economic_development` = '{$_POST['e_economic_development']}' WHERE `country_id`={$_GET['red']}");
        header('Location: '.$new_url);
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `countries` (`country_id`, `name`, `region`, `area`, `economic_development`) VALUES ('{$_POST['e_country_id']}', '{$_POST['e_name']}', '{$_POST['e_region']}',  '{$_POST['e_area']}', '{$_POST['e_economic_development']}');");
    }
}

if (isset($_GET['red'])) {
    $sql = mysqli_query($link, "SELECT `country_id`, `name`, `region`, `area`, `economic_development` FROM `countries` WHERE `country_id`={$_GET['red']}");
    $forzal = mysqli_fetch_array($sql);
}

?>