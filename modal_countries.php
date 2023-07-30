<!doctype html>
<html lang="ru">

<body>
    <?php

//session_start();
//$error = $_SESSION['reason'];
//print_r($error);

?>

    <!-- Modal -->
    <div id="openModal2">
        <div class="modal fade" id="staticBackdrop<?=$result['country_id']?>" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Операция удаления</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="countries.php?del=<?=$result['country_id']?>" method="post" <h6>Вы действительно
                            хотите удалить запись №<?=$result['country_id']?> ?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Отмена</button>
                        <input type="submit" value="Удалить" name="del" class="btn btn-danger">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop3<?=$result['country_id']?>" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Просмотр. Запись №<?=$result['country_id']?></h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" <h6><?=$result['country_id']?>: <?=$result['name']?> —
                        <?=$result['region']?> — <?=$result['area']?> — <?=$result['economic_development']?></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
            integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
            integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
        </script>
</body>

</html>