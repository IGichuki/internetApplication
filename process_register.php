

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="client";

try {
    $conn = new PDO("mysql:host=$servername;dbname=client", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  

try {
   
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);
        $firstname = $_POST["firstname"];
        $secondname = $_POST["secondname"];
        $email = $_POST["email"];
        $psw = $_POST["psw"];
        $pswrepeat = $_POST["pswrepeat"];
        $phoneNumber = $_POST["phoneNumber"];

       
        $stmt = $pdo->prepare("INSERT INTO `user_details` (`firstname`, `secondname`, `email`, `psw`, `psw_repeat`, `phoneNumber`) VALUES (:firstname, :secondname, :email, :psw, :pswrepeat, :phoneNumber)");

       
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':secondname', $secondname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':psw', $psw);
        $stmt->bindParam(':pswrepeat', $pswrepeat);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        
       

        
        $stmt->execute();

       
        echo " inserted successfully!"; 
    }
} 
catch (PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}


$pdo = null;
?>