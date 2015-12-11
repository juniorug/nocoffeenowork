<?php
/*
 * Author: Rafael Rocha - www.rafaelrocha.net - info@rafaelrocha.net
 * 
 * Create Date: 3-12-2015
 * 
 * Version of MYSQL_to_PHP: 1.1
 * 
 * License: LGPL 
 * 
 */


Class PPPSingle {

	private $id_pessoa; //int(10)
	private $nome; //varchar(50)
	private $id_pedido; //int(10)
	private $produtos = array();
	private $val_total; //double
	
	function PPPSingle($id_pessoa,$nome,$id_pedido,$produtos,$val_total){
		
		$this->id_pessoa = $id_pessoa;
		$this->nome = $nome;
		$this->produtos = $produtos;
		$this->id_pedido = $id_pedido;
		$this->val_total = $val_total;
		$this->reg_date = $reg_date;
		$this->ativo = $ativo;
	}

	/**
	 * @return id_pessoa - int(10)
	 */
	public function getid_pessoa(){
		return $this->id_pessoa;
	}
	/**
	 * @return nome - varchar(50)
	 */
	public function get_nome(){
		return $this->nome;
	}

	/**
	 * @return produto - array()
	 */
	public function get_produtos(){
		return $this->produtos;
	}
	
	/**
	 * @return id_pedido - int(10)
	 */
	public function getid_pedido(){
		return $this->id_pedido;
	}

	/**
	 * @return val_total - double
	 */
	public function getval_total(){
		return $this->val_total;
	}

	/**
	 * @param Type: int(10)
	 */
	public function setid_pessoa($id_pessoa){
		$this->id_pessoa = $id_pessoa;
	}
	/**
	 * @param Type: varchar(50)
	 */
	public function set_nome($nome){
		$this->nome = $nome;
	}

	/**
	 * @param Type: array()
	 */
	public function set_produtos($produtos){
		$this->produtos = $produtos;
	}
	
	/**
	 * @param Type: array()
	 */
	public function add_produtos($produtos){
		array_push($this->produtos,$produtos);
	}

	/**
	 * @param Type: int(10)
	 */
	public function setid_pedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

	/**
	 * @param Type: double
	 */
	public function setval_total($val_total){
		$this->val_total = $val_total;
	}
	
	/**
	 * @param Type: double
	 */
	public function increment_val_total($val_total){
		$this->val_total += $val_total;
	}
	
	public function toString(){
		echo 'id_pessoa: '.$this->id_pessoa.'<br />';
		echo 'nome: '.$this->nome.'<br />';
		echo 'id_pedido: '.$this->id_pedido.'<br />';
		echo 'produtos: '; print_r($this->produtos);echo '<br />';
		echo 'val_total: '.$this->val_total.'<br />';
	}
	public function get_qtde_caixas(){
		$count = 0;
		foreach($this->produtos as $produto=>$qtde){
			$count += $qtde;
		}
		return $count;
	}
}