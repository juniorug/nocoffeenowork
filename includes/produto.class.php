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


Class Produto {

	private $id; //int(10) unsigned
	private $descricao; //varchar(50)
	private $img; //varchar(100)
	private $link_url; //varchar(100)
	private $valor; //double
	private $reg_date; //timestamp
	private $ativo; //bit(1)

	function Produto($id,$descricao,$valor,$img,$link){
		$this->id = $id;
		$this->descricao = $descricao;
		$this->valor = $valor;
		$this->img = $img;
		$this->link_url = $link;
	}

	
	/*public function Produto(){
		$this->connection = new DataBaseMysql();
	}*/

    /**
     * New object to the class. DonŽt forget to save this new object "as new" by using the function $class->Save_Active_Row_as_New(); 
     *
     */
	public function New_Produto($descricao,$img,$link,$valor,$reg_date,$ativo){
		$this->descricao = $descricao;
		$this->img = $img;
		$this->link_url = $link;
		$this->valor = $valor;
		$this->reg_date = $reg_date;
		$this->ativo = $ativo;
	}

    /**
	 * @return id - int(10) unsigned
	 */
	public function getid(){
		return $this->id;
	}

	/**
	 * @return descricao - varchar(50)
	 */
	public function getdescricao(){
		return $this->descricao;
	}

	/**
	 * @return img - varchar(100)
	 */
	public function getimg(){
		return $this->img;
	}

	/**
	 * @return link - varchar(100)
	 */
	public function getlink(){
		return $this->link_url;
	}

	/**
	 * @return valor - double
	 */
	public function getvalor(){
		return $this->valor;
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
	 * @param Type: int(10) unsigned
	 */
	public function setid($id){
		$this->id = $id;
	}

	/**
	 * @param Type: varchar(50)
	 */
	public function setdescricao($descricao){
		$this->descricao = $descricao;
	}

	/**
	 * @param Type: varchar(100)
	 */
	public function setimg($img){
		$this->img = $img;
	}

	/**
	 * @param Type: varchar(100)
	 */
	public function setlink($link){
		$this->link_url = $link;
	}

	/**
	 * @param Type: double
	 */
	public function setvalor($valor){
		$this->valor = $valor;
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

}