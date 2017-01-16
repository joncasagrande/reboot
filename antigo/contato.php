<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASSPRESS</title>
<link href="index.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<?php
  	include("menu_pai.php")
  ?>
<form name="form1" method="post" action="mail.php" >
  <table width="900" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor = "#FFFFFF">
    <tr> 
      <td valign="top" width="100" nowrap><font class="texto">Nome:</font></td>
      <td align="left"> 
        <input class="form_campos" type="text" name="nome" size="34">
      </td>
    </tr>
    <!-- <tr> 
      <td valign="top" width="100" nowrap><font class="texto">Cidade</font></td>
      <td align="left"> 
        <input class="form_campos" type="text" name="cidade" size="20">
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font class="texto">Estado:</font></td>
      <td align="left"> 
        <input class="form_campos" type="text" name="estado" size="11">
      </td>
    </tr>-->
    <tr> 
      <td valign="top" width="100" nowrap><font class="texto">E-mail:</font></td>
      <td align="left"> 
        <input class="form_campos" type="text" name="email" size="34">
      </td>
    </tr> 
    <tr> 
      <td valign="top" width="100" nowrap><font class="texto">Assunto:</font></td>
      <td align="left"> 
        <select class="form_campos" name="assunto">
          <option class="form_campos" value="Opinião" selected>Opinião</option>
          <option class="form_campos" value="Sugestão">Sugestão</option>
          <option class="form_campos" value="Parceria">Parceria</option>
          <option class="form_campos" value="Reclamação">Reclamação</option>
          <option class="form_campos" value="Outros">Outros</option>
        </select>
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font class="texto">Mensagem:</font></td>
      <td align="left"> 
        <textarea class="form_campos" name="mensagem" cols="34" rows="4"></textarea>
      </td>
    </tr>
    <tr> 
      <td colspan="2" valign="middle"> 
	  	<br>
        <div align="left"> 
          <input class="form_botao" type="submit" name="Enviar" value="Enviar Mensagem">
          <input class="form_botao" type="reset" name="Limpar" value="Limpar">
        </div>
      </td>
    </tr>
  </table>
</form>
<?php
	include("footer.php")
?>
</body>
</html>
