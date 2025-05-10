
//hover to grow album cover and minimize others
//have record slide out
//have the lyrics and stuff slide out and show



$(document).ready(function () {
    const defaultOffsets = {
        ine: "-150px",
        aa: "0px",
        tna: "150px"
    };

    $('.flip-image').on('mouseenter', function () {
        const hovered = this;

        $('.flip-image').each(function () {
            if (this !== hovered) {
                const direction = $(this).offset().left < $(hovered).offset().left ? "-150px" : "150px";
                gsap.to(this, {
                    scale: 0.9,
                    x: direction,
                    zIndex: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });

        gsap.to(hovered, {
            scale: 1.5,
            x: 0,
            zIndex: 10,
            duration: 0.3,
            ease: "power2.out"
        });


        $id = $(this).attr('id');
        switch ($id) {
            case 'ine': //it's never enough is pink
                $description = $('#description');
                $description.text('the first album we recorded together. about dreams and growing up.');
                $description.css('color', '#FE2A5D');
                $description.attr('visibility', 'visible');

                $title = $('#title');
                $title.text("It's Never Enough");
                $title.css('color', '#FE2A5D');
                $title.attr('visibility', 'visible');

                $icon = $('#album-forward-button');
                $icon.css('visibility', 'visible');

                //make extra assets visible
                $tracklist = $('#ine-tracklist');
                $tracklist.css('visibility', 'visible');

                $title = $('#ine-title');
                $title.css('visibility', 'visible');

                $eyeopen = $('#ine-eyeopen');
                $eyeopen.css('visibility', 'visible');

                $eyeclosed = $('#ine-eyeclosed');
                $eyeclosed.css('visibility', 'visible');
                break;

            case 'aa':  //it's never enough is blue
                $description = $('#description');
                $description.text('a hot to the touch album about baby’s first breakup!');
                $description.css('color', '#0005AC');
                $description.attr('visibility', 'visible');

                $title = $('#title');
                $title.text("Anxious Avoidant");
                $title.css('color', '#0005AC');
                $title.attr('visibility', 'visible');

                $icon = $('#album-forward-button');
                $icon.css('visibility', 'visible');

                //make extra assets visible
                $tracklist = $('#aa-tracklist');
                $tracklist.css('visibility', 'visible');

                $title = $('#aa-title');
                $title.css('visibility', 'visible');

                $lightning = $('#aa-lightning');
                $lightning.css('visibility', 'visible');

                $heart = $('#aa-heart');
                $heart.css('visibility', 'visible');
                break;

            case 'tna': //tna is orange
                $description = $('#description');
                $description.text('an undecided album about transitions and adulthood.');
                $description.css('color', '#FE4E15');
                $description.attr('visibility', 'visible');

                $title = $('#title');
                $title.text("The Next Album");
                $title.css('color', '#FE4E15');
                $title.attr('visibility', 'visible');

                $icon = $('#album-forward-button');
                $icon.css('visibility', 'visible');

                //make extra assets visible
                $tracklist = $('#tna-tracklist');
                $tracklist.css('visibility', 'visible');

                $title = $('#tna-title');
                $title.css('visibility', 'visible');

                $dude = $('#tna-dude');
                $dude.css('visibility', 'visible');

                $kiki = $('#tna-kiki');
                $kiki.css('visibility', 'visible');
                break;
        }


    });

    $('.flip-image').on('mouseleave', function () {
        $('.flip-image').each(function () {
            const id = this.id;
            gsap.to(this, {
                scale: 1,
                x: defaultOffsets[id],
                zIndex: 1,
                duration: 0.3,
                ease: "power2.out"
            });

            $description = $('#description');
            $description.attr('visibility', 'hidden');
            $description.text('');

            $title = $('#title');
            $title.attr('visibility', 'hidden');
            $title.text('');

            $icon = $('#album-forward-button');
            $icon.css('visibility', 'hidden');

            //ine
            $ine_tracklist = $('#ine-tracklist');
            $ine_tracklist.css('visibility', 'hidden');

            $ine_title = $('#ine-title');
            $ine_title.css('visibility', 'hidden');

            $eyeclosed = $('#ine-eyeclosed');
            $eyeclosed.css('visibility', 'hidden');

            $eyeopen = $('#ine-eyeopen');
            $eyeopen.css('visibility', 'hidden');

            //aa
            $aa_tracklist = $('#aa-tracklist');
            $aa_tracklist.css('visibility', 'hidden');

            $aa_title = $('#aa-title');
            $aa_title.css('visibility', 'hidden');

            $lightning = $('#aa-lightning');
            $lightning.css('visibility', 'hidden');

            $heart = $('#aa-heart');
            $heart.css('visibility', 'hidden');

            //tna
            $tna_tracklist = $('#tna-tracklist');
            $tna_tracklist.css('visibility', 'hidden');

            $tna_title = $('#tna-title');
            $tna_title.css('visibility', 'hidden');

            $dude = $('#tna-dude');
            $dude.css('visibility', 'hidden');

            $kiki = $('#tna-kiki');
            $kiki.css('visibility', 'hidden');

        });
    });

    $('.flip-image').each(function () {
        gsap.to(this, {
            y: -20,
            duration: 2.5,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true,
            delay: Math.random() * 2
        });

    });
});
