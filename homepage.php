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
  <style>
   
    .topic{
    margin-right:400px;
    margin-left:400px;
    margin-top:80px;
    background-color:tomato;
    padding:2px;
    padding-bottom:20px;
    font-family:Courier New;
    border-radius: 30px;
    }
    .topic1{
    margin-right:100px;
    margin-top:-300px;
    padding-top: 0px;
    float:right;
    }
    .button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 12px;}

.block:hover {
  background-color:yellow;
  color: black;
}
.image{
float:right;
margin-bottom:450px;
}

.down{
  margin-top:110px;
}
.navbar1{
  float:right;
}
.navbar2{
  font-family:Courier New;
}
.homepage{
  margin-top:-90px;
}





    </style>
</head>
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
<center>
<div class=" topic">
  <center>
<h2><b>Welcome to the sprak Bank</b></h2>
  <h4><b>Customer satisfaction is our Satisfaction!!</b></h4><br><br>

  <button class="button button4 block"><b>about us</b></button>
 <a href="contact.php"> <button class="button button4 block"><b>Contact us</b></button>

</a></center>
</div>
</center>









<div class="container line down">
  
  <div class="col-sm-6 line book">
    <center>
  <img src="book.jpg" alt="Italian Trulli" width=250px height=250px>
  <br>
  <a href="customer.php">
  <button class="button">customer list</button></center>
    </div></a>
    <div class="col-sm-6 line contacts">
      <center>
    <img src="contact.jpg" alt="Italian Trulli" width=250px height=250px>
    <br>
    <a href="forms.php">
    <button class="button">transfer money</button></a>
    </center>
    </div>

</div>




















</body>
</html>

