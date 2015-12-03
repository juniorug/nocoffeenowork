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

Class Pessoa {

	private $id; //int(10) unsigned
	private $nome; //varchar(50)
	private $email; //varchar(60)
	private $reg_date; //timestamp
	private $ativo; //bit(1)

	function Pessoa($id,$nome,$email){
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
	}

    /**
     * New object to the class. DonŽt forget to save this new object "as new" by using the function $class->Save_Active_Row_as_New(); 
     *
     */
	public function New_Pessoa($nome,$email,$reg_date,$ativo){
		$this->nome = $nome;
		$this->email = $email;
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
	 * @return nome - varchar(50)
	 */
	public function getnome(){
		return $this->nome;
	}

	/**
	 * @return email - varchar(60)
	 */
	public function getemail(){
		return $this->email;
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
	public function setnome($nome){
		$this->nome = $nome;
	}

	/**
	 * @param Type: varchar(60)
	 */
	public function setemail($email){
		$this->email = $email;
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