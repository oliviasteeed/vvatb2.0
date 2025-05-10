<!-- LANDING PAGE -->

<?php
require('header.php');
?>

 <!-- title and albums -->
<div class='outer-content-container'>
    <div class='inner-content-container'>
        <h1>viavia</h1>

        <div class="image-wrapper">
            <!-- ine -->
            <img src="../media/img/itsneverenough/tracklist.png" id="ine-tracklist"/>

            <img src="../media/img/itsneverenough/title.png" id="ine-title">

            <img src="../media/img/itsneverenough/eyeopen.png" id="ine-eyeopen"/>

            <img src="../media/img/itsneverenough/eyeclosed.png" id="ine-eyeclosed"/>

            <!-- aa -->
            <img src="../media/img/anxiousavoidant/title.png" id="aa-title"/>

            <img src="../media/img/anxiousavoidant/tracklist.png" id="aa-tracklist"/>

            <img src="../media/img/anxiousavoidant/heart.png" id="aa-heart"/>

            <img src="../media/img/anxiousavoidant/lightning.png" id="aa-lightning"/>

            <!-- tna -->
             <img src="../media/img/thenextalbum/title.png" id="tna-title"/>

             <img src="../media/img/thenextalbum/tracklist.png" id="tna-tracklist"/>

             <img src="../media/img/thenextalbum/dude.png" id="tna-dude"/>

             <img src="../media/img/thenextalbum/kiki.png" id="tna-kiki"/>


            <!-- album covers -->
            <img src="../media/img/itsneverenough/cover.png" class="flip-image" id="ine" onclick="window.location.href='album.php?project=itsneverenough'"/>

            <img src="../media/img/anxiousavoidant/cover.png" class="flip-image" id="aa" onclick="window.location.href='album.php?project=anxiousavoidant'"/>

            <img src="../media/img/thenextalbum/cover.png" class="flip-image" id="tna" onclick="window.location.href='album.php?project=thenextalbum'"/>


            <div class="flip-text">
 
                <div class='inner-nav'>
                    <div class='text-icon-button-box' onclick="window.location.href='https://www.instagram.com/viaviaandtheband'">
                        <h2 id='title'></h2>
                        <img class="icon-button" id="album-forward-button" src="../media/icons/forward.png">
                    </div>  
                </div>  

                <p id='description'></p>

            </div>






        </div>






        <h1><span class='h1-bracket'>(</span>and the <br>band<span class='h1-bracket'>)</span></h1>
    </div>

</div>

<!-- contains about and footer -->
<div class='supplementary-content-container'>

    <!-- ABOUT -->
    <div class='outer-about-container'>

    <div class='about-container'>
            <h2>meet the band</h2>
            <p>we’re a Canadian brother and sister music duo.  we like guitar sounds, music that makes you jump, and bananas, and this music project is us seeking to create excellence in a fun way. olivia<span class='a-bracket'>’<span>s key value is authenticity, which reflects in the lyrics. elliot<span class='a-bracket'>’<span>s key value is metronome which reflects in his tight instrumentation.</p>


            <p>we are currently working on <em>The Next Album</em> <span class='a-bracket'>(<span>coming Summer 2025 as soon as we finish recording and Olivia takes the mixing course<span class='a-bracket'>)</span>.</p>

            <p>In the meantime, can I offer you some very exciting links<span class='a-bracket'>?</span></p>


        <!-- links again -->
            <!-- <div class='album-links'>
                <a href="https://artists.landr.com/055855653093">Listen to the music we have already released</a>
                <a href="https://www.youtube.com/@viaviaandtheband">Watch the very limited video offerings on our YouTube</a>
                <a href="https://www.instagram.com/viaviaandtheband">Follow our Instagram which is minimal and inactive as a very deliberate choice</a>
            </div>
            </div> -->


        <div class='outer-nav'>
            
        <div class='inner-nav'>
                    <div class='text-icon-button-box' onclick="window.location.href='https://artists.landr.com/055855653093'">
                        <a href="https://artists.landr.com/055855653093">listen</a>
                        <img class="icon-button" id="back-button" src="../media/icons/music.png" data-hover="../media/icons/music_red.png" data-default="../media/icons/music.png">
                    </div>  

                    <div class='text-icon-button-box' onclick="window.location.href='https://www.youtube.com/@viaviaandtheband'">
                        <a href="https://www.youtube.com/@viaviaandtheband">watch</a>
                        <img class="icon-button" id="back-button" src="../media/icons/play.png" data-hover="../media/icons/play_red.png" data-default="../media/icons/play.png">
                    </div>  

                    <div class='text-icon-button-box' onclick="window.location.href='https://www.instagram.com/viaviaandtheband'">
                        <a href="https://www.instagram.com/viaviaandtheband">follow</a>
                        <img class="icon-button" id="back-button" src="../media/icons/connect.png" data-hover="../media/icons/connect_red.png" data-default="../media/icons/music.png">
                    </div>  
            </div>
        </div>
    </div>

    <!-- photo flip on hover -->
    <div class='outer-flipbook-container'>
            <p class='about-caption-text hover-caption'>hover to view some pics of the band <span class='a-bracket'>(<span>and the viavia<span class='a-bracket'>)<span></p>
    <div class='flipbook' data-folder='../media/img/about-flip' data-frames='20' onclick="window.location.href='project.php?project=" . urlencode($path) . "'">
        <img src='../media/img/about-flip/frame1.png' alt='flipbook frame'>
    </div>
    </div>


</div>
<!-- end of about container -->

<!-- <div class='about-container'>
    <h2>meet the albums</h2>
    <p>or preferably explore the really cool thing at the top of the page to appreciate the new heights of web dev Olivia has pioneered for this project exclusively. You're welcome.</p>
    <div class='album-links'>
        <a href="album.php?project=itsneverenough">It's Never Enough (2023)</a>
        <a href="album.php?project=anxiousavoidant">Anxious Avoidant (2024)</a>
        <a href="album.php?project=thenextalbum">The Next Album (2025)</a>
    </div>
</div> -->

<!-- </div> -->


<?php
require('footer.php');
?>