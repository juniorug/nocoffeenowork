<?
	foreach($pessoas as $pessoa){
		$found = false;
		echo '<tr><td>'.$pessoa['nome'].'</td>';
		foreach($ppp as $ppp_single){
			if($ppp_unique->id_pessoa == $pessoa['id']){
				$found = true;
				echo '<td>'.$ppp_single->get_qtde_caixas().'</td>';
				echo '<td>R$ '.$ppp_single->getval_total() + 5.0.'</td>';
			}
		}
		if(!$found){
			echo '<td>0</td>';
			echo '<td>R$ 0,00</td>';
		}
		echo '</tr>';
	}
?>

<?
	$qtde_min_caixas = 30;
	$consulta = $DB->consulta('SELECT qtde_caixas FROM pedido WHERE pedido_corrente = 1');
	while($qtde_caixas = $DB->lista($consulta)){
		echo 'Temos '.$qtde_caixas.' no estoque. Faltam '.($qtde_min_caixas - $qtde_caixas).'caixas para realizarmos o próximo pedido.';
	}
?>

<?
	$count = 0;
	foreach($produtos as $produto){
		if ($count == 0){
			echo '<tr>';
		}
		echo '<td>';
		echo '<div class="imgcoffee"><img src="'.$produto["img"].'" /></div>';
		echo '<div class="imgdescription"><p>'.$produto["descricao"].'<p></div>';
		echo '</td>';		
		if  ($count == 2){
			echo '</tr>';
			$count  = 0;
		} else {
			$count ++;
		}
		
	}
	if  ($count != 0){
		echo '</tr>';
	}

?>