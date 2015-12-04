<?
	require_once 'pessoa.class.php';
	require_once 'produto.class.php';
	require_once 'pppSingle.class.php';

	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}

	$pessoas = array();
	$produtos = array();
	$ppp = array();
		
	$servername = "127.0.0.1";
	$username = "u358413504_user";
	$password = "Eisa2015";
	$dbname = "u358413504_bd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	
	//create query to get all pessoas select * from pessoa;
	$sql = "SELECT * FROM pessoa where ativo=b'1'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			$pessoa = new Pessoa($row["id"],$row["nome"],$row["email"]);
			array_push($pessoas, $pessoa);
		}
	}
		
	//create query to get all pessoas select * from produto;
	$sql = "SELECT * FROM produto where ativo=b'1'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {	
		while($row = $result->fetch_assoc()) {
			$produto = new Produto($row["id"], $row["descricao"], $row["valor"], $row["img"], $row["link"]);
			array_push($produtos, $produto);
		}
	}

	//create query to get all ppp;
	$sql = "SELECT p.id as id_pessoa, p.nome, 
			d.id as id_pedido,
			r.id as id_produto,r.descricao as prod_descpessoa,r.valor, 
			ppp.id as ppp_id,ppp.qtde,ppp.val_total
			FROM  pessoa p,
			produto r,
			pedido d,
			pessoa_prod_pedido ppp
			WHERE d.pedido_atual = 1
			AND ppp.id_pedido = d.id
			AND ppp.id_pessoa = p.id
			AND ppp.id_produto = r.id
			ORDER BY p.id, r.id;";

	$result = $conn->query($sql);
	$id_pessoa_aux = 0;
	$pppSingle;

	if ($result->num_rows > 0) {	
		while($row = $result->fetch_assoc()) {
			if ($id_pessoa_aux <> $row["id_pessoa"]) {
				if($id_pessoa_aux > 0) {
					array_push($ppp, $pppSingle);
				}
				$id_pessoa_aux = $row["id_pessoa"];
				$prod = array();
				$prod = array_push_assoc($prod, $row["id_produto"],  $row["qtde"]);
				$pppSingle = new PPPSingle($row["id_pessoa"],$row["nome"], $row["id_pedido"], $prod, $row["val_total"]);
				
			} else {
				$prod = array_push_assoc($prod, $row["id_produto"],  $row["qtde"]);
				$pppSingle->set_produtos($prod);
				$pppSingle->increment_val_total($row["val_total"]);
				
			}
		}
		array_push($ppp, $pppSingle);
	}
	$conn->close();	
?>
