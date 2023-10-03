<?php
function fiturWa($data_telepon)
{
    $remove_number = substr($data_telepon, 1);
    $result = "https://wa.me/62" . $remove_number;
    return $result;
}

?>