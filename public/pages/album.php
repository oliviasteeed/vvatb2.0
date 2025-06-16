<!-- ALBUM DETAILS PAGE -->
<?php
require('header.php');
include('../../private/initialize.php');

$project = $_GET['project'] ?? null;

$title = "";
$song_info = [];
$album_info = [];

$colour_class = "";

// get song info
if ($project == 'itsneverenough') {
    $song_info = getSongData('itsneverenough');
    $album_info = getAlbumData('itsneverenough');
    $colour_class = "ine-red";
} elseif ($project == 'anxiousavoidant') {
    $song_info = getSongData('anxiousavoidant');
    $album_info = getAlbumData('anxiousavoidant');
    $colour_class = "aa-blue";
} elseif ($project == 'thenextalbum') {
    $song_info = getSongData('thenextalbum');
    $album_info = getAlbumData('thenextalbum');
    $colour_class = "tna-pink";
} else {
    header("Location: home.php");
    exit();
}

// print_r($album_info);


?>


<div class='outer-album-content-container'>

    <div class='album-about-container'>

        <div class='album-start-container'>
                <?php 
                $p_replacements = [
                    '?' => '<span class="a-bracket">?</span>',
                    '(' => '<span class="a-bracket">(</span>',
                    ')' => '<span class="a-bracket">)</span>',
                    "'" => '<span class="a-bracket">\'</span>',
                    "’" => '<span class="a-bracket">’</span>',
                    "‘" => '<span class="a-bracket">‘</span>',
                    ":" => '<span class="a-bracket">:</span>',
                    "ï" => '<span class="a-bracket">ï</span>',
                    "!" => '<span class="a-bracket">!</span>'
                ];

                $h2_replacements = [
                    '?' => '<span class="h2-bracket">?</span>',
                    '(' => '<span class="h2-bracket">(</span>',
                    ')' => '<span class="h2-bracket">)</span>',
                    "'" => '<span class="h2-bracket">\'</span>',
                    "’" => '<span class="h2-bracket">’</span>',
                    "‘" => '<span class="h2-bracket">‘</span>',
                    ":" => '<span class="h2-bracket">:</span>',
                    "!" => '<span class="h2-bracket">!</span>'
                ];

                $h1_replacements = [
                    "'" => '<span class="h1-bracket">’</span>',
                    "’" => '<span class="h1-bracket">’</span>',
                    "‘" => '<span class="h1-bracket">‘</span>'
                ];

                $clean_title = str_replace(array_keys($h1_replacements), array_values($h1_replacements), $album_info[0]['title']);

                $clean_sd = str_replace(array_keys($h2_replacements), array_values($h2_replacements), $album_info[0]['short_description']);

                $clean_ld = str_replace(array_keys($p_replacements), array_values($p_replacements), $album_info[0]['long_description']);

                $clean_rt = str_replace(array_keys($p_replacements), array_values($p_replacements), $album_info[0]['recording_time']);

                echo "<h1 class='left-align h1-album'>$clean_title</h1>";
                
                echo "<h2 class='$colour_class'>$clean_sd</h2>";

                echo "<p class='$colour_class'>$clean_rt</p>";

                echo "<p class='$colour_class'>$clean_ld</p>";
            
                
                ?>
                    

                <!-- links again -->
                <div class='outer-nav'>
                <div class='inner-nav'>
                            <div class='text-icon-button-box' onclick="window.location.href='<?php echo $album_info[0]['link'];?>'">
                                <a href="<?php echo $album_info[0]['link'];?>">listen</a>
                                <img class="icon-button" id="back-button" src="../media/icons/external.png" data-hover="../media/icons/music_red.png" data-default="../media/icons/music.png">
                            </div>  
                    </div>
                </div>
        </div>
            
         <!-- photo flip on hover -->
        <div class='album-flipbook-container'>
                    <p class='album-caption-text hover-caption'><span class='a-bracket'>(</span>hover to view some pics of the album process<span class='a-bracket'>)</span></p>
        <div class='flipbook' data-folder='../media/img/<?php echo $project;?>/flip' data-frames='20'>
         <img src='../media/img/<?php echo $project;?>/flip/frame1.png' alt='flipbook frame'>
        </div>

    </div>
</div>
<!-- end of outer album content container  -->

<?php
echo "<div class='lyrics-box'>";

$p_replacements = [
    '?' => '<span class="a-bracket">?</span>',
    '(' => '<span class="a-bracket">(</span>',
    ')' => '<span class="a-bracket">)</span>',
    "'" => '<span class="a-bracket">\'</span>',
    "’" => '<span class="a-bracket">’</span>',
    "‘" => '<span class="a-bracket">‘</span>',
    ":" => '<span class="a-bracket">:</span>',
    "ï" => '<span class="a-bracket">ï</span>',
    "*" => '<span class="a-bracket">*</span>',
    "!" => '<span class="a-bracket">!</span>'
];

$h2_replacements = [
    '?' => '<span class="h2-bracket">?</span>',
    '(' => '<span class="h2-bracket">(</span>',
    ')' => '<span class="h2-bracket">)</span>',
    "'" => '<span class="h2-bracket">\'</span>',
    "’" => '<span class="h2-bracket">’</span>',
    "‘" => '<span class="h2-bracket">‘</span>',
    ":" => '<span class="h2-bracket">:</span>'
];

foreach ($song_info as $song) {
    $title = $song['title'];
    $clean_title = str_replace(array_keys($h2_replacements), array_values($h2_replacements), $title);

    $lyrics = $song['lyrics'];
    $clean_lyrics = str_replace(array_keys($p_replacements), array_values($p_replacements), $lyrics);

    $about = $song['about'];
    $clean_about = str_replace(array_keys($p_replacements), array_values($p_replacements), $about);



    echo "<div class='song-box'>";
    echo "<h2 class='$colour_class'>$clean_title</h2>";
    echo "<p>$clean_lyrics</p>";
    echo "<p class='$colour_class'>$clean_about</p>";
    echo "</div>";
}
    echo "</div>";
?>





    </div>
    <!-- end of lyrics box -->


<?php
if ($project == 'itsneverenough') {
    echo "<a href='https://viaviaandtheband.oliviasteed.com/itsneverenough.html'>original It's Never Enough website <span class='a-bracket'>(</span>2023<span class='a-bracket'>)</span></a>";
} elseif ($project == 'anxiousavoidant') {
    echo "<a href='https://viaviaandtheband.oliviasteed.com/'>original Anxious Avoidant website <span class='a-bracket'>(</span>2024<span class='a-bracket'>)</span></a>";
} 

?>









<?php
require('footer.php');
?>