<?php
include ('../connection.php');
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$query = "INSERT INTO `data`(name,email,password) VALUES('$name', '$email',  '$password') ";

$data = mysqli_query($conn, $query);

if($data){
echo "data inserted sucessfully";
}else{
    echo "no";
}
}
?>
    


</body>
</html>
