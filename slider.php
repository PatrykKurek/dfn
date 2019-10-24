    <!-- #region Jssor Slider Begin --> 
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jssor.slider.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}
        
        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="./loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:600px;overflow:hidden;">
            <div>
                <img data-u="image" src="./img/y1.jpg" />
            </div>
            <div>
                <img data-u="image" src="./img/y2.jpg" />
            </div>
            <div>
                <img data-u="image" src="./img/y3.jpg" />
            </div>
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>  
    </div>
    
            <img class="licznik" id="dni" />
            <img class="licznik" id="godziny" />
            <img class="licznik" id="minuty"  />     
            <img class="licznik" id="sekundy" />
               
            <img class="licznik" src="obrazy/dni.png" id="dni1"/>
            <img class="licznik" src="obrazy/godziny.png" id="godziny1"/>
            <img class="licznik" src="obrazy/minuty.png" id="minuty1"/>
            <img class="licznik" src="obrazy/sekundy.png" id="sekundy1"/>
            <script src="time.js"></script>
    
    <!-- #endregion Jssor Slider End -->
