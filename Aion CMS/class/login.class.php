<?php



class AccountData extends Factory{


	function AccountData()
	{
		$this->elem = array(
		"id" => null,
		"name" => null,
		"password" => null,
		"activated" => null,
		"access_level" => null,
		"membership" => null,
		"last_server" => null,
		"last_ip" => null,
                                    "ip_force" => null,
                                    "expire" => null,
                                    "reward_points" => null,
		);
	}



	function SelectById($id)
	{
		$sql = "SELECT id,
		               name,
		               password,
		               activated,
		               access_level,
		               membership,
		               last_server,
		               last_ip,
                                                   ip_force,
                                                   expire,
                                                   reward_points
		          FROM ".Logindb.".account_data
		         WHERE id = ".mysql_real_escape_string($id);

		return $this->PopulateObject($sql);
	}

	function FazerLogin()
	{
		$sql = "SELECT id,
		               name,
		               password,
		               activated,
		               access_level,
		               membership,
		               last_server,
		               last_ip,
                                                   ip_force,
                                                   expire,
                                                   reward_points
		          FROM ".Logindb.".account_data
				 WHERE activated = 1
				   AND name = '".mysql_real_escape_string($this->name)."'
				   AND password = '".mysql_real_escape_string($this->password)."'";

		if($this->PopulateObject($sql))
		{		
			return true;
		}else{
			return false;
		}
	}

	function isPassword()
	{
		$sql = "SELECT id,
		               name,
		               password,
		               activated,
		               access_level,
		               membership,
		               last_server,
		               last_ip,
                                                     ip_force,
                                                   expire,
                                                   reward_points
		          FROM ".Logindb.".account_data
				 WHERE activated = 1
				   AND id = '".mysql_real_escape_string($this->id)."'
				   AND password = '".mysql_real_escape_string($this->password)."'";

		if($this->PopulateObject($sql))
		{		
			return true;
		}else{
			return false;
		}
	}

	function CanInsert()
	{
		$sql = "SELECT name
		          FROM ".Logindb.".account_data
		         WHERE name = '".mysql_escape_string($this->name)."'";

		$query = mysql_query($sql, $GLOBALS["conn"]);

		if($rs = mysql_fetch_assoc($query))
		{
			return false;
		}

		return true;
	}

	function getTotalAccounts()
	{
		$total = 0;
		
		$sql = "SELECT count(*) as total
		          FROM ".Logindb.".account_data 
		         ";

		$query = mysql_query($sql, $GLOBALS["conn"]) or die(mysql_error());

		if($rs = mysql_fetch_assoc($query))
		{
			$total =  $rs["total"];
		}
		
		mysql_free_result($query);

		return $total;
	}

	function LoadByPost()
	{
		if($_POST != "")
		{
			$this->PopulateByPost();
			
			if($this->password != "")			
				$this->password = cryptPassword($this->password);
		}
	}


	function LoadByGet()
	{
		if($_GET != "")
		{
			$this->PopulateByGet();

			if($this->password != "")			
				$this->password = cryptPassword($this->password);
		}
	}


	function Insert()
	{
		return $this->db_insert(Logindb.".account_data");
	}


	function Update()
	{
		$where  = "id = ".mysql_real_escape_string($this->id);
		return $this->db_update(Logindb.".account_data", $where);
	}


	function LoadLista($order = "1 DESC")
	{
		if($_GET["pag"] > 0)
			$this->pag = $_GET["pag"];

		$sql = "SELECT id,
                   name,
                   password,
                   activated,
                   access_level,
                   membership,
                   last_server,
                   last_ip,
                   ip_force,
                    expire,
                   reward_points
		          FROM ".Logindb.".account_data
		         WHERE 1 = 1 ";

		$this->Populate($sql, $order);
	}



	function LoadCombo($value = "")
	{
		$sql = "SELECT id,
                   name,
                   password,
                   activated,
                   access_level,
		               membership,
                   last_server,
                   last_ip,
   ip_force,
                                                   expire,
                                                   reward_points
		          FROM ".Logindb.".account_data
		      ORDER BY 1";

		$this->PopulateCombo($sql,$value);
	}
}

class Factory{
	var $elem;
	var $pag = 0;
	var $cont = 0;
	var $reg_pag = 0;
	var $dados;
	var $conn;


    function __get($prop_name)
    {
        if(isset($this->elem[$prop_name]))
        {
            return $this->elem[$prop_name];
        }else{
            return $this->elem[$prop_name];
        }
    }


	function __set($prop_name, $prop_value)
	{	
	    if(array_key_exists($prop_name,$this->elem))
	    {
        	$this->elem[$prop_name] = $prop_value;
        	return true;
	    }else{
	        return false;
	    }
	}


	function db_insert($table)
	{
		$sql = "INSERT INTO ".$table;
		
		$set = "";
		$value = "";
		
		$array = $this->elem;
	
		while($bar = each($array))
		{		
			if(isset($bar["value"]))
			{
				if($set == "")
				{
					$set .= $bar["key"];
					$value .= "'". mysql_escape_string($bar["value"]) . "'";
				}else{
					$set .= ", " . $bar["key"];
					$value .= ", '". mysql_escape_string($bar["value"]) . "'";
				}
			}
		}
		
		$sql .= "(" . $set . ")VALUES(" . $value . ")";
		
		$query = @mysql_query($sql, $GLOBALS["conn"]);

		if($query)
		{
			return mysql_insert_id($GLOBALS["conn"]);
		}
		return false;
	}


	function db_update($table, $where)
	{
		$sql = "UPDATE ".$table." SET ";
		
		$set = "";
		
		$array = $this->elem;
	
		while($bar = each($array))
		{		
			if(isset($bar["value"]))
			{
				if($set == "")
					$set .= $bar["key"] . " = '" . mysql_escape_string($bar["value"]) . "'";
				else
					$set .= ", " . $bar["key"] . " = '" . mysql_escape_string($bar["value"]) . "'";
			}
		};

		if($where != "")
			$where = " WHERE " . $where;
		
		$sql .= $set . $where;

		$query = @mysql_query($sql, $GLOBALS["conn"]);

		return $query;
	}


	function db_delete($table, $where)
	{
		$sql = "DELETE FROM ".$table;
		
		if($where != "")
			$where = " WHERE " . $where;
		
		$sql .= $where;

		$query = @mysql_query($sql, $GLOBALS["conn"]);

		return $query;
	}


	function Populate($sql, $order = "1 DESC")
	{
		if($_GET["pag"] > 0)
			$this->pag = $_GET["pag"];
		
		$array = $this->elem;
	
		while($bar = each($array))
		{
			if($bar["value"] != "")
			{
				if(is_numeric($bar["value"]))
					$sql .= " AND " . $bar["key"] . " = '" . mysql_escape_string($bar["value"]) . "' ";
				else
					$sql .= " AND " . $this->like($bar["key"], $bar["value"]);
			}
		}
		
		$sql .= " ORDER BY " . $order;

		$query = @mysql_query($sql, $GLOBALS["conn"]);

	
		while($linha = mysql_fetch_array($query))
		{
			$dados[] = $this->stripslashes_deep($linha);			
		}

		$this->dados = $dados;
		
		mysql_free_result($query);
	}


	function PopulateObject($sql)
	{
		$array = $this->elem;
		
		$query = @mysql_query($sql, $GLOBALS["conn"]);

		if($rs = mysql_fetch_assoc($query))
		{
			while($bar = each($array))
			{		
				$array[$bar["key"]] = $this->trata_aspas(trim($rs[$bar["key"]]));
			}			
		}else{
			return false;
		}

		mysql_free_result($query);
		
		$this->elem = $array;
		
		return $this->elem;
	}


	function PopulateByPost()
	{
		$array = $this->elem;

		while($bar = each($array))
		{
			if(isset($_POST[$bar["key"]]))
				$array[$bar["key"]] = strip_tags(trim($_POST[$bar["key"]]));
				
			if(isset($_POST["html_" . $bar["key"]]))
				$array[$bar["key"]] = trim($_POST["html_" . $bar["key"]]);
		}
	
		$this->elem = $array;

		return $this->elem;
	}
	

	function PopulateByGet()
	{
		$array = $this->elem;

		while($bar = each($array))
		{
			if(isset($_GET[$bar["key"]]))
				$array[$bar["key"]] = strip_tags(trim($_GET[$bar["key"]]));
			
			if(isset($_GET["html_" . $bar["key"]]))
				$array[$bar["key"]] = trim($_GET["html_" . $bar["key"]]);
		}
		
		$this->elem = $array;
		
		return $this->elem;
	}


	function PopulateCombo($sql, $value = "")
	{
		$query = @mysql_query($sql, $GLOBALS["conn"]);

		while($rs = mysql_fetch_array($query))
		{
			$selected = "";
			
			if(is_array($value))
			{
				if(in_array($rs[0], $value))
					$selected = "selected";
			}else{
				if($value == $rs[0])
					$selected = "selected";
			}

			echo "<option value=\"".$rs[0]."\" ".$selected.">".$rs[1]."</option>";
		}

		mysql_free_result($query);
	}


	function like($campo, $valor)
	{
		$sql = "     replace(UCASE(".$campo."), 'ÁÉÍÓÚÀÈÌÒÙÃÕÂÊÎÔÛÄËÏÖÜÇ', 'AEIOUAEIOUAOAEIOOAEIOUC') 
			    LIKE 
				     replace(UCASE('%".mysql_escape_string($valor)."%'), 'ÁÉÍÓÚÀÈÌÒÙÃÕÂÊÎÔÛÄËÏÖÜÇ', 'AEIOUAEIOUAOAEIOOAEIOUC') ";
		return $sql;
	}


	function ConvertToPermalink($texto)
	{
		$valor = strtolower($texto);

		//Remove Caracteres Especiais
		$carac_especiais = array(
						'&quot;' => '',
						'!' => '',
						'@' => '',
						'#' => '',
						'$' => '',
						'%' => '',
						'^' => '',
						'&' => '',
						'*' => '',
						'(' => '',
						')' => '',
						'_' => '',
						'+' => '',
						'{' => '',
						'}' => '',
						'|' => '',
						':' => '',
						'"' => '',
						'<' => '',
						'>' => '',
						'?' => '',
						'[' => '',
						']' => '',
						'\\' => '',
						';' => '',
						"'" => '',
						',' => '',
						'/' => '',
						'*' => '',
						'+' => '',
						'~' => '',
						'`' => '',
						'=' => ''); 
	
		$valor = str_replace(array_keys($carac_especiais), array_values($carac_especiais), $valor); 
	
		//Remove Acentos
		$a = array(
			 "/ /" => "-",
			 "/[âãàáä]/" => "a",
			 "/[êèéë]/"  => "e",
			 "/[îíìï]/"  => "i",
			 "/[ôõòóö]/" => "o",
			 "/[ûúùü]/"  => "u",
			 "/ç/"       => "c");
			 
		$valor = preg_replace(array_keys($a), array_values($a), $valor);
	
		return $valor;
	}

	function prepara_data($data)
	{
		if($data != "")
		{
			$d1 = explode("/", $data);
			$d1 = implode("-",array_reverse($d1));
		}
		return $d1;
	}

	function trata_aspas($texto)
	{	
		return stripslashes($texto);
	}



	function stripslashes_deep($value)
	{
		$value = is_array($value) ?
					array_map(array($this, "stripslashes_deep"), $value) :
					stripslashes($value);
	
		return $value;
	}


	function Rs()
	{
		$this->cont = $this->cont + 1;
		
		if($this->reg_pag > 0)
		{
			if($this->cont <= $this->reg_pag)
			{
				if(!$this->dados[$this->pag + ($this->cont - 1)])
				{
					return false;
				}
				$dados = $this->dados[$this->pag + ($this->cont - 1)];
				return $dados;
			}else{
				return false;
			}
		}else{
			$dados = $this->dados[($this->cont - 1)];
			return $dados;
		}
	}


	function TotalRegistros()
	{
		return count($this->dados);
	}


	function TotalPaginas()
	{
		if($this->reg_pag > 0)
			return ceil($this->TotalRegistros()/$this->reg_pag);
		else
			return 1;
	}


	function PaginaAtual()
	{
		if($this->reg_pag > 0)
		{
			for($x=0;$x<=$this->TotalPaginas();$x++)
			{
				$pag = (($x-1) * $this->reg_pag);
				if($this->pag == $pag)
					return $x;
			}
		}
		return 1;
	}


	function TemProximo()
	{
		if($this->reg_pag > 0)
		{
			if(($this->pag + $this->reg_pag) < $this->TotalRegistros())
				return true;
			else
				return false;
		}else{
			return false;
		}
	}



	function TemAnterior()
	{
		if($this->pag > 1)
			return true;
		else
			return false;
	}


	function LinkProximo()
	{
		return($_SERVER["PHP_SELF"]."?pag=".($this->pag + $this->reg_pag));
	}


	function LinkAnterior()
	{
		return($_SERVER["PHP_SELF"]."?pag=".($this->pag - $this->reg_pag));
	}


	function PagAnterior()
	{
		$link = ((($this->pag)-($this->cont-1))-$this->reg_pag);
		$link = $this->pag-($this->cont-1);
		$link = $link - $this->reg_pag;
		return($link);
	}


	function PagProximo()
	{
		return($this->pag);
	}
}

function cryptPassword($password)
{
	if($password != "")
		return mysql_escape_string(base64_encode(pack("H*", sha1(utf8_encode($password)))));
}

?>