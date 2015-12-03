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

Class pedido {

	private $id; //int(10) unsigned
	private $data_inicial; //timestamp
	private $data_final; //timestamp
	private $pedido_atual; //bit(1)
	private $qtde_caixas; //int(6)
	private $connection;

	public function pedido(){
		$this->connection = new DataBaseMysql();
	}

    /**
     * New object to the class. DonŽt forget to save this new object "as new" by using the function $class->Save_Active_Row_as_New(); 
     *
     */
	public function New_pedido($data_inicial,$data_final,$pedido_atual,$qtde_caixas){
		$this->data_inicial = $data_inicial;
		$this->data_final = $data_final;
		$this->pedido_atual = $pedido_atual;
		$this->qtde_caixas = $qtde_caixas;
	}

    /**
     * Load one row into var_class. To use the vars use for exemple echo $class->getVar_name; 
     *
     * @param key_table_type $key_row
     * 
     */
	public function Load_from_key($key_row){
		$result = $this->connection->RunQuery("Select * from pedido where id = \"$key_row\" ");
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			$this->id = $row["id"];
			$this->data_inicial = $row["data_inicial"];
			$this->data_final = $row["data_final"];
			$this->pedido_atual = $row["pedido_atual"];
			$this->qtde_caixas = $row["qtde_caixas"];
		}
	}

    /**
     * Delete the row by using the key as arg
     *
     * @param key_table_type $key_row
     *
     */
	public function Delete_row_from_key($key_row){
		$this->connection->RunQuery("DELETE FROM pedido WHERE id = $key_row");
	}

    /**
     * Update the active row table on table
     */
	public function Save_Active_Row(){
		$this->connection->RunQuery("UPDATE pedido set data_inicial = \"$this->data_inicial\", data_final = \"$this->data_final\", pedido_atual = \"$this->pedido_atual\", qtde_caixas = \"$this->qtde_caixas\" where id = \"$this->id\"");
	}

    /**
     * Save the active var class as a new row on table
     */
	public function Save_Active_Row_as_New(){
		$this->connection->RunQuery("Insert into pedido (data_inicial, data_final, pedido_atual, qtde_caixas) values (\"$this->data_inicial\", \"$this->data_final\", \"$this->pedido_atual\", \"$this->qtde_caixas\")");
	}

    /**
     * Returns array of keys order by $column -> name of column $order -> desc or acs
     *
     * @param string $column
     * @param string $order
     */
	public function GetKeysOrderBy($column, $order){
		$keys = array(); $i = 0;
		$result = $this->connection->RunQuery("SELECT id from pedido order by $column $order");
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				$keys[$i] = $row["id"];
				$i++;
			}
	return $keys;
	}

	/**
	 * @return id - int(10) unsigned
	 */
	public function getid(){
		return $this->id;
	}

	/**
	 * @return data_inicial - timestamp
	 */
	public function getdata_inicial(){
		return $this->data_inicial;
	}

	/**
	 * @return data_final - timestamp
	 */
	public function getdata_final(){
		return $this->data_final;
	}

	/**
	 * @return pedido_atual - bit(1)
	 */
	public function getpedido_atual(){
		return $this->pedido_atual;
	}

	/**
	 * @return qtde_caixas - int(6)
	 */
	public function getqtde_caixas(){
		return $this->qtde_caixas;
	}

	/**
	 * @param Type: int(10) unsigned
	 */
	public function setid($id){
		$this->id = $id;
	}

	/**
	 * @param Type: timestamp
	 */
	public function setdata_inicial($data_inicial){
		$this->data_inicial = $data_inicial;
	}

	/**
	 * @param Type: timestamp
	 */
	public function setdata_final($data_final){
		$this->data_final = $data_final;
	}

	/**
	 * @param Type: bit(1)
	 */
	public function setpedido_atual($pedido_atual){
		$this->pedido_atual = $pedido_atual;
	}

	/**
	 * @param Type: int(6)
	 */
	public function setqtde_caixas($qtde_caixas){
		$this->qtde_caixas = $qtde_caixas;
	}

    /**
     * Close mysql connection
     */
	public function endpedido(){
		$this->connection->CloseMysql();
	}

}