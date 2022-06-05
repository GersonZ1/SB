<?php 
	include("conn.php");
	if (isset($_COOKIE['login'])) {
		if($_COOKIE['login'] == 'nada'|| $_COOKIE['login'] == ''){
	        echo '<script>window.location="login.php"</script>';
	    }else{
    	 	$login = $_COOKIE['login'];
			$pegaUser = "SELECT * FROM funcionario WHERE id = '$login'";
			$executaGetUser = mysqli_query($mysqli, $pegaUser);
			$assocGetUser = mysqli_fetch_assoc($executaGetUser);
			$nomeCookied = $assocGetUser['nome'];
			$nivelCookied = $assocGetUser['nivel'];
			$idCookied = $assocGetUser['id'];
			if ($nomeCookied == '') {
				echo '<script>window.location="login.php"</script>';
			}
	    }
	    
	}else{
		 echo '<script>window.location="login.php"</script>';
	}

?>