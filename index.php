<?php


    session_start('sessao');

?>
<html>
<head>
    <title> Controle de Laboratórios </title>
<link rel="stylesheet" href="style/style.css" />
        
<script language="JavaScript" type="text/javascript" src="funcs.js"></script>
<script language="JavaScript" type="text/javascript" src="js/trocaImagens.js"></script>
</head>

<body id="main">
    
    <form method="post" action="verif.php" name="form" AUTOCOMPLETE='ON' onSubmit="return valida()">
        Usuario:<br>
        <input type="text" name="usu" size="50" maxlength="50" placeholder="Usuario" required>
        <br>
        Senha:<br>
        <input type="password" name="senha" size="50" maxlength="20" col placeholder="Senha" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
   


</body>
</html>
