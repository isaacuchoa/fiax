<?php 
	include_once("classe/BuscaAlteracao.php");
	$listagem = new BuscaAlteracaoBibliografia();
	$listagem->setId($_GET["id"]);
	$listagem->geraDados();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.titulo {
	font-family: Verdana, Geneva, sans-serif;
	color: #063;
	font-weight: bold;
}
</style>
</head>

<body>
<span class="titulo">Altera��o da Bibliografia</span>
<form action="funcoes/alteracao.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
	<label>
    	<span>T�tulo</span><br />
        <input type="text" name="txtNome" id="txtNome" value="<?php echo $listagem->getNome(); ?>" />
    </label><br />
    
    <label>
    	<span> Conte�do </span><br />
        <textarea name="txtDesc" id="txtDesc" cols="30" rows="5">
        <?php echo $listagem->getDescricao(); ?>
        </textarea>
    </label>
    
    <input type="submit" value="Alterar" />
	 <input name="idBiblio" type="hidden" id="idBiblio" value="<?php echo $_GET["id"]; ?>" />
     <input name="local" type="hidden" id="local" value="formAltBibliografia" />

</form>


</body>
</html>