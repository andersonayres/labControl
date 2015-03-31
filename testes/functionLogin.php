<<?php  
function AUTHAD ($host, $domain, $user, $pass) {
    if ((strlen($user) >= 3) && (strlen($pass) >= 4)) {
        $conecta = ldap_connect($host);
    	    	   ldap_set_option($conecta, LDAP_OPT_PROTOCOL_VERSION, 3);
    		   ldap_set_option($conecta, LDAP_OPT_REFERRALS, 0);
        $bind 	 = ldap_bind($conecta, $user . "@" . $domain, $pass);
        if (!$conecta) {
            return false; //echo ldap_error($conecta);
        } elseif (!$bind) {
            return false; //echo ldap_error($conecta);
        } else {
            return true;
        }
    } else {
        return false;
    }<?php


    session_start('sessao');

?>
<html>
<head>
<script language="JavaScript" type="text/javascript" src="funcs.js"></script>
</head>
<body>

    <form method="post" action="verif.php" name="form" AUTOCOMPLETE='ON' onSubmit="return valida()">
        usuario:<br>
        <input type="text" name="usu" size="50" maxlength="50" >
        <br>
        Senha:<br>
        <input type="password" name="senha" size="50" maxlength="20" >
        <br><br>
        <input type="submit" value="Entrar">
    </form>

</body>
</html>

}?>