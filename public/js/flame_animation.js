jQuery(document).ready(function( $ ) {
    
 var picPaths = ['/SLIM/public/img/flames2test1.jpg','/SLIM/public/img/flames2test2.jpg'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,200);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }

});
