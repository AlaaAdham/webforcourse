TweenMax.defaultEase = Linear.easeOut;

new fullpage("#fullpage", {
  //options here
  navigation: true,
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

