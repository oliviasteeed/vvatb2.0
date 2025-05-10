<?php

//get specified project data from db
    function getAlbumData($album_name){
        global $db;
        $array = []; //default option when not selecting by order number
        $query_str = "SELECT title, lyrics, about, tracklist FROM songs WHERE album = '$album_name' ORDER BY tracklist ASC";
        $result = $db->query($query_str); 

        while ($row = $result->fetch_array()) {   
            array_push($array, $row);
        };

        return $array;
    }

    ?>