<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="<?php echo base_url();?>css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/global.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/custom-theme/jquery-ui-1.8.23.custom.css">
    <script src="<?php echo base_url();?>js/coin-slider.js"/>
    <script> </script>
    
<script src="<?php echo base_url();?>js/jquery-1.8.0.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-ui-1.8.23.custom.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '<?php echo base_url();?>ima/slide-galeria/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
                        
                        $('#tabs').tabs();
		});
	</script>

</head>

<body>

<div id="wrapper">
<div id="header">
<img class="logo" src="<?php echo base_url();?>ima/layout/logo.png" width="333" height="91" alt="Contraparte" />
<div class="bannerheader"><img src="<?php echo base_url();?>ima/banners/header/banner.jpg" width="653" height="94" /></div>
<div id="menutop">
  <ul>
      <li><a href="#">Contáctenos </a></li>
      <li> <a href="#">Inicio</a></li>
      <li class="azul12" style="border:0px; border-left:1px solid #008fc5"> 30°C</li>
      <li class="azul12"><?php
      setlocale(LC_ALL,"es_ES");
                            echo strftime(" %d  %B , %Y");?>
          </li>
  </ul>
</div><!--/menutop -->
</div><!--/header -->