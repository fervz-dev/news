<?php



include("funciones-sistema.php");

putenv("TZ=America/Mexico_City");

$bd="wwwcont_videos";



include("nxs_auth.inc.php");



  

$aut = new nxs_auth();



if (!$aut->revisar()){



	header("Location: index.php?msg=3");



}





$fechan=date("Y-m-d"); 





if ($_POST['Submituno']) {



      $sql=" INSERT INTO `wwwcont_videos`.`videosYT` (

`id` ,

`titulo` ,

`descripcion` ,

`descripcion_video` ,

`descripcion_mediana` ,

`descripcion_peque` ,

`status` ,

`fecha` ,

`hora` ,

`prioridad` 

)

VALUES (

'' , '".$_POST['titulo']."', '".$_POST['contenido']."', '".$_POST['descripcion_video']."', '" .$_POST['descripcion_mediana']."', '"  .$_POST['contenido_peque']."', '".$_POST['activo']."', '".$_POST['fecha']."', '".date("H:i:s")."', '".$_POST['destacado']."'

);";



         mysql_db_query($bd, $sql) or die("Error en Mysql");



         header("Location: videos.php?msg=nuevo");



}//if submit



arriba();



?>



<script language="JavaScript" src="../calendar/control_fecha.js" type="text/javascript"></script>



<script language="JavaScript" type="text/javascript" src="openwysiwyg/wysiwyg1.js"></script> 



<link href="estilos.css" rel="stylesheet" type="text/css" />







<style type="text/css">



<!--



.style2 {



	font-size: 12px;



	font-weight: bold;



	color: #194ba9;



}



.style3 {font-size: 12px}



.style4 {color: #194ba9}



.style6 {font-family: Verdana}



.style7 {font-size: 12px; font-weight: bold; color: #194ba9; font-family: Verdana; }



.style9 {



	font-family: Verdana;



	font-size: 11px;



	font-weight: bold;



	color: #FF0000;



}



.style12 {



	font-size: 24px;



	font-weight: bold;



	color: #194ba9;



}



.style13 {color: #194ba9; font-size: 12px;}



.style15 {color: #194ba9; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }



.style17 {



	font-family: Verdana;



	font-size: 11px;



	font-weight: bold;



}



.style18 {font-size: 11px}

body {

	background-color: #FFFFFF;

}



-->



</style>



<table width="100%" border="0" cellspacing="0" cellpadding="0">



  <tr>



    <td align="center"><table width="600" border="0" cellpadding="0" cellspacing="10" >



      <tr>



        <td>



        <form action="<?php echo $_SERVER['sitios/poblanerias/juntos/noticias/PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="formulario" id="formulario" onsubmit="return validar()" >



        <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">



              <tr>



                <td><img src="sitios/poblanerias/imagenes/spacer.gif" width="1" height="8" /></td>



              </tr>



              <tr>



                <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">



                    <tr>



                      <td align="center" valign="top"><div align="center">



                          <table width="100%" border="0" cellspacing="0" cellpadding="0">



                            



                            <tr>



                              <td colspan="3" align="left" class="arial-30-azul style6 style12">Nuevo Video </td>

                            </tr>



                            <tr>



                              <td colspan="3" align="left" class="tahoma-11-naranja"><p>&nbsp;</p>

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td class="tahoma-11-naranja"><p>Titulo:                                    &nbsp;</p></td>

                                    <td><input name="titulo" type="text" class="tahoma-11-gris-claro" id="lugar" value="" size="40" /></td>

                                  </tr>

								 

								  <tr>

                                    <td class="tahoma-11-naranja"><p>Contenido :                                    &nbsp;</p></td>

                                    <td class="tahoma-11-naranja"><textarea name="contenido" cols="80" rows="7" class="tahoma-11-gris-claro" id="contenido"></textarea><br /> Tamaño width="280" height="226"</td>

                                  </tr>
                                  
                                   <tr>

                                      <td class="tahoma-11-naranja"><p>Descripci&oacute;n del video:                                    &nbsp;</p></td>

                                    <td class="tahoma-11-naranja"><textarea name="descripcion_video" cols="80" rows="7" class="tahoma-11-gris-claro" id="contenido"></textarea><br /> 
                                        </td>

                                  </tr>
                                  
                                    <tr>
                                  <td class="tahoma-11-naranja"><p>Contenido Mediano:                                    &nbsp;</p></td>

                                    <td class="tahoma-11-naranja"><textarea name="descripcion_mediana" cols="80" rows="7" class="tahoma-11-gris-claro" id="contenido"></textarea><br /> 
                                        Tama&ntilde;o adecuado: width="333" height="264"</td>
                                  </tr>
                                  <tr>

                                    <td class="tahoma-11-naranja"><p>Contenido Peque&ntilde;o:                                    &nbsp;</p></td>

                                    <td class="tahoma-11-naranja"><textarea name="contenido_peque" cols="80" rows="7" id="tahoma-11-gris-claro" class="contenido"></textarea><br /> 

                                        Tama&ntilde;o adecuado: width="109" height="76"</td>

                                  </tr>

                                  <tr>

                                    <td class="tahoma-11-naranja">Fecha:</td>

                                    <td><input name="BfechaI_evento" type="button" class="tahoma-11-vdeobscuro" onclick='popUpCalendar(this, formulario.fecha, &quot;yyyy-mm-dd&quot;)' value='Calendario' /> <input name="fecha" class="tahoma-11-vdeobscuro" value="<?php echo $fechan; ?>" onkeyup="mascara(this,'-',patron,true)"  style="width:160px" /></td>

                                  </tr>
                                  
                                  

								  <tr>

                                    <td class="tahoma-11-naranja">Activo:</td>

                                    <td><input type="checkbox" name="activo" value="1" checked="checked" /></td>

								  </tr>

								  <tr>

                                    <td class="tahoma-11-naranja">Destacado:</td>

                                    <td><input type="checkbox" name="destacado" value="1" /></td>

								  </tr>

                                </table>

                                </td>

                            </tr>



                            <tr>



                              <td width="152" align="left">&nbsp;</td>



                              <td width="237" colspan="2" align="left"><input name="Submituno" type="submit" class="style7" value="Envia" /></td>

                            </tr>



                            <tr>



                              <td colspan="3" align="center" class="tahoma-11-azul">&nbsp;</td>

                            </tr>



						



                            <tr>



                              <td colspan="3" align="center" class="tahoma-11-azul">&nbsp;</td>

                            </tr>

                          </table>



                      </div></td>



                    </tr>



                </table></td>



              </tr>



            



        </table></form></td>



      </tr>



      <tr>



        <td></td>



      </tr>



    </table></td>



  </tr>



</table>



<?php







abajo();



if($_GET['msg']=="nuevo"){$msg="Se inserto el registro correctamente"; }

if ($msg){echo "<script language='javascript'> alert(\"$msg\");</script>";}



?>











<script type="text/javascript" language="javascript">



var patron = new Array(4,2,2);



function mascara(d,sep,pat,nums){



if(d.valant != d.value){



	val = d.value;



	largo = val.length;



	val = val.split(sep);



	val2 = '';



	for(r=0;r<val.length;r++){



		val2 += val[r];



	}



	if(nums){



		for(z=0;z<val2.length;z++){



			if(isNaN(val2.charAt(z))){



				letra = new RegExp(val2.charAt(z),"g");



				val2 = val2.replace(letra,"");



			}



		}



	}



	val = '';



	val3 = new Array();



	for(s=0; s<pat.length; s++){



		val3[s] = val2.substring(0,pat[s]);



		val2 = val2.substr(pat[s]);



	}



	for(q=0;q<val3.length; q++){



		if(q ==0){



			val = val3[q];



		}



		else{



			if(val3[q] != ""){



				val += sep + val3[q];



				}



		}



	}



	d.value = val;



	d.valant = val;



	}



} 



function validar(){



      if (document.formulario.titulo.value==''){



         alert('Debe escribir un titulo al evento');



         return false;     



     }

      if (document.formulario.contenido.value==''){



         alert('Debe escribir un contenido al evento');



         return false;     



     }

      if (document.formulario.fecha.value==''){



         alert('Debe escribir la fecha del evento');



         return false;     



     }

	return true;	



}

</script>







