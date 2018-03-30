<?php

	namespace ONHB\Model;

	use \ONHB\DB\Sql;

	class User
	{
		
		public function cadastrar( $params = array() )
		{
			$sql = new Sql();
			$rowQuery = "INSERT INTO aluno VALUES( DEFAULT, :NOME, :TURMA, :EMAIL, :NOME_DO_GRUPO)";
			$result = $sql->query( $rowQuery, $params);
			if ($result) {
				return 1;
			} else {
				return 0;
			}
		}
	}