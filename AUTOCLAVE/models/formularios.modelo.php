<?php
	require_once "conexion.php";
		class ModeloFormularios
		{
			static public function mdlSeleccionarRegistros($tabla, $item, $valor)
			{
				if ($item==null && $valor==null)
				{
					$stmt=Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(FECHA, '%d-%m-%Y') AS FECHA FROM $tabla ORDER BY id DESC");
					$stmt->execute();
					return $stmt->fetchAll();
				}
				else
				{
					$stmt=Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(FECHA, '%d-%m-%Y') AS FECHA FROM $tabla WHERE $item = :$item ORDER BY id DESC");
					$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
					$stmt->execute();
					return $stmt->fetch();
				}
				$stmt->close();
				$stmt=null;
			}				
		}
