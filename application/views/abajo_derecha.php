<?php

$con1=$this->load->database("banners",true);
  
$seccion= 15;$ancho=296 ; $alto=95 ;$ubicacion=6; $interno=0;
			
			if ($interno==1){
			$sql=$con1->query("SELECT b.id_banner,b.url_activo,b.url,i.nombre_imagen FROM Banners b, Imagenes i, Ubicaciones u WHERE b.id_imagenInt=i.id_imagen AND b.id_seccion=".$seccion." AND b.id_ubicacion=".$ubicacion." AND b.activo_banner=1");
			//echo "<script type=\"text/JavaScript\"> alert(".$sql.") <\script>";
			}
			else{
			$sql=$con1->query("SELECT b.id_banner,b.url_activo,b.url,i.nombre_imagen FROM Banners b, Imagenes i, Ubicaciones u WHERE b.id_imagen=i.id_imagen AND b.id_seccion=".$seccion." AND b.id_ubicacion=".$ubicacion." AND b.activo_banner=1");
			//echo "<script type=\"text/JavaScript\"> alert(".$sql.") <\script>";
			}
			$banner=$sql->result_array();
			
			if(count($banner)<=0){
				$html="&nbsp;";
			}
			else{
				$temp=explode(".",$banner[0]['nombre_imagen']);
				if($temp[1]=="swf"){
					$html=flash6($banner[0]['nombre_imagen'],$ancho,$alto);
				}
				else{
					if($banner[0]['url_activo']==1 && $banner[0]['url']!=""){
						$link="<a href='visita-patrocinador.php?banner=".$banner[0]['id_banner']."'>";
					}
					$html="<img border='0' src=\"http://www.contraparteinformativa.com/banners/imagenes/banners/".$banner[0]['nombre_imagen']."\" width=\"".$ancho."\" height=\"".$alto."\" /></a>";
				}
				
			}
			echo $html;


function flash6($banner,$ancho,$alto){
	$html='<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  WIDTH="'.$ancho.'" HEIGHT="'.$alto.'" id="base-flash" ALIGN=""> <PARAM NAME=movie VALUE="http://www.contraparteinformativa.com/banners/imagenes/banners/'.$banner.'"> <PARAM NAME=quality VALUE=high><param name="wmode" value="opaque" /> <EMBED src="http://www.contraparteinformativa.com/banners/imagenes/banners/'.$banner.'"  WIDTH="'.$ancho.'" HEIGHT="'.$alto.'" ALIGN="" quality=high NAME="base-flash" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" wmode="opaque"></EMBED></OBJECT>';
	return $html;
}
?>
