<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f2f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .maincon {
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      padding: 30px;
      position: relative;
    }

    
.secon{
   background: white;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      padding: 30px;
      position: relative;
     display:none;

}
    button{
     width: 310px;
     height: 30px;
      background: #4f46e5;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s ease-in-out;
    }
    input{
       padding: 15px;
        width: 310px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    #signin{
      color: #4f46e5;
      text-decoration: underline;


    }

    #foruse{
      margin-left:40px;
    }
    </style>
</head>
<body>


<div class="maincon" id="form">
     <h1>User SignUp</h1>

     <form action="" method="post">
      <input type="text" placeholder="Full Name" name="name" required/><br><br>
      <input type="email" placeholder="Email" name="email"required/><br><br>
      <input type="password" placeholder="Password" name="pass" required/><br><br>
      <button type="submit" id="signup" name="signup">Sign Up</button><br><br>
      <div id="foruse">
            Already have an account? <label for="" id="signin">Sign In</label> 

      </div>
  

        </form>
</div>


<div class="secon" id="formin">

<h1>User SignIn</h1>
 <form action="" method="post">
      
      <input type="email" placeholder="Email" name="vemail" required/><br><br>
      <input type="password" placeholder="Password" name="vpass"><br><br>
      
     <button type="submit" name="signin" >Sign In</button>

        </form>


</div>



<script>

  var form=document.getElementById('form');
  var signin=document.getElementById('signin');
  var formin=document.getElementById('formin');

  signin.addEventListener('click', ()=>{

    form.style.display='none';
    formin.style.display='block';

  })

 

</script>

    
<?php
//this code write for get value from input box and  stor on the variable //

if(isset($_POST['signup']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
//to conect mysql server to databace //
 $con = mysqli_connect('localhost', 'root', '', 'dataline');
//write a query to insert the value in table form input//
$q="insert into users values('$name','$email','$pass')";
//excutie the query written above to finally insert the record in the table 'useres' //
$rec=mysqli_query($con,$q);

echo"sighnup complete!";
    mysqli_close($con);
}


if(isset($_POST['signin']))
{

$email=$_POST['vemail'];
$pass=$_POST['vpass'];



$con=mysqli_connect('localhost', 'root', '', 'dataline');

$q="select * from users where email = '$email' and password ='$pass'";

$rec =mysqli_query($con,$q);



 if (mysqli_num_rows($rec) > 0)
{
  echo'recourd found!';
}
else
{
  echo'recourd not found!';

}

mysqli_close($con);



}
 
 
?>






</body>
</html>