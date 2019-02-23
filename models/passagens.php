<?php
class passagens extends model {

	public function list() {
		$sql = "SELECT * FROM passagens";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
        }

        return $array;
	}

	public function listar($id) {
		$sql = "SELECT * FROM passagens WHERE id = $id ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function view($id) {
		$sql = "SELECT * FROM passagens WHERE id = $id ";
		$qry = $this->db->query($sql);

		if($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($nome, $cpf, $telefone, $email, $origem, $destino, $numero, $ida, $volta) {
		$sql = "INSERT INTO passagens (nome_passageiro, cpf, telefone, email, aeroporto_origem, aeroporto_destino, numero_voo, data_ida, data_volta, criado)";
		$sql.= "VALUE ('$nome', '$cpf', '$telefone', '$email', '$origem', '$destino', '$numero', '$ida', '$volta', NOW())";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $cpf, $telefone, $email, $origem, $destino, $numero, $ida, $volta) {
		$sql = "UPDATE passagens SET nome_passageiro = '$nome', cpf = '$cpf', telefone = '$telefone', 'email = '$email', aeroporto_origem = '$origem', aeroporto_destino = '$destino', numero_voo = '$numero', 'data_ida' = '$ida', 'data_volta' = '$volta', WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) 
	{
		$sql = "DELETE FROM passagens WHERE id = $id";
		$this->db->query($sql);
	}

}



?>