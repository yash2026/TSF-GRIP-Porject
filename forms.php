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
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    .input-container {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }
    
    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white;
      min-width: 50px;
      text-align: center;
    }
    
    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }
    
    .input-field:focus {
      border: 2px solid dodgerblue;
    }
    
    /* Set a style for the submit button */
    .btn {
      background-color: green;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .block:hover {
  background-color:yellow;
  color: black;
}
.margin{
    margin-left: 40px;
} 
.font{
  color:white;
}
.form1{
 margin-left:300px;
 }

 .block:hover {
  background-color:yellow;
  color: black;
}
body{
    background: url(green-white.jpg);
 
}
font{
  color:;
}

.navbar1{
  float:right;
}

</style>
</head>
<body> 
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
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
<div class="container font">
 <center> <h3><b>Sparks Transfer Center</h3></b></center>
 <form action="formplace.php" method="POST">
   <div class="form-group col-md-6 form1">
      <label for="inputState"><h3><b>Sender</b></h3></label>
      <select id="inputState" class="form-control" name="sender_info">
        <option>From</option>
        <option>Raj kumar</option>
        <option>simran Jha </option>
        <option>Ram Prasad</option>
        <option> Shaam puri</option>
        <option>ravi bishnoi</option>
        <option>rani kaur</option>

        <option>aaporva Maheshwari</option>
        <option>krishna sharma</option>
        <option>Gaurav singh </option>
        <option>Akansha patel</option>
       
      </select>
    </div>
     <div class="form-group col-md-6 form1">
      <label for="inputState"><h3><b>Reciver</b></h3></label>
      <select id="inputState" class="form-control" name="reciver_info">
        <option>To</option>
        <option>Raj kumar</option>
        <option>Ram Prasad</option>
        

        <option>aaporva Maheshwari</option>
        <option>krishna sharma</option>
        <option>Gaurav singh </option>
        <option> Shaam puri</option>
        <option>ravi bishnoi</option>
        <option>rani kaur</option>
        <option>simran Jha </option>

        <option>Akansha patel</option>
      </select>

      <div class="form-group">
    <label for="email"><h3><b>Balance:</b></h3></label>
    <input  class="form-control" id="Balance" placeholder="Enter the amount to be Transfer" name="money_given">
  </div>






   <button type="submit" class="btn block">tranfer now</button>

    </div></form>

    
    </div>
    </body>
    </html>