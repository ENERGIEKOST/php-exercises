<?php

/**
 * Created by PhpStorm.
 * User: ENERGIEKOST
 * Date: 28.11.2018
 * Time: 0:02
 */



//$current_file_name = basename($_SERVER['PHP_SELF']);
//echo $current_file_name."\n";



//Написал скрипт для получения текущего имени файла.

$indicesServer = array('SCRIPT_NAME');

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
