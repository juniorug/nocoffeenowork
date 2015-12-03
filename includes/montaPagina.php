	<?php
	
	function montaTexto($texto){
		$texto = str_replace("<hr>","<hr />",$texto);
		$texto = str_replace("<hr/>","<hr />",$texto);
		$texto = explode('<hr />',$texto);		
		$x = 0;
		foreach($texto as $s =>$v){
			$x++;
			$texto[$x] = $v;
		}
		if (!empty($_GET['page'])){
			$saida = $texto[$_GET['page']];
		} else {
			$saida = $texto[1];
		}			
		if ($x > 1){
			$saida .= '<div class="pagination bottom">';
			
			
			if ($_GET['page']!= '' && $_GET['page']!= 1 ){
			$saida .= '<p><a href="?page='.($_GET['page'] - 1).'"">&lt;&lt;</a></p>';			  				  
			}
			
			
			
			$saida .= '<ul>';	  			  
			for ($i = 1; $i <= $x; $i++){
				 if ($_GET['page']== ''){$_GET['page']=1;}
				 $class = ($i == $_GET['page']) ? 'class="active"' : ''; 				 
				 $saida .='<li '. $class .'><a href="?page='.$i.'">'.$i.'</a></li>';							 	 				 
			}
			$saida .= '</ul>';
			if ($_GET['page']!= $x ){
			$saida .='<p><a href="?page='.($_GET['page'] + 1).'">&gt;&gt;</a></p>';
			}
			$saida .= '</div>';				 
		}
		return $saida;
	}	
	?>
    
    