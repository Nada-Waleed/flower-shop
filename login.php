<?php
include "conn.php";
$msg='';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $secure_pwd = md5($password);

    $sql="SELECT * FROM login WHERE email= ?  AND password= ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$email,PDO::PARAM_STR);
    $stmt->bindParam(2,$secure_pwd,PDO::PARAM_STR); 
    $stmt->execute();
    $number_of_rows = $stmt->fetch(); 
    if($number_of_rows){
        $_SESSION['USER_LOGIN'] = $email;
        header('LOCATION:table.php');
    }else{
        $msg="wrong email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;600&family=Dancing+Script:wght@400;700&family=Lato:ital,wght@0,300;0,400;1,300&family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Playfair+Display:ital,wght@0,400;1,600&family=Roboto:ital,wght@0,300;1,100&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,800;1,200;1,400;1,500&family=Yanone+Kaffeesatz:wght@200;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

}
        body::after{
    content: "";
    width: 100%;
    height: 100%;
    background-color: #1b745e;
    position: absolute;
    z-index: -1;
    clip-path: circle(50% at right 70%);
}
.container{
    
    width:600px; 
    margin-top:-40px; 
    border-radius: 6px; ;  
     box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
}
    </style>
</head>
<body>
 
    <div class="container pt-5 pb-5" >
        <div class="form">
        <form method="POST" action="">
            <?php
            if($msg):  ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $msg?>
            </div>
           <?php endif?>

      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control in" id="exampleInputEmail1" name="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  
  <button type="submit" class="btn " name="login" style="background-color:#1b745e ;color:white;font-weight:bold;">Login</button>
</form>
<button type="submit" class="btn mt-3 " name="" style="background-color:#1b745e ;color:white;font-weight:bold;"><a href="index.php" style="text-decoration: none; color:azure">Home</a></button>

        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>