<?php
include 'config.php';
$new_url = 'nationality.php';

//Удаляем, если что
if (isset($_GET['del'])) {
    $sql = mysqli_query($link, "DELETE FROM `nationality` WHERE `nationality_id`={$_GET['del']}");
    header('Location: '.$new_url);
}

if (isset($_POST["i_nationality_id"])) {
    if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `nationality` SET `nationality_id`='{$_POST['i_nationality_id']}',`country_id`='{$_POST['country_id']}',`nationality`='{$_POST['nationality']}',`language`='{$_POST['language']}',`total_strength`='{$_POST['total_strength']}' WHERE `nationality_id`={$_GET['red']}");
        header('Location: '.$new_url);
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `nationality` (`nationality_id`, `country_id`, `nationality`, `language`, `total_strength`) VALUES ('{$_POST['i_nationality_id']}', '{$_POST['country_id']}', '{$_POST['nationality']}', '{$_POST['language']}', '{$_POST['total_strength']}');");
    }
}

if (isset($_GET['red'])) {
    $sql = mysqli_query($link, "SELECT `nationality_id`, `country_id`, `nationality`, `language`, `total_strength` FROM `nationality` WHERE `nationality_id`={$_GET['red']}");
    $forzal = mysqli_fetch_array($sql);
}

?>