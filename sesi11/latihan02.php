<?php
    $dta[0]["NIM"] = "1122334455";
    $dta[0]["NAMA"] = "Ahmad Bokir";
    $dta[0]["UMUR"] = "20";
    $dta[0]["PROFESI"] = "Dokter";
    $dta[0]["JKEL"] = "Laki-laki";

    $dta[1]["NIM"] = "3012200300";
    $dta[1]["NAMA"] = "Alex Bhizer";
    $dta[1]["UMUR"] = "24";
    $dta[1]["PROFESI"] = "pengangguran";
    $dta[1]["JKEL"] = "Laki-laki";

    $dta[2]["NIM"] = "6789102003";
    $dta[2]["NAMA"] = "samsu aja";
    $dta[2]["UMUR"] = "19";
    $dta[2]["PROFESI"] = "kuli";
    $dta[2]["JKEL"] = "Laki-laki";

    $dta[3]["NIM"] = "33442211";
    $dta[3]["NAMA"] = "muharromi";
    $dta[3]["UMUR"] = "40";
    $dta[3]["PROFESI"] = "Dokter";
    $dta[3]["JKEL"] = "Laki-laki";

    $dta[4]["NIM"] = "8899776655";
    $dta[4]["NAMA"] = "otsusuki sugandi";
    $dta[4]["UMUR"] = "81";
    $dta[4]["PROFESI"] = "Dokter";
    $dta[4]["JKEL"] = "Laki-laki";




    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);