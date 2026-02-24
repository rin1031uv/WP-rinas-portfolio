
//スライドメニュー
const btn = document.querySelector('#c-header__hamburger-btn');

jQuery(document).ready(function() {
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
//$(function(){
///alert('動いてます。');
//});




//動作確認用
//$(function(){
  //alert('動いてます。');
  //});

//文字が一文字ずつ表示されるアニメーション▼▼
//本参考ここから

// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
	$('.eachTextAnime').each(function () {
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight) {
			$(this).addClass("appeartext");

		} else {
			$(this).removeClass("appeartext");
		}
	});
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	//spanタグを追加する
	var element = $(".eachTextAnime");
	element.each(function () {
		var text = $(this).text();
		var textbox = "";
		text.split('').forEach(function (t, i) {
			if (t !== " ") {
				if (i < 10) {
					textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
				} else {
					var n = i / 10;
					textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
				}

			} else {
				textbox += t;
			}
		});
		$(this).html(textbox);
	});

	EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

//文字が一文字ずつ表示されるアニメーション▲▲
//本参考ここまで





//動作確認用
//$(function(){
  //alert('動作しています。');
//});

//===masonry(カード並び)===
//imagesLoadedの読み込み
jQuery(function($){
  $('.c-card__wrapper-masonry-works').imagesLoaded(function(){
    //$('親要素')を指定
    $('.c-card__wrapper-masonry-works').masonry({
      itemSelector: '.c-card-works__primary-container',
      columnWidth:266,
      fitWidth: true,
      gutter: 24,
      originLeft: true
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
    originLeft: true
  });
})


//動作確認用
//$(function(){
  //alert('カード並びです');
//});


//GSAP
//強みエリアのアニメーション
//文字の表示

gsap.registerPlugin(ScrollTrigger);

const mm = gsap.matchMedia();

function setupStrengthAnim({ radius, scaleList }) {
  const triggerSel = ".c-about__strength-wrapper";

  const circles = gsap.utils.toArray([
    ".p-about__circle-first",
    ".p-about__circle-second",
    ".p-about__circle-third",
    ".p-about__circle-fourth",
    ".p-about__circle-fifth",
  ]);

  const titles = gsap.utils.toArray([
    ".circle-title-first",
    ".circle-title-second",
    ".circle-title-third",
    ".circle-title-fourth",
    ".circle-title-fifth",
  ]);

  // 梅の5枚配置：上から時計回り（72°刻み）
  const anglesDeg = [-90, -18, 54, 126, 198];

  // ★ここが超重要：あなたの「円弧SVGの切れ目」が向いている基準角度
  // 例）SVGの切れ目が「右（0°）」を向いているなら 0
  //     「上（-90°）」を向いているなら -90
  // ここは1回合わせればOK！
  const BASE_GAP_DEG = -90; // ★切れ目が「上」のSVG
  const initialRots = [-30, 50, 140, -120, 95]; // 好みで微調整OK（安定する）


// ★強みエリア内だけから取る（混ざり防止）
const root = document.querySelector(triggerSel);
const q = gsap.utils.selector(root);

// h4+pのボックス（section）取得（5個だけ）
const textBlocks = q(".p-about__circle-content-container section").slice(0, 5);

// 初期状態：非表示＋少し下
gsap.set(textBlocks, { opacity: 0, y: 12 });


  // 初期：波紋（全て中心）
  gsap.set(circles, {
  x: 0,
  y: 0,
  rotation: (i) => initialRots[i], // ★中央はバラバラ向き
  transformOrigin: "50% 50%"
  });

  gsap.set(titles,  { x: 0, y: 0, rotation: 0, opacity: 0, transformOrigin: "50% 50%" });

  // テキスト表示（いまのロジックを踏襲）
  gsap.set(".p-about__circle-title", { opacity: 1 });
  gsap.set(".p-about__circle-content-container", { opacity: 0 });

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: triggerSel,
      start: "top center",
      toggleActions: "play none reverse none",
    }
  });


  // ① 波紋：中心でサイズだけ違う同心円に（ふわっと出る）
  tl.to(".p-about__circle-title", { opacity: 0, duration: 0.6 }, 0.2)
    .to(".p-about__circle-content-container", { opacity: 1, duration: 0.6 }, 0.2);

  circles.forEach((el, i) => {
    const s = scaleList?.[i] ?? 1;
    tl.fromTo(el,
      { scale: 0.2, opacity: 0 },
      { scale: s, opacity: 0.2, duration: 0.9, ease: "power2.out" },
      0.0
    );
  });

// ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// ★ ここに追加する！！！（回転の収束ステップ）
// ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
circles.forEach((el, i) => {
  const outwardDeg = anglesDeg[i];
  const rot = outwardDeg - BASE_GAP_DEG;

  tl.to(el, {
    rotation: rot,     // まず外向きに向けて“収束”
    scale: 0.8,          // ★全員同じ大きさに収束（ここが今回の肝！）
    opacity: 0.35,  // 薄くする
    duration: 0.6,
    ease: "power2.out",
  }, 0.8);
});

  // ② 梅：くるくるしながら広がる + 切れ目を外側へ
  circles.forEach((el, i) => {
    const rad = anglesDeg[i] * Math.PI / 180;
    const x = Math.cos(rad) * radius;
    const y = Math.sin(rad) * radius;

    // 外側方向は「中心→配置先」の向き = anglesDeg[i]
    // 切れ目(=SVGのgap方向)を外へ向けたいので
    // rotation = 外向き角 - BASE_GAP_DEG
    const outwardDeg = anglesDeg[i];
    const rot = outwardDeg - BASE_GAP_DEG;

    tl.to(el, {
      x, y,
      rotation: rot + 360, // 回転しながら広がる演出（+360は好みで増減OK）
      opacity: 0.3,   // 薄く
      duration: 1.6,
      ease: "power2.inOut",
    }, 1.0); // 1秒後に開始
  });

// ③ h5タイトル
const titleOffset = 40;
const titleRadius = radius + titleOffset;

titles.forEach((el, i) => {
  const rad = anglesDeg[i] * Math.PI / 180;
  const x = Math.cos(rad) * titleRadius;
  const y = Math.sin(rad) * titleRadius;

  tl.to(el, {
    x, y,
    xPercent: -50,
    yPercent: -50,
    opacity: 1,
    duration: 1.0,
    ease: "power2.out",
    rotation: 0,
  }, 1.3);
});

// ===== 梅＆h5 →（待つ）→ 消える → h4+p 出現 =====
const bloomStart = 1.0;
const bloomDur   = 1.6;
const bloomEnd   = bloomStart + bloomDur;

// ★h4+p だけ外側にしたいならここを増やす
const textRadius = radius + 110;

tl.to({}, { duration: 1.5 }, bloomEnd);

tl.to(circles, { opacity: 0, duration: 0.9, ease: "power2.out" }, ">");
tl.to(titles,  { opacity: 0, duration: 0.9, ease: "power2.out" }, "<");

tl.set(textBlocks, {
  x: (i) => Math.cos((anglesDeg[i] * Math.PI) / 180) * textRadius,
  y: (i) => Math.sin((anglesDeg[i] * Math.PI) / 180) * textRadius,
  xPercent: -50,
  yPercent: -50,
  opacity: 0,
}, ">");

tl.to(textBlocks, {
  opacity: 1,
  y: (i) => Math.sin((anglesDeg[i] * Math.PI) / 180) * textRadius,
  duration: 1.0,
  stagger: 0.12,
  ease: "power2.out",
}, "<");

  return tl;
}

// -----------------------
// 304〜1439px
// -----------------------
mm.add("(min-width: 304px) and (max-width: 1439px)", () => {
  setupStrengthAnim({
    radius: 95,
    scaleList: [1.000, 0.824, 0.643, 0.446, 0.536],
  });
});


// -----------------------
// 1440px以上
// -----------------------
mm.add("(min-width: 1440px)", () => {
  setupStrengthAnim({
    radius: 125,
    scaleList: [1.05, 0.865, 0.675, 0.468, 0.563],
  });
});


//動作確認用
//$(function(){
  //alert('くるくるします。');
//});

//横スクロール
const wrapper = document.querySelector(".c-about__history-content-wrapper");
const slides = gsap.utils.toArray(".p-about__history-js-wrapper");
//コンテントの幅を取得
const wrapperWidth = wrapper.offsetWidth;


/*
==============================
page-about.php
==============================
*/
//横スクロール設定
gsap.to(slides, {
  xPercent: -115 * (slides.length - 1), //-x軸方向に移動
  ease: "none", //easingの設定
  scrollTrigger: {
    trigger: ".c-about__history-content-wrapper", //アニメーション対象となる要素
    pin: true, //要素を固定する
    scrub: 3, //スクロールとアニメーションを同期させる。数値で秒数の設定に
    start: "top 5%", 
    end: () => "+=" + wrapperWidth, //アニメーションの終了タイミング
    anticipatePin: 1,
    invalidateOnRefresh: true,
  },
});

