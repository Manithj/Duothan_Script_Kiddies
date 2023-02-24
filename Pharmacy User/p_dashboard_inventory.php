<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="Plugin/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <script src="JS\date.js"></script>
    <link rel="stylesheet" href="CSS/add_inventory.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
   
    <title>Pharmacy Dashboard Inventory Add New</title>
</head>
<body>

    
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="p-5">
                  <h1 class="fw-normal mb-5" style="color: rgb(4, 1, 37);">Inventory</h1>
                  <table class="table table-hover">
                    <thead class="table table-dark">
                      <tr >
                        <th scope="col">ID</th>
                        <th scope="col">Drug name</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">NDC</th>
                        <th scope="col">Expiration date</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit price</th>
                        <th scope="col">Actions</th>
                  
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr style="padding-left:2%;">
                        <td scope="row">0001/</th>
                        <td>ABC</td>
                        <td>EFG</td>
                        <td>HJI</td>
                        <td>EFG</td>
                        <td>03/03/2024</td>
                        <td>6</td>
                        <td>Rs.15.00</td>
                  
                        <td >
                  
                        <a target="_blank" href="edit_drug.html"> 
                        <button type="button" class="btn btn-success"  id="status">
                        <i class="bi bi-pen" id="check"></i>
                        </button>
                        </a>
                      
                        <a target="_blank" href="edit_drug.html"> 
                          <button type="button" class="btn btn-danger"  id="status">
                          <i class="bi bi-x-octagon" id="check"></i>
                          </button>
                          </a>
                  
                        </td>
                      </tr> -->
                      
                      <?php
                        $servername = "localhost";
                        $username = "user";
                        $password = "123";
                        $dbname="medicine";
                        //create connection
                        try{
                            $con = mysqli_connect($servername, $username, $password,$dbname);
                            // echo "Connected succesfully";
                        }catch(mysqli_sql_exception $e){
                            die("Conection error." . $e->getMessage());
                        }
                        echo "<br>";

                        if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }

                            else { //echo "Connected to mysql database. <br>"; 
                            }

                            
                            try{
                                $sql = "SELECT * from drug";
                                $result = mysqli_query($con, $sql);
                                
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr><td>".$row['id'] . "</td>" . "<td>".$row['dname'] . "</td>" . "<td>".$row['dmanu'] . "</td>". "<td>".$row['dsup'] . "</td>" . "<td>".$row['ndc'] . "</td>" . "<td>".$row['expdate'] . "</td>" . "<td>".$row['qty'] . "</td>" . "<td>".$row['uprice'] . "</td>
                                        <td >
                                        <a target='_blank' href='edit_drug.html'> 
                                        <button type='button' class='btn btn-success'  id='status'>
                                        <i class='bi bi-pen' id='check'></i>
                                        </button>
                                        </a>
                                      
                                        <a target='_blank' href='edit_drug.html'> 
                                          <button type='button' class='btn btn-danger'  id='status'>
                                          <i class='bi bi-x-octagon' id='check'></i>
                                          </button>
                                          </a>
                                  
                                        </td>
                                        
                                        </tr>";
                                    }
                                }else{
                                    echo "No data in the database";
                                }
                                
                            }catch(mysqli_sql_exception $e){
                                die("Data display error." . $e->getMessage());
                            }
                            echo "</table>";
                            $con->close();
                          ?>
                    </tbody>
                  </table> 
                </div>
              </div>
                 
            </div>
          </div>
        </div>
      </div>

    
</body>
</html>