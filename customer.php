<?php
   include ("connection.php");
   $query = "SELECT * FROM transferring";
  $result = $conn->query($query);
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <style>
      .table__title{
    text-align: center;
    width: 100%;
}
td {
    background-color: #E4F5D4;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    font-family:Courier New;
font-size:15px;
}

td {
    font-weight: lighter;
}

.const__table {
    margin-left: auto;
    margin-right: auto;
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.lamp{
    margin-top:20px;
    padding: 5px;
}
body{
    background: url(yellow.jpg);
 
}
.navbar1{
  float:right;
}
.navbar2{
  font-family:Courier New;
}

      </style>
<body>
   
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header navbar2">
      <a class="navbar-brand" href="#"><b>SPARKS BANKING</b></a>
    </div>
    <div class="navbar1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">    <span class="glyphicon glyphicon-home"></span>
      <b>    Home</b>
</a></li> 
 <li class="active"><a href="history.php">     <span class="glyphicon glyphicon-sort"></span>
 <b> Tranfer History</b>
</a></li>

   
    </ul>
  </div>
</nav>

<section class="table" id="table">
                <div class="table__container ">
                    <h1 class="table__title ">Customer's Information</h1>
                    <table class="const__table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Account Number</th>

                            <th>E-mail</th>
                            <th>Address</th>

                            <th>Balance</th>
                            

                         
                        </tr>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['ID'];?></td>
                                <td><?php echo $rows['Name'];?></td>
                                <td><?php echo $rows['Account_number'];?></td>

                                <td><?php echo $rows['E-mail'];?></td>
                                <td><?php echo $rows['Address'];?></td>

                                <td><?php echo $rows['Balance'];?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
             
                </div>
               
            </section>
           

</body>
</html>