hello world

<?php


$conn = mysqli_connect("localhost","root","","angular");
$info = json_decode(file_get_contents("php://input"));
if(count((array)($info)) > 0)
{
    $name = mysqli_real_escape_string($conn,$info->name);
    $email = mysqli_real_escape_string($conn,$info->email);
    $age = mysqli_real_escape_string($conn,$info->age);
    $query = "INSERT INTO insert_emp_info(name,email,age) VALUES ('$name','$email', '$age')";//INSERT QUERY
    if(mysqli_query($conn,$query))
    {
        alert ("DATA INSERTED SUCCESFULLY");
    }
    else
    {
        alert ("FAILED TO INSERT DATA");
    }



}
?>