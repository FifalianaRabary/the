<?php
function connect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('172.20.0.167', 'ETU002571', 'pG0Rhq4qG6kE', 'db_p16_ETU002571');
    }
    return $connect;
}
?>