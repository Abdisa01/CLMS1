
    <?php 
	     $DB_HOST='localhost';  
         $DB_USER='root';  
         $DB_PASSWORD='';      
        class dbConnect {  
            function __construct() {  
                require_once('config.php');  
                $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);  
                mysql_select_db(CLMS, $conn);
                if(!$conn)// testing the connection  
                {  
                    die ("Cannot connect to the database");  
                }   
                return $conn;  
            }  
            public function Close(){  
                mysql_close();  
            }  
        }  
    ?>  
