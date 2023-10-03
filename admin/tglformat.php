<?php

function tgl($data_tgl)
{

    if ($data_tgl == null) {
        return null;
    } else {
        $newDate = date("d-F-Y", strtotime($data_tgl));
        return $newDate;
    }



}

?>