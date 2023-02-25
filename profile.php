<?php
$servername = "localhost";
$username = "user";
$password = "123";
$dbname = "medicine";

//create connection
try{
    $con = mysqli_connect($servername, $username, $password);
    echo "Connected succesfully";
}catch(mysqli_sql_exception $e){
    die("Conection error." . $e->getMessage());
}
echo "<br>";



// create table
try{
    $con1 = mysqli_connect($servername, $username, $password,$dbname);
    $sql = "CREATE TABLE pharmacy_info (
        Pname varchar(30),
        address  varchar(50),
        ph_num int(10),
        email varchar(30),
        website varchar(50),
        operatingHrs varchar(20),
        license varchar(50),
        uname varchar(30),
        uaddress  varchar(50),
        uph_num int(10),
        uemail varchar(30),
        nic varchar(15)
    ) ";
    mysqli_query($con1, $sql);
    echo "Table created succesfully";
}catch(mysqli_sql_exception $e){
    die("Table creation error." . $e->getMessage());
}
echo "<br>";
try{
    $con1 = mysqli_connect($servername, $username, $password,$dbname);
    $sql = "insert into pharmacy_info values ('P1','Colombo',011234567,'someone@example.com','www.website.com','9.00-17.00','www.liscence.com','Owner','Colombo','0771234567','owner@email.com','1234567890')    ";
    mysqli_query($con1, $sql);
    echo "Table created succesfully";
}catch(mysqli_sql_exception $e){
    die("Table creation error." . $e->getMessage());
}
// echo "<br>";
//connection close
mysqli_close($con);
?>