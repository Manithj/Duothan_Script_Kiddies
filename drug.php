<?php
$servername = "localhost";
$username = "user";
$password = "123";
$dbname="medicine";
//create connection
try{
    $con = mysqli_connect($servername, $username, $password,$dbname);
    echo "Connected succesfully";
}catch(mysqli_sql_exception $e){
    die("Conection error." . $e->getMessage());
}
echo "<br>";

// database create
try{
    $sql = "create database medicine";
    mysqli_query($con, $sql);
    echo "Database created succesfully";
}catch(mysqli_sql_exception $e){
    die("Database creation error." . $e->getMessage());
}
echo "<br>";

//create table
try{
    $con1 = mysqli_connect($servername, $username, $password,"medicine");
    $sql = "create table drug (id int (10) primary key, dname varchar(25), dmanu varchar(25), dsup varchar(25), ndc varchar(13), expdate date, qty int(5), uprice int(5));    ";
    mysqli_query($con1, $sql);
    echo "Table created succesfully";
}catch(mysqli_sql_exception $e){
    die("Table creation error." . $e->getMessage());
}
echo "<br>";
try{
        $sql = "insert into drug (dname,dmanu,dsup,ndc,expdate,qty,uprice) values ('Vit C','SPC','Supplier','ABC-123','2023-02-05',10,1500);        ";
        mysqli_query($con, $sql);
        echo "Database created succesfully";
    }catch(mysqli_sql_exception $e){
        die("Database creation error." . $e->getMessage());
    }

//connection close
mysqli_close($con);
?>