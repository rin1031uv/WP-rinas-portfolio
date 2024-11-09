//本参考（ここから）
//テキストのカウントアップ+バーの設定
// progressbar.js@1.0.0 version is used
//Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var bar = new ProgressBar.Line(container, {//id名を指定
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
});  
 //本参考（ここまで）