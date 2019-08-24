<?php 
	require_once("Conexion.php");
	class User 
	{
		private $db;

		public function __construct()
		{
			$this->db = new Conexion();
		}

		// Metodos de busqueda o calculo:
		public function find($id)
		{
			$sth = $this->db->prepare("SELECT * FROM users WHERE id=:id");
			$sth->bindParam(":id", $id);
			$sth->execute();
			$result = $sth->fetchAll();
			return $result;
		}

		public function totalRows()
		{
			$sth = $this->db->prepare("SELECT * FROM users");
			$sth->execute();
			$result = $sth->rowCount();
			return $result;
		}

		// Metodos del CRUD:
		public function index($desde, $hasta)
		{
			$sth = $this->db->prepare("SELECT * FROM users ORDER BY nombre ASC LIMIT $desde, $hasta");
			$sth->execute();
			$result = $sth->fetchAll();
			return $result;
		}

		public function create($nombre, $apellido, $correo, $telefono)
		{
			$sth = $this->db->prepare("INSERT INTO users (nombre, apellido, correo, telefono) VALUES (:nombre,:apellido,:correo,:telefono)");
			$sth->execute([
				":nombre"   => $nombre,
				":apellido" => $apellido,
				":correo"   => $correo,
				":telefono" => $telefono
			]);
			return $this;
		}

		public function update($id,$nombre, $apellido, $correo, $telefono)
		{
			$sth = $this->db->prepare("UPDATE users SET nombre=:nombre,apellido=:apellido,correo=:correo,telefono=:telefono WHERE id=:id");
			$sth->execute([
				":id"       => $id,
				":nombre"   => $nombre,
				":apellido" => $apellido,
				":correo"   => $correo,
				":telefono" => $telefono
			]);
			return $this;
		}

		public function delete($id)
		{
			$sth = $this->db->prepare("DELETE FROM users WHERE id=:id");
			$sth->bindParam(':id', $id);
			$sth->execute();
			return $this;
		}
		public function redirectTo($url)
	    {
	    	header("location: $url");
	    	return $this;
	    }
	}