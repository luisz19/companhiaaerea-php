<?php


class Passageiro{
  protected $id;
  protected $nome;
  protected $cpf;
  protected $email;
  protected $tel;
  protected $num_passaporte;

public function __construct($nome, $email, $tel, $num_passaporte, $cpf) {
    $this->nome = $nome;
    $this->email = $email;
    $this->tel = $tel;
    $this->num_passaporte = $num_passaporte;
    $this->cpf = $cpf;
}

  public function getNome() {
    return $this->nome;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getCPF() {
    return $this->cpf;
  }

  public function setCPF($cpf) {
    $this->cpf = $cpf;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getTel() {
    return $this->tel;
  }

  public function setTel($tel) {
    $this->tel = $tel;
  }

  public function setNumPassaporte ($num_passaporte) {
    $this->num_passaporte = $num_passaporte;
  }

  public function getNumPassaporte () {
    return $this->num_passaporte;
  }

}

//instancia passageiro
// $passageiro1 = new Passageiro();
// $passageiro1->setNome("Han Solo");
// $passageiro1->setCPF("151.222.567.13");
// $passageiro1->setEmail("passageiro1@gmail.com");
// $passageiro1->setTel("4002-8922");
// $passageiro1->setNumPassaporte("6849");

// $passageiro2 = new Passageiro();
// $passageiro2->setNome("Anakin");
// $passageiro2->setCPF("321.435.564.18");
// $passageiro2->setEmail("passageiro2@gmail.com");
// $passageiro2->setTel("1902-5673");
// $passageiro2->setNumPassaporte("4032");