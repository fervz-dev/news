<?php
include("funciones-sistema.php");
include("nxs_auth.inc.php");
$aut = new nxs_auth();
if (!$aut->revisar()){
	header("Location: index.php?msg=3");
}
$bd="wwwcont_videos";
/////////////////////////////////////////
if ($_GET['borrar']){
//////////
	//echo "listo para mensaje de borrar";
	$variable=$_GET['borrar']."&status=".$_GET['status'];
	$variable2="cancelar&status=".$_GET['status'];
	$html="<script type=\"text/javascript\">"
	. "if ( window.confirm(\"Desea borrar el video "  . "?\")==true){"
	. "window.location.href=\"" . $_SERVER['PHP_SELF'] . "?borrarYa=" . $variable ."\";"
	. "}else {window.location.href =\"" . $_SERVER['PHP_SELF'] . "?msg=" . $variable2  . "\"" . "}"
	. "</script>";
	echo $html;
}
elseif($_GET['borrarYa']){
	$sql="DELETE FROM videosYT WHERE id=".$_GET['borrarYa']." LIMIT 1";
	mysql_db_query($bd, $sql) or die("Error en Mysql");
	header("Location:". $_SERVER['PHP_SELF']."?msg=borrar");
}


	$sql2="SELECT * from videosYT order by id desc";
	$_pagi_sql = $sql2;
	$_pagi_cuantos =6;
	include("paginator.inc.php");
	$primera= "<a href=".$_pagi_primera . ">";
	if ($_pagi_anterior=="no hay mas"){
		$anterior= " ";
	}
	else{
		$anterior= "<a href=".$_pagi_anterior.">";
	}
	if ($_pagi_siguiente=="no hay mas"){
		$siguiente= " ";
	}
	else{
		$siguiente= "<a href=".$_pagi_siguiente.">";
	}
	$ultimo= "<a href=".$_pagi_ultimo .">";
	$i=0;
	while($resultados = mysql_fetch_array($_pagi_result)){
		$noticias[$i]['id']=$resultados['id'] ;
		$noticias[$i]['titulo']=$resultados['titulo'] ;
		$noticias[$i]['status']=$resultados['status'] ;
		$noticias[$i]['descripcion']=$resultados['descripcion'] ;
		$noticias[$i]['fecha']=$resultados['fecha'] ;
		$noticias[$i]['prioridad']=$resultados['prioridad'] ;
		$i++;
	}
//////////////////////////////////////////////////////
arriba($tipo_usuario);
?>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td align="center"><table width="601" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td colspan="7" align="left"><span class="arial-30-azul">Videos  </span></td>
       </tr>
       <tr>
         <td width="44" align="center" class="tahoma-11-naranja">&nbsp;</td>
         <td width="258" colspan="5" align="center" class="tahoma-11-naranja"><span class="tahoma-11-gris-claro"><img src="imagenes/flecha-ant.gif" width="5" height="9" /> <?php echo $anterior; ?>anterior </a><?php echo $_pagi_actual."/".$_pagi_totalPags;?><?php echo $siguiente; ?> siguiente</a> <img src="imagenes/flecha-sig.gif" width="5" height="9" /></span>		 </td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td align="center" class="tahoma-11-naranja"><strong>ID</strong></td>
         <td colspan="5" class="tahoma-11-naranja">&nbsp;</td>
         <td width="29">&nbsp;</td>
       </tr>
       <tr>
         <td colspan="7" align="center" background="../imagenes/punto-hor.gif" class="tahoma-11-naranja"><span class="tahoma-11-gris-claro"><img src="../imagenes/spacer.gif" width="1" height="1" /></span></td>
       </tr>
       <tr>
         <td colspan="7" align="center" class="tahoma-11-naranja">
		 <?php
		 if(count($noticias>0)){
		 for($i=0;$i<=count($noticias)-1;$i++){
		  if (($i%2)!=0){
	  		$color="#F8F8F8";
			}
			else{
			$color="#FFFFFF";
			}
		 
		 
		 ?>
		 
		 <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td colspan="5" align="center" valign="top" bgcolor="<?php echo $color; ?>" class="tahoma-11-azul2"><span class="tahoma-11-gris-claro"><img src="../imagenes/spacer.gif" width="1" height="5" /></span></td>
           </tr>
           <tr>
             <td width="8%" align="center" valign="top" bgcolor="<?php echo $color; ?>" class="tahoma-11-azul2"><strong><?php echo $noticias[$i]['id']; ?></strong></td>
             <td align="left" valign="top" bgcolor="<?php echo $color; ?>"><strong class="tahoma-11-naranja"><?php echo $noticias[$i]['descripcion']; ?><br />
               Titulo:</strong><span class="tahoma-11-gris-claro"><strong><?php echo $noticias[$i]['titulo']; ?> </strong></span><strong><br />
                 <span class="tahoma-11-naranja">Fecha:</span> </strong><span class="tahoma-11-gris-claro"><?php echo obtenerfecha($noticias[$i]['fecha']); ?></span><strong><span class="tahoma-11-gris-claro"><br /> <span class="tahoma-11-naranja">Status:</span> <span class="tahoma-11-gris-claro">
				 
				 <?php if($noticias[$i]['status']==1){ echo "Activo";}else{ echo "Desactivado"; }; ?>
				 
				 
				 </span><br />
                 <span class="tahoma-11-naranja">Prioridad:</span> <span class="tahoma-11-gris-claro">
				 
				 <?php if($noticias[$i]['prioridad']==1){ echo "Destacado";}else{ echo "No Destacado"; }; ?>
				 
				 </span><br />
                
<br /></td>
             <td width="6%" bgcolor="<?php echo $color; ?>">&nbsp;</td>
             <td width="6%" align="center" valign="top" bgcolor="<?php echo $color; ?>"><a href="editar.php?id=<?php echo $noticias[$i]['id']; ?>"><img src="imagenes/ico-modificar.gif" alt="Modificar" width="24" height="24" border="0" /></a></td>
             <td width="6%" align="center" valign="top" bgcolor="<?php echo $color; ?>"><a href="<?php echo $_SERVER['PHP_SELF'];?>?borrar=<?php echo $noticias[$i]['id'];?>"><img src="imagenes/ico-borrar.gif" alt="Borrar" width="24" height="24" border="0" /></a></td>
           </tr>
           <tr>
             <td colspan="5" align="center" valign="top" bgcolor="<?php echo $color; ?>" class="tahoma-11-azul2"><span class="tahoma-11-gris-claro"><img src="../imagenes/spacer.gif" width="1" height="5" /></span></td>
             </tr>
           <tr>
             <td colspan="5" align="center" valign="top" background="../imagenes/punto-hor.gif" bgcolor="<?php echo $color; ?>" class="tahoma-11-azul2"><span class="tahoma-11-gris-claro"><img src="../imagenes/spacer.gif" width="1" height="1" /></span></td>
           </tr>
         </table>
		 <?php
		 }
		 }
		 
		 ?>          </td>
       </tr>
     
       <tr>
         <td colspan="7" align="center" class="tahoma-11-gris-claro">&nbsp;</td>
        </tr>
       <tr>
         <td colspan="7" align="center" class="tahoma-11-gris-claro"><img src="imagenes/flecha-ant.gif" width="5" height="9" /> <?php echo $anterior; ?>anterior </a><?php echo $_pagi_actual."/".$_pagi_totalPags;?><?php echo $siguiente; ?> siguiente</a><img src="imagenes/flecha-sig.gif" width="5" height="9" /></td>
       </tr>
       <tr>
         <td colspan="7" align="center" class="tahoma-11-gris-claro">&nbsp;</td>
       </tr>
     </table></td>
   </tr>
 </table>
<?php
abajo();
if($_GET['msg']=="borrar"){$msg="Se borro correctamente el registro"; }
if($_GET['msg']=="cancelar"){$msg="Se cancelo el borrado del registro"; }
if($_GET['msg']=="nuevo"){$msg="Se inserto el registro correctamente"; }
if($_GET['msg']=="editar"){$msg="Se edito el registro correctamente"; }
if($_GET['msg']=="cambio"){$msg="Se cambio el orden de las noticias correctamente"; }
if ($msg){echo "<script language='javascript'> alert(\"$msg\");</script>";}
?>
<script type="text/JavaScript">

function validacion() {
 
 if(document.forma.palabra.value!=""){
 
	
	eval("parent.location='"+"resultado-noticias-ses.php?palabra="+document.forma.palabra.value+"'");
	
	}
 
}
</script>

