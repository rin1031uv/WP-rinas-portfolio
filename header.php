<!DOCTYPE html>
<!--言語設定を自動的に出力-->
<html lang="<?php language_attributes(); ?>">
<head>  
  <meta charset="utf-8">
<!--viewportの設定-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="portfolio">
<!--google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;500;600;700&display=swap" rel="stylesheet">
<!--adobe font-->
<script>
  (function(d) {
    var config = {
      kitId: 'gxi4lun',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!--WordPressのテーマに含める関数。admin_barや必要となるソースの出力などを行う-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  

  <header class="l-header">
    <div class="l-header__container-primary">
      <h1 class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"></a>
      </h1>
        <!--▼▼svgボタン▼▼-->
        <button class="c-header__hamburger-button-svg" id="c-header__hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 51.8" height="51.8" width="54">
            <g class="nc-int-icon js-nc-int-icon nc-int-icon-rotate">
              <g class="nc-int-icon-a">
                <defs>
                  <style>
                    .cls-1 {
                      letter-spacing: -.04em;
                    }
            
                    .cls-2 {
                      font-family: Delaney-Semibold, Delaney;
                      font-size: 10px;
                      font-weight: 600;
                    }
              
                    .cls-2, .cls-3 {
                      fill: #0f2635;
                    }
              
                    .cls-3 {
                      stroke-width: 0px;
                    }
              
                    .cls-4 {
                      letter-spacing: -.06em;
                    }
              
                    .cls-5 {
                      letter-spacing: -.02em;
                    }
                  </style>
                </defs>
                <path class="cls-3" d="M0,14.41c8.84-1.2,18.08-1.42,27-1.5,9.02.04,18.03.31,27,1.5-8.97,1.19-17.98,1.46-27,1.5-8.92-.08-18.15-.3-27-1.5h0Z"></path>
                <path class="cls-3" d="M0,50.3c8.84-1.2,18.08-1.42,27-1.5,9.02.04,18.03.31,27,1.5-8.97,1.19-17.98,1.46-27,1.5-8.92-.08-18.15-.3-27-1.5h0Z"></path>
                <text class="cls-2" transform="translate(4.22 34.72)">
                  <tspan class="cls-4" x="0" y="0">M</tspan>
                  <tspan class="cls-1" x="12.44" y="0">E</tspan>
                  <tspan class="cls-5" x="21.55" y="0">N</tspan>
                  <tspan x="32.23" y="0">U</tspan>
                </text>
              </g>
              <g class="nc-int-icon-b">
                  <defs></defs>
                <g>
                  <path class="cls-1" d="M46.09,51.45c-7.1-5.4-13.79-11.78-20.15-18.03-6.35-6.41-12.53-12.96-18.03-20.15,7.19,5.5,13.74,11.68,20.15,18.03,6.26,6.36,12.62,13.05,18.03,20.15h0Z"></path>
                  <path class="cls-1" d="M7.91,51.45c5.4-7.1,11.78-13.79,18.03-20.15,6.41-6.35,12.96-12.53,20.15-18.03-5.5,7.19-11.68,13.74-18.03,20.15-6.36,6.26-13.05,12.62-20.15,18.03h0Z"></path>
                </g>
                <text class="cls-2" transform="translate(3.52 34.95)">
                  <tspan x="0" y="0">CLOSE</tspan>
                </text>
              </g>
            </g>
          <script>function initIntIcon(i){if(i.classList.contains("js-nc-int-icon-loaded")) return;i.classList.add("js-nc-int-icon-loaded");i.closest("svg").addEventListener("click",function(n){i.classList.toggle("nc-int-icon-state-b")});};var intIcons=document.getElementsByClassName("js-nc-int-icon");for(var i=0;intIcons.length>i;i++){initIntIcon(intIcons[i]);}</script><style>.nc-int-icon-rotate{--animation-duration:0.4s;}.nc-int-icon{position:relative;}.nc-int-icon-b{position: absolute;top: calc(50% - 0.5em);left: calc(50% - 0.5em);opacity: 0;}.nc-int-icon-rotate .nc-int-icon-a,.nc-int-icon-rotate .nc-int-icon-b{transition: opacity 0s calc(var(--animation-duration)/2), transform var(--animation-duration); transform-origin: center center;}.nc-int-icon-rotate .nc-int-icon-b{transform: rotate(90deg) scale(0.6);}.nc-int-icon-state-b .nc-int-icon-a{opacity: 0;}.nc-int-icon-state-b .nc-int-icon-b{opacity: 1;}.nc-int-icon-rotate.nc-int-icon-state-b .nc-int-icon-a{transform: rotate(-90deg) scale(0.6);}.nc-int-icon-rotate.nc-int-icon-state-b .nc-int-icon-b{transform: rotate(0);}</style></svg>
        </button>
      <!--▲▲svgボタン▲▲-->  
<!--▼▼nav-menu▼▼-->
<div class="l-header__container-primary p-header__container">
  <div class="c-header__nav-background-sp"></div>
  <nav class="c-header__nav p-header__nav-front-page">
  <?php wp_nav_menu(
      array (
        'theme_location' => 'main-menu',
      )
    );
  ?>
  </nav>
</div>
<!--▲▲nav-menu▲▲-->
  </header>
<!--▲▲header▲▲-->