<?php
function connect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'projetThe');
    }
    return $connect;
}
?>