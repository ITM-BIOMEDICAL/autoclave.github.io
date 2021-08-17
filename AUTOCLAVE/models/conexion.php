<?php
	class Conexion
	{
		static public function conectar()
		{
			#$link=new PDO("mysql:host=localhost;dbname=prueba","RODRIGO2","Rm72731017");
			$link=new PDO("mysql:host=sql212.epizy.com;dbname=epiz_29441724_prueba","epiz_29441724","WO2ztZI0RN88Ngi");
			$link->exec("set names utf8");
			return $link;
		}
	}
