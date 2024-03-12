
//スライドメニュー
const btn = document.querySelector('#c-header__hamburger-btn');

$(function() {
  //ハンバーガーメニューのクリックイベント
  //クリックしたら
  $('.js-nc-int-icon').click(function() {
  //クラスが付いていたら
  if($('.c-header__nav').hasClass('c-header__hamburger-background-action')) {
    //ナビ非表示
    $('.c-header__nav').removeClass('c-header__hamburger-background-action');
    //背景色
    $('.c-header__nav-background-sp').removeClass('open');
    $('.c-header__nav-background-sp').addClass('close');
    //menuに戻す
    $(this).removeClass('c-header__hamburger-background-action');
  }else {
    //ナビを表示
    $('.c-header__nav').addClass('c-header__hamburger-background-action');
    //背景色
    $('.c-header__nav-background-sp').addClass('open');
    $('.c-header__nav-background-sp').removeClass('close');
    //ハンバーガーメニューをバツに変更
    $(this).addClass('c-header__hamburger-background-action');
  }
  });
});

//動作確認用
$(function(){
  alert('動いてます。');
});

//===英字タイトルが左から右に表示されるアニメーション
//監視対象が範囲内に現れたら実行する動作
const showtitle = (entries) => {
 //左から右に出現するタイトル
  //ふわっと出現
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
    entry.target.animate (
      {
        opacity: [0, 1],
        filter: ['blur(.4rem)', 'blur(0)'],
        translate: ['0 4rem', 0],
      },
      {
        duration: 2000,
        easing: 'ease',
        fill: 'forwards',
      }
    );
  }
  });
};
//監視ロボットの設定
const titleobserver = new IntersectionObserver (showtitle);
//p-top__slide-in-titleを監視するように指示
const titleElememts = document.querySelectorAll('.js__slide-in');
titleElememts.forEach((titleElement) => {
  titleobserver.observe(titleElement);
});



//動作確認用
$(function(){
  alert('動作しています。');
});

//===masonry(カード並び)===
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
  alert('カード並びです');
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
//===PC 1440px以上の時===
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

//動作確認用
$(function(){
  alert('くるくるします。');
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
    trigger: ".c-about__history-content-wrapper",
    pin: true,
    scrub: 3,
    start: "top 5%",
    end: () => "+=" + wrapperWidth,
    anticipatePin: 1,
    invalidateOnRefresh: true,
  },
});




