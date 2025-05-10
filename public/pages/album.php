<!-- ALBUM DETAILS PAGE -->
<?php
require('header.php');
include('../../private/initialize.php');

$project = $_GET['project'] ?? null;

$title = "";
$album_info = [];


if ($project == 'itsneverenough') {
    $title = "It's Never Enough";
    $album_info = getAlbumData('itsneverenough');
} elseif ($project == 'anxiousavoidant') {
    $title = "Anxious Avoidant";
    $album_info = getAlbumData('anxiousavoidant');
} elseif ($project == 'thenextalbum') {
    $title = "The Next Album";
    $album_info = getAlbumData('thenextalbum');
} else {
    header("Location: home.php");
    exit();
}

// print_r($album_info);


?>


<div class='outer-album-content-container'>

    <div class='outer-about-container'>

        <div class='album-start-container'>
                <?php 
                echo "<h1 class='left-align'>$title</h1>";
                ?>
                    <h2 class='tna-pink'>a undecided album about transitions and adulthood.</h2>

                    <p>mnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to saymnore to say</p>

                    <p>written February 2024 to January 2025<br>
                    recorded July 2024 to June 2025<br>
                    released SUMMER 2025</p>

                <!-- links again -->
                <div class='outer-nav'>
                <div class='inner-nav'>
                            <div class='text-icon-button-box' onclick="window.location.href='https://artists.landr.com/055855653093'">
                                <a href="https://artists.landr.com/055855653093">listen</a>
                                <img class="icon-button" id="back-button" src="../media/icons/external.png" data-hover="../media/icons/music_red.png" data-default="../media/icons/music.png">
                            </div>  
                    </div>
                </div>
        </div>
            
         <!-- photo flip on hover -->
        <div class='album-flipbook-container'>
                    <p>hover to view some pics of the album process</p>
        <div class='flipbook' data-folder='../media/img/tna/flip' data-frames='18'>
         <img src='../media/img/tna/flip/frame1.png' alt='flipbook frame'>
        </div>

    </div>
</div>
<!-- end of outer album content container  -->

<?php
echo "<div class='lyrics-box'>";

foreach ($album_info as $song) {
    $title = $song['title'];
    $lyrics = $song['lyrics'];
    $about = $song['about'];
    echo "<div class='song-box'>";
    echo "<h2>$title</h2>";
    echo "<p>$lyrics</p>";
    echo "<p class='p-small'>$about</p>";
    echo "</div>";
}
    echo "</div>";
?>





    </div>
    <!-- end of lyrics box -->









<?php
require('footer.php');
?>