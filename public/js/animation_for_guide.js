$('#guide_msg .letters').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter webfont' data-letter='$&'>$&</span>"));
  });
  
anime.timeline(
    {loop: false}
    )
    .add({
        targets: '#guide_msg .letter',
        scale: {
        value: [0, 1],
        duration: 950
        },
        translateY : [function() { return anime.random(-360, 360); }, 0],
        translateX : [function() { return anime.random(-360, 0); }, 0],
        opacity: [0, 1],
        filter: {
        value: ["blur(15px)", "blur(0px)"],
        duration: 2000
        },
        duration: 10000,
        elasticity: 300,
        delay: function(el, i) {
        return 35 * (i+1)
        },
        update: function(anim) {
        // console.log(anim.currentTime + 'ms'); // Get current animation time with `myAnimation.currentTime`, return value in ms.
        // console.log(anim.progress + '%'); // Get current animation progress with `myAnimation.progress`, return value in %
        },
        begin: function(anim, target) {
        console.log(anim.began); // true after 1000ms
        }
    });
