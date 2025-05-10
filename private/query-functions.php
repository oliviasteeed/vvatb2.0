<?php

//get lyrics from db
    function getSongData($album_name){
        global $db;
        $array = []; //default option when not selecting by order number
        $query_str = "SELECT title, lyrics, about, tracklist FROM songs WHERE album_id = '$album_name' ORDER BY tracklist ASC";
        $result = $db->query($query_str); 

        while ($row = $result->fetch_array()) {   
            array_push($array, $row);
        };

        return $array;
    }

    //get album details from db
    function getAlbumData($album_name){
        global $db;
        $array = []; //default option when not selecting by order number
        $query_str = "SELECT title, short_description, long_description, recording_time, link FROM albums WHERE album_id = '$album_name'";
        $result = $db->query($query_str); 

        while ($row = $result->fetch_array()) {   
            array_push($array, $row);
        };

        return $array;
    }

    ?>