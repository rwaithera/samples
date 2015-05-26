<?php

class config
{
	private $hostname = "precise64";
  private $username = "root";
  private $password = "root";
  private $database = "OOP";

  private $conn;


  function connect(){

    try{
      if(!$this->con){
        $this->conn = mysql_connect($this->hostname, $this->username, $this->password) or die("cannot connect");
        echo "Connection successful!";
        if($conn)
        {
          $query = mysql_select_db($this->database,$conn) or die("cannot connect to db");
          if($query)
          {
            $this->con = true;

            return true;
          }else{
            return false;
          }
        } else{
          return false;
        }
      }else{
        return true;
      }
    }catch(Exception $exp){
      return $e;
    }
  }//end connect

  public function disconnect()
	{
    try{
			if($this->con){
				mysql_close($this->conn);
        $this->con = false;
			}
		}catch(Exception $e){
			return $e;
		}
	}//end disconnect
 }//end class

?>
