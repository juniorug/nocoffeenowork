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
require_once 'DataBaseMysql.class.php';

Class pessoa_prod_pedido {

	private $id; //int(50) unsigned
	private $id_pessoa; //int(10)
	private $id_produto; //int(10)
	private $id_pedido; //int(10)
	private $qtde; //int(10)
	private $val_total; //double
	private $reg_date; //timestamp
	private $ativo; //bit(1)
	private $connection;

	public function pessoa_prod_pedido(){
		$this->connection = new DataBaseMysql();
	}

    /**
     * New object to the class. DonŽt forget to save this new object "as new" by using the function $class->Save_Active_Row_as_New(); 
     *
     */
	public function New_pessoa_prod_pedido($id_pessoa,$id_produto,$id_pedido,$qtde,$val_total,$reg_date,$ativo){
		$this->id_pessoa = $id_pessoa;
		$this->id_produto = $id_produto;
		$this->id_pedido = $id_pedido;
		$this->qtde = $qtde;
		$this->val_total = $val_total;
		$this->reg_date = $reg_date;
		$this->ativo = $ativo;
	}

    /**
     * Load one row into var_class. To use the vars use for exemple echo $class->getVar_name; 
     *
     * @param key_table_type $key_row
     * 
     */
	public function Load_from_key($key_row){
		$result = $this->connection->RunQuery("Select * from pessoa_prod_pedido where id = \"$key_row\" ");
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			$this->id = $row["id"];
			$this->id_pessoa = $row["id_pessoa"];
			$this->id_produto = $row["id_produto"];
			$this->id_pedido = $row["id_pedido"];
			$this->qtde = $row["qtde"];
			$this->val_total = $row["val_total"];
			$this->reg_date = $row["reg_date"];
			$this->ativo = $row["ativo"];
		}
	}

    /**
     * Delete the row by using the key as arg
     *
     * @param key_table_type $key_row
     *
     */
	public function Delete_row_from_key($key_row){
		$this->connection->RunQuery("DELETE FROM pessoa_prod_pedido WHERE id = $key_row");
	}

    /**
     * Update the active row table on table
     */
	public function Save_Active_Row(){
		$this->connection->RunQuery("UPDATE pessoa_prod_pedido set id_pessoa = \"$this->id_pessoa\", id_produto = \"$this->id_produto\", id_pedido = \"$this->id_pedido\", qtde = \"$this->qtde\", val_total = \"$this->val_total\", reg_date = \"$this->reg_date\", ativo = \"$this->ativo\" where id = \"$this->id\"");
	}

    /**
     * Save the active var class as a new row on table
     */
	public function Save_Active_Row_as_New(){
		$this->connection->RunQuery("Insert into pessoa_prod_pedido (id_pessoa, id_produto, id_pedido, qtde, val_total, reg_date, ativo) values (\"$this->id_pessoa\", \"$this->id_produto\", \"$this->id_pedido\", \"$this->qtde\", \"$this->val_total\", \"$this->reg_date\", \"$this->ativo\")");
	}

    /**
     * Returns array of keys order by $column -> name of column $order -> desc or acs
     *
     * @param string $column
     * @param string $order
     */
	public function GetKeysOrderBy($column, $order){
		$keys = array(); $i = 0;
		$result = $this->connection->RunQuery("SELECT id from pessoa_prod_pedido order by $column $order");
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				$keys[$i] = $row["id"];
				$i++;
			}
	return $keys;
	}

	/**
	 * @return id - int(50) unsigned
	 */
	public function getid(){
		return $this->id;
	}

	/**
	 * @return id_pessoa - int(10)
	 */
	public function getid_pessoa(){
		return $this->id_pessoa;
	}

	/**
	 * @return id_produto - int(10)
	 */
	public function getid_produto(){
		return $this->id_produto;
	}

	/**
	 * @return id_pedido - int(10)
	 */
	public function getid_pedido(){
		return $this->id_pedido;
	}

	/**
	 * @return qtde - int(10)
	 */
	public function getqtde(){
		return $this->qtde;
	}

	/**
	 * @return val_total - double
	 */
	public function getval_total(){
		return $this->val_total;
	}

	/**
	 * @return reg_date - timestamp
	 */
	public function getreg_date(){
		return $this->reg_date;
	}

	/**
	 * @return ativo - bit(1)
	 */
	public function getativo(){
		return $this->ativo;
	}

	/**
	 * @param Type: int(50) unsigned
	 */
	public function setid($id){
		$this->id = $id;
	}

	/**
	 * @param Type: int(10)
	 */
	public function setid_pessoa($id_pessoa){
		$this->id_pessoa = $id_pessoa;
	}

	/**
	 * @param Type: int(10)
	 */
	public function setid_produto($id_produto){
		$this->id_produto = $id_produto;
	}

	/**
	 * @param Type: int(10)
	 */
	public function setid_pedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

	/**
	 * @param Type: int(10)
	 */
	public function setqtde($qtde){
		$this->qtde = $qtde;
	}

	/**
	 * @param Type: double
	 */
	public function setval_total($val_total){
		$this->val_total = $val_total;
	}

	/**
	 * @param Type: timestamp
	 */
	public function setreg_date($reg_date){
		$this->reg_date = $reg_date;
	}

	/**
	 * @param Type: bit(1)
	 */
	public function setativo($ativo){
		$this->ativo = $ativo;
	}

    /**
     * Close mysql connection
     */
	public function endpessoa_prod_pedido(){
		$this->connection->CloseMysql();
	}

}