//album covers floating (why are we doing this?)

$(document).ready(function () {
    $('.floating').each(function () {
        // Animate each element with slight random motion
        gsap.to(this, {
            x: () => 8,  // random between -10 and 10
            y: () => 8,
            duration: () => 0.5 + Math.random(), // 2 to 3 seconds
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true
        });
    });
});