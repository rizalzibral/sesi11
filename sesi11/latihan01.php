<?php
    $dta["NIM"] = "1122334455";
    $dta["NAMA"] = "Ahmad Bokir";
    $dta["UMUR"] = "20";
    $dta["PROFESI"] = "Dokter";
    $dta["JKEL"] = "Laki-laki";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);