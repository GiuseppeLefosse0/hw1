<?php

//file dove sono contenuti i dati da inviare tramite API REST alla homepage

    $files=array(
        array(
            "titolo"=>"1 Month Membership",
            "immagine"=>"css_file/immagini/1month.png"
        ),
        array(
            "titolo"=>"3 Months Membership",
            "immagine"=>"css_file/immagini/3month.png"
        ),
        array(
            "titolo"=>"6 Month Membership",
            "immagine"=>"css_file/immagini/6month.png"
        ),
    );

    echo json_encode($files);
?>