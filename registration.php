 <?php
session_start();
$con = mysqli_connect('localhost','admin', 'Admin');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from username where name= '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg = "Insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successfull";
}

?>