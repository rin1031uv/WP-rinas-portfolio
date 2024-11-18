
// 同じ日付で「2回目」以降のアクセスなら「ローディング画面非表示」にする設定

  var flg = null;
  const checkAccess = function () {
	// sessionStorageの値を判定
	if (localStorage.getItem('access_flg') === 'true') {
		// 2回目以降
		flg = 1;
	} else {
		// 1回目
		localStorage.setItem('access_flg', 'true');
		flg = 0
	}
	return flg;
};

const isFirstVisit = !checkAccess();
const splashloader = document.getElementById("splash");
if (isFirstVisit) {
  document.body.style.position = 'fixed'; // ローディング中、スクロールできないようにする
  document.body.style.overflow = 'hidden'; // ローディング中はスクロール無効
//本参考（ここから）
//テキストのカウントアップ+バーの設定
// progressbar.js@1.0.0 version is used
//Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
const container = document.getElementById("progress-bar-container");
const bar = new ProgressBar.Line(container, {//id名を指定
 strokeWidth: 0.5,//進捗ゲージの太さ
 easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
 duration: 1400,//時間指定(1000＝1秒)
 color: '#8796A9',//進捗ゲージのカラー
 trailColor: '#eee',//ゲージベースの線のカラー
 trailWidth: 0.5,//ゲージベースの線の太さ
 svgStyle: {width: '100%', height: '100%'},
 text: {
   style: {
     // Text color.
     // Default: same as stroke color (options.color)
     color: '#8796A9',
     position: 'absolute',
     //right: '0',
  left: '50%',
  //top: '30%',
     //transform: 'translate(-50%, -50%)', //線の中央配置
     padding: 0,
     margin: '-60px 0 0 0',//バーより上に配置
     transform: null
   },
   autoStyleContainer: false
 },
 from: {color: '#FFEA82'},
 to: {color: '#ED6A5A'},
 step: (state, bar) => {
   bar.setText(Math.round(bar.value() * 100) + ' %');
 }
});

//アニメーションスタート
bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
$("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
  // ローディング終了後にスクロールを有効化 + positionを戻す
  document.body.style.position = ''; // positionを元に戻す（staticにする）
  document.body.style.overflow = ''; // スクロールを元に戻す
});
 //本参考（ここまで）
} else {
	// 2回目アクセスの処理
	// 読み込ませないようにすぐ要素を取り除く
	splashloader.remove();
  // スクロールを元に戻す
  document.body.style.position = ''; // positionを元に戻す（staticにする）
  document.body.style.overflow = ''; // スクロールを元に戻す
}
// 初回アクセスの場合はスクロール無効化
//if ($i === 0) {
  //document.body.style.position = 'fixed'; // ローディング中、スクロールできないようにする
  //document.body.style.overflow = 'hidden'; // ローディング中はスクロール無効
//}
