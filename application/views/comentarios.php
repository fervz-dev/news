   <?php $this->load->helper('form'); 
   $var=$ciudad[0]['idNoticia'];
   //$attributes = array('class' => 'comentarios', 'id' => '$var');
   echo form_open('comentarios/insertar');
  
   ?> 
    
<table border=0 id="t1" aling="center" whit="100%">
<tr>
	<td>Nombre</td>
	<td>
	<INPUT type=text name="nombre">
        </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>E-mail</td>
	<td>
	<INPUT type=text name="email">
        </td>
</tr>
<tr>
    <td>Comentario</td>
	<td>
	<textarea cols="45" rows="5" name="comentario"></textarea>
        </td>
</tr>
<tr>
	<td COLSPAN=2>
	<INPUT type="submit" value="Enviar" aling="abdmiddle">
	</td>
</tr>
    

</table>
    </form>