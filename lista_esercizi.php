<?php

//file dove sono contenuti i dati da inviare tramite API REST alla pagina degli esercizi

    $files=array(
        array(
            "titolo"=>"Chest Press",
            "immagine"=>"css_file/immagini/panca_piana.jpg"
        ),
        array(
            "titolo"=>"Leg Press",
            "immagine"=>"css_file/immagini/pressa.jpg"
        ),
        array(
            "titolo"=>"Push Up",
            "immagine"=>"css_file/immagini/pushups.jpg"
        ),
        array(
            "titolo"=>"Squat",
            "immagine"=>"css_file/immagini/squat.jpg"
        ),
        array(
            "titolo"=>"Biceps Curl",
            "immagine"=>"css_file/immagini/curl_bilanciere.jpg"
        ),
        array(
            "titolo"=>"Dumbbell Press",
            "immagine"=>"css_file/immagini/distensioni_manubri.jpg"
        ),
        array(
            "titolo"=>"Leg Curl",
            "immagine"=>"css_file/immagini/leg_curl.jpg"
        ),
        array(
            "titolo"=>"Leg Extension",
            "immagine"=>"css_file/immagini/leg_extension.jpg"
        ),
        array(
            "titolo"=>"Crosses",
            "immagine"=>"css_file/immagini/croci_manubri_pancainclinata.jpg"
        ),
    );

    echo json_encode($files);
?>