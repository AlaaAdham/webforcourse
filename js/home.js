TweenMax.defaultEase = Linear.easeOut;

new fullpage("#fullpage", {
  //options here
  autoScrolling: false,
  navigation: false,
  onLeave: (origin, destination, direction) => {
    const section = destination.item;
    const tl = new TimelineMax({ delay: 1 });
    if (destination.index === 1) {
      const pic = document.querySelectorAll("#pic");
      const description = document.querySelector(".ourstory");
      tl.fromTo(pic, 1.5, { x: "-100%" }, { x: "5%"  })
        .fromTo(
          description,
          0.5,
          { opacity: 0, y: "50" },
          { y: "0", opacity: 1 }
        );
    }
  }
});
function autoPlay(){
    var myVideo = document.getElementById('c73d1fa3-afab-6d19-20f7-0464e5fff552-video');
      myVideo.loop = true;
}
//...
myVideo.play();