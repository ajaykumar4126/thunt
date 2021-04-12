<?php
$res = "";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    if($_POST['mykey'] == "akKJ234*&POnsdf38*@#3")
    {
      $file_name = $_FILES[ 'data' ][ 'name' ];
      $file_type = $_FILES[ 'data' ][ 'type' ];

      
      if($file_type == "image/jpeg" or $file_type == "image/jpg" or $file_type == "image/png")
      {
        $target_path  = "uploads/";
        $target_path .= basename($file_name);


        if(!move_uploaded_file( $_FILES[ 'data' ][ 'tmp_name' ], $target_path )) 
        {

            $res =  '<pre>Your profile was not uploaded.</pre>';
        }
        else 
        {
            $res = "your file succesfully uploaded!";
        }
      }
      else
      {
        $res = "please select only jpg or png";
      }
    }
    else
    {
      $res = "incorrect key";
    }

}

?> 
<!DOCTYPEhtml>
<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Treasure Hunt</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user_1"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in_1"></span></a></li>
    </ul>
  </div>
</nav>
</div>

<div class="container">
<div class="row">
<div class="col-sm-12" style="text-align: justify">

<h1> Please upload images for keys...</h1>

<div class="row">

<div class="col-sm-4"></div>

<div class="col-sm-4">
<form action="K4_3erIo97Q.php" method="POST" enctype = "multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Upload Image (supports only jpg, png)</label>
    <input type="file" class="form-control" name="data" required="required" />
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Key 1</label>
    <input type="text" class="form-control" name="mykey" placeholder="Enter Key" required="required" />
  </div>
  
  <input type="submit" class="btn btn-primary" value="UPLOAD"/>

</form>
</div>


</div>
</div>


</div>
<h3><?php echo $res; ?></h3>

</body>
</html>