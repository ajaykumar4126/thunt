<?php

$res = "";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $key1 = $_POST['key1'];
    $key2 = $_POST['key2'];
    $key3 = $_POST['key3'];

    if($key1 == "akKJ234*&POnsdf38*@#3" AND $key2 == "b34*&POnsd2#322f38*@#3" AND $key3 == "caks234#24*098f38*@#3")
    {
        $res = "correct";
    }
    else
    {
        $res = "In correct Key";
    }
    
    if($res == "correct")
    {
        header("Location: happypage.php");
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
<div class="container" style="text-align: center">
<h3>Welcome to Treasure Hunt Enter three keys to open the door</h3>
</div>
<div class="container">
<div class="row">
    <div class="col-sm-8" style="text-align: center"><img src="img/door.png" style="height: 400px; width: 600px"></div>

    <div class="col-sm-4">
        
        <form action="icedoor.php" method="POST">
            

            <div class="row">
                    <div class="form-group">
                        <label for="">Enter Key 1</label>
                        <input type="text" class="form-control" name="key1">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="">Enter Key 2</label>
                        <input type="text" class="form-control" name="key2">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="">Enter Key 3</label>
                        <input type="text" class="form-control" name="key3">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="ENTER">
                    </div>
                </div>

                <div class="row">
                    <h4> <?php echo $res; ?> </h4>
                </div>


        
        </form>

    </div>
    
</div>
</div>


<script type="text/javascript" src="bootstrap/js/bootstrap.js" ></script>

</body>
</html>