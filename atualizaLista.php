<?
	$purchase_id = 0;
    $count_produtos_ativos = 0;	
    $siteUrl = "http://nocoffeenowork.juniormascarenhas.com/";
	$servername = "mysql.hostinger.com.br";
	$username = "u765057031_user";
	$password = "Eisa2015";
	$dbname = "u765057031_bd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$purchase_id = $conn->query("SELECT id FROM pedido WHERE pedido_atual = 1;")->fetch_object()->id;
	$count_produtos_ativos = $conn->query("SELECT COUNT(1) AS countativos FROM  produto WHERE ativo =1;")->fetch_object()->countativos;

    $person_id = isset($_POST['selname']) ? $_POST['selname'] : false;
    if ($person_id) {
	  for ($product_id = 1; $product_id <= $count_produtos_ativos; $product_id++) {
		$selname = 'sel'.$product_id;
		$qtde_produto = isset($_POST[$selname]) ? $_POST[$selname] : false;
		if ($qtde_produto) {
			$call_proc =  'CALL insert_PPP('.$person_id.','.$product_id.','.$purchase_id.','.$qtde_produto.')';				
			if (!$conn->query($call_proc)) {
				echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
				$msg = 'Houve um erro ao tentar alterar o pedido, por favor entre em contato com o administrador.';
				$ok = 2;
			} else {
				$msg = 'Obrigado! Seu pedido foi adicionado ao inventário. Nós entraremos em contato com você em breve.';
				$ok = 1; 
			}
		} else {
			//criar procedure que procura se há pedido para esse usuario e produto, faz update para qtde=0,ativo=0,val_total=0
			$call_proc =  'CALL deactivate_PPP('.$person_id.','.$product_id.','.$purchase_id.')';				
			if (!$conn->query($call_proc)) {
				echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
				$msg = 'Houve um erro ao tentar alterar o pedido, por favor entre em contato com o administrador.';
				$ok = 2;
			} else {
				$msg = 'Obrigado! Seu pedido foi adicionado ao inventário. Nós entraremos em contato com você em breve.';
				$ok = 1; 
			}
		}
	  }
	  $conn->close();		
	} else {
	   $msg = "Erro! Selecione o nome do usuário";
	   $ok = 2; 	
   }
   header('Location: '.$siteUrl.'?Ok='.urlencode($ok).'&msg='.urlencode($msg)); exit;		

?>