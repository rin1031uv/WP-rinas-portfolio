//archive-blog
$('.c-card__wrapper-masonry').masonry({
  columnWidth: 250, //必須
  itemSelector: '.c-card__primary-container', //必須
  gutter: 24,
  //percentPosition: true,
  fitWidth: true,
  resize: true,
});

//動作確認用
$(function(){
  alert('動作しています。');
});

//archive-works
//imagesLoadedの読み込み
$('.c-card__wrapper-masonry-works').imagesLoaded(function(){
  //$('親要素')を指定
  $('.c-card__wrapper-masonry-works').masonry({
    itemSelector: '.c-card-works__primary-container',
    columnWidth:266,
    fitWidth: true,
    gutter: 24,
    //percentPosition: true,
    //isFitWidth: true
  });
});

//GSAP
//強みエリアのアニメーション
//文字の表示
let mm = gsap.matchMedia();

  //スマホからPC手前（1440未満）まで
  mm.add("(min-width: 304px) and (max-width: 1439px)", () => {
    gsap.to(".p-about__circle-title", {
      scrollTrigger: {
        trigger: ".c-about__strength-wrapper",
        toggleActions: "play none reverse none"
      },
      delay: 2,
      opacity: 0
    })
    
    gsap.to(".p-about__circle-content-container", {
      scrollTrigger: {
        trigger: ".p-about__circle-primary-container",
        toggleActions: "play none reverse none"
      },
      delay: 2,
      opacity: 1
    })
    
    gsap.to(".circle-in-title", {
      scrollTrigger: {
        trigger: ".p-about__circle-primary-container",
        toggleActions: "play none reverse none"
      },
      delay: 2,
      opacity: 1
    })
    //強みエリアくるくる
    gsap.to(".p-about__circle-first", {
      scrollTrigger: {
        trigger: ".p-about__circle-first",
        start: "top top",
        toggleActions: "play none reverse none"
      },
      x:80,
      y:80,
      rotation: 90,
      duration: 3,
      scale: 0.559
    });
    
    gsap.to(".p-about__circle-second", {
      scrollTrigger: {
        trigger: ".p-about__circle-second",
        start: "top top",
        toggleActions: "play none reverse none"
      },
      x:-80,
      y:-80,
      rotation: 90,
      duration: 3,
      scale: 0.678
    });
    
    gsap.to(".p-about__circle-third", {
      scrollTrigger: {
        trigger: ".p-about__circle-third",
        start: "top top",
        toggleActions: "play none reverse none"
      },
      x:80,
      y:-80,
      rotation: 90,
      duration: 3,
      scale: 0.870
    });
    
    gsap.to(".p-about__circle-fourth", {
      scrollTrigger: {
        trigger: ".p-about__circle-fourth",
        start: "top top",
        toggleActions: "play none reverse none"
      },
      x:-80,
      y:80,
      rotation: 90,
      duration: 3,
      scale: 1.253
  });
});
//PC 1440px以上の時
mm.add("(min-width: 1440px)", () => {
  gsap.to(".p-about__circle-title", {
    scrollTrigger: {
      trigger: ".c-about__strength-wrapper",
      toggleActions: "play none reverse none"
    },
    delay: 2,
    opacity: 0
  })
  
  gsap.to(".p-about__circle-content-container", {
    scrollTrigger: {
      trigger: ".c-about__strength-wrapper",
      toggleActions: "play none reverse none"
    },
    delay: 2,
    opacity: 1
  })
  
  gsap.to(".circle-in-title", {
    scrollTrigger: {
      trigger: ".c-about__strength-wrapper",
      toggleActions: "play none reverse none"
    },
    delay: 2,
    opacity: 1
  })
  
  //強みエリアくるくる
  gsap.to(".p-about__circle-first", {
    scrollTrigger: {
      trigger: ".p-about__circle-first",
      start: "top top",
      toggleActions: "play none reverse none"
    },
    x:100,
    y:100,
    rotation: 90,
    duration: 3,
    scale: 0.699
  });
  
  gsap.to(".p-about__circle-second", {
    scrollTrigger: {
      trigger: ".p-about__circle-second",
      start: "top top",
      toggleActions: "play none reverse none"
    },
    x:-100,
    y:-100,
    rotation: 90,
    duration: 3,
    scale: 0.848
  });
  
  gsap.to(".p-about__circle-third", {
    scrollTrigger: {
      trigger: ".p-about__circle-third",
      start: "top top",
      toggleActions: "play none reverse none"
    },
    x:100,
    y:-100,
    rotation: 90,
    duration: 3,
    scale: 1.087
  });
  
  gsap.to(".p-about__circle-fourth", {
    scrollTrigger: {
      trigger: ".p-about__circle-fourth",
      start: "top top",
      toggleActions: "play none reverse none"
    },
    x:-100,
    y:100,
    rotation: 90,
    duration: 3,
    scale: 1.566
  });
});

//横スクロール
const wrapper = document.querySelector(".c-about__history-content-wrapper");
const slides = gsap.utils.toArray(".p-about__history-js-wrapper");
//コンテントの幅を取得
const wrapperWidth = wrapper.offsetWidth;

//横スクロール設定
gsap.to(slides, {
  xPercent: -100 * (slides.length - 1), //-x軸方向に移動
  ease: "none",
  scrollTrigger: {
    trigger: ".c-about__history-wrapper",
    pin: true,
    scrub: 3,
    start: "top top",
    end: () => "+=" + wrapperWidth,
    anticipatePin: 1,
    invalidateOnRefresh: true,
  },

});


//動作確認用
$(function(){
  alert('動作しています。');
});

