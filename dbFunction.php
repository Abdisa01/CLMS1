
    <?php  
    include('dbConnect.php');  
    session_start();  
        class dbFunction {  
                
            function __construct() {  
                  
                // connecting to database  
                $db = new dbConnect();;  
                   
            }  
            // destructor  
            function __destruct() {  
                  
            }  
            public function UserRegister($fname,$lname,$gender,$usertype,$org,$username,$password,$email,$phone,$image){  
                    $password = md5($password);  
                    $qr = mysql_query("INSERT INTO user(f_name,l_name,gender,usertype,organization,username,password,email,phone,p_picture)
					       values('".$fname."','".$lname."','".$gender."','".$usertype."',,'".$org."',,'".$username."',,'".$password."',,'".$email."',,'".$phone."',,'".$image."')") or die(mysql_error());  
                    return $qr;  
                   
            }  
            
    ?>  