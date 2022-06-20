<?php
	define('HOST','localhost');
	define('DB','bd_gamethesnare');
	define('USER','root');
	define('PASS','');
    
    /*
	O arquivo vai tentar conectar com o banco de dados. Se não conseguir, não vai mostrar os erros nem mostrar a senha.
	Se não conseguir, a mensagem de erro está na variável $erro.
	*/

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Conectado com sucesso";
	}catch(Exception $erro){
		echo 'Erro ao conectar';
	}

	//ENVIANDO DA PAGINA DE FEEDBACK PARA O BANCO DE DADOS

    if(isset($_POST['enviar-feedback'])){
        $comentario = $_POST['comentario'];

        date_default_timezone_set('America/Sao_Paulo');
        $registro = date('Y-m-d H:i:s');
        
        $sql = $pdo->prepare("INSERT INTO `feedback` VALUES (null,?,?)");
        $sql->execute(array($comentario, $registro));
        
        echo "
            <script>
            alert('Seu Feedback foi enviado com sucesso. Obrigadoo! :)');
            </script>
        ";

		echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
	}

	//ENVIANDO DA PAGINA DE SUPORTE PARA O BANCO DE DADOS

	if(isset($_POST['enviar-suporte'])){
        $pnome = $_POST['pnome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$descricao = $_POST['descricao'];
		$textoerro = $_POST['textoerro'];

        date_default_timezone_set('America/Sao_Paulo');
        $registro = date('Y-m-d H:i:s');
        
        $sql = $pdo->prepare("INSERT INTO `suporte` VALUES (null,?,?,?,?,?,?,?)");
        $sql->execute(array($pnome, $sobrenome, $email, $assunto, $descricao, $textoerro, $registro));

		echo "
            <script>
            alert('Sua solicitação de suporte foi enviada com sucesso, e em breve, entraremos em contato via E-mail. Obrigadoo! :)');
            </script>
        ";

		echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
	}
?>