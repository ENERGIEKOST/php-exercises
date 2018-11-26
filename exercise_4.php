<?php
/**
 * Created by PhpStorm.
 * User: ENERGIEKOST
 * Date: 26.11.2018
 * Time: 23:25
 */
//print_r($_POST); выводит все содержимое

echo ($_POST['comment']);
?>
<form name="test" method="post" action="#">
    <textarea name="comment" cols="40" rows="3"></textarea>
    <button type="submit">Получить</button>
</form>
