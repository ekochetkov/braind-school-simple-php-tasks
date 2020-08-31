<?php

    require('task-2-help-programmer-Petya.php');

    use BraindSchool\Task2;

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Задание 2. Помочь программисту Пете победить эрроры и ворнинги</h2>

        <form action="task-2-form.php">
        <label for="N">Количество эрроров:</label><br>
        <input type="text" id="N" name="N" value="<?= isset($_GET['N'])?$_GET['N']:'3' ?>"><br>
        <label for="M">Количество ворнингов:</label><br>
        <input type="text" id="M" name="M" value="<?= isset($_GET['M'])?$_GET['M']:'3' ?>"><br><br>
        <input type="submit" value="Submit">
        </form>

        <?php

            if( !empty($_GET) ){

                echo '<hr>';

                $commitsCount = Task2::minCommitsV2($_GET['N'],$_GET['M']);

                echo "Результат: $commitsCount";

            }

        ?>

    </body>
</html>
