<?php 
		
       $pdo = null;
       function connect_to_db()
       {
       	    $dbengine   = 'mysql';
            $dbhost     = 'localhost';
            $dbuser     = 'root';
            $dbpassword = '58092952';
            $dbname     = 'progpresent';

            try{ 
                $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                return $pdo;
            }
            catch (PDOExeption $e){
            	$e->getMessage();
            }
       }
       

?>

