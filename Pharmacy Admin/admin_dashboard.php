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
   
    <title>Admin Dashboard </title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a href=""><img src="Images/logo.png" height="" width=""></a>
        </li>
       
       
      </ul>
  
      
     
  
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="pharmacy_dashboard_profile.html">Logout <span class="sr-only">(current)</span></a>
    </li>
  </ul>
  
    </div>

  </nav>

    
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="p-5">
                  <h1 class="fw-normal mb-5" style="color: rgb(4, 1, 37);">Pharmacies</h1>
                  <table class="table table-hover">
                    <thead class="table table-dark">
                      <tr >
                        <th scope="col">ID</th>
                        <th scope="col">Pharmacy Name</th>
                        <th scope="col">Pharmacy Email</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Verification Status</th>
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
                                $sql = "SELECT * from pharmacy_info";
                                $result = mysqli_query($con, $sql);
                                
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr><td>".$row['ph_num'] . "</td>" . "<td>".$row['Pname'] . "</td>" . "<td>".$row['email'] . "</td>". "<td>".$row['uname'] . "</td>" . "<td>".$row['license'] . "</td>
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






































