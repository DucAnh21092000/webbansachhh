<!doctype html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {  
            height: 100%;
            width: fit-content;
            position: relative;
            background-size: 100%;
            background-repeat: no-repeat;
            background-image: url(./image/bg-01.jpg);
        }
        
        .main_login {
            margin: 100px 0px 20px 480px;
            background-color: #ffffff;
            color:white;
            border-radius: 25px;
            
        }
        
        .form-group {
            width: 400px;
        }
        .button{ 
        background-image: url(./image/bg-01.jpg);
        width: 300px;
        border-radius: 30px;
        }
        .circle {
            background: #f363b7;
            border-radius: 50%;
            height: 2.2em;
            width: 2.2em;
            border: none;
        }
        .td-form{
            border-color: navy;
        }
        .user{
            background-image: url(https://png.pngtree.com/png-clipart/20191121/original/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_5089976.jpg);
            background-size: 8%;
            background-repeat: no-repeat;
            background-position-x: 10px;
            background-position-y: 5px;
            padding: 12px 0px 12px 80px;
        }
        .email{
            background-image :url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-email-icon-png-image_5065641.jpg);
            background-size: 8%;
            background-repeat: no-repeat;
            background-position-x: 10px;
            background-position-y: 5px;
            padding: 12px 10px 12px 60px;}
        .password{
            background-image: url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-circle-password-icon-vectors-png-image_5053796.jpg);
            background-size: 17%;
            background-repeat: no-repeat;
            background-position-y: -14px;
            background-position-x: -5px;
            padding: 12px 20px 12px 60px;
      }
      .phone{
          background-image: url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-phone-icon-png-image_5065646.jpg);
          background-size: 6%;
            background-repeat: no-repeat;
            background-position-y: 8px;
            background-position-x: 8px;
            padding: 12px 0px 12px 40px;}
            .sign-up:hover{
             text-decoration: none;
             color: red;
            }
            
    </style>
</head>

<body>
    <table class="table table-striped table-inverse table-responsive main_login" style="color:black; width:450px">
        <tbody>
            <form method="post" action="./update.php">
            <tr></tr>
            <tr class="col">
                <td class="" style="width: 500px;">
                    <h4 class="text-center">
                    CLASSY UPDATE PASSWORD FORM </h4>
                </td>
            </tr> 
            <tr></tr> 
            <tr class="col">
                    <td class="">
                        <div class="form-group mb-3" >
                            <label for="exampleInputEmail1" style="width:200px;"><i class="fa fa-user" aria-hidden="true"></i> Email </label>
                            <input type="email" class="form-control user"  id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email " name="email" >
                          
                        </div>
                          <small id="emailHelp " class="form-text text-muted ">We'll never share your email with anyone else.</small>
                    </td>
                </tr>
                <tr></tr>
                <tr class="col">
                    <td class="">
                        <div class="form-group mb-3" >
                            <label for="exampleInputPassword1 " style="width:200px"><i class="fa fa-key" aria-hidden="true"></i> Password</label>
                            <input type="password" class="form-control password " id="exampleInputPassword1 " placeholder="Enter password " name="password">
                        </div>
                    </td>
                </tr>
                <tr class="col">
                    <td class="">
                        <div class="form-group mb-3" >      
                            <label for="exampleInputPassword1 " style="width:200px"><i class="fa fa-key" aria-hidden="true"></i> New Password</label>
                            <input type="password" class="form-control password " id="exampleInputPassword1 " placeholder="Enter new password " name="password_new">
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr class="col">

                    <td class=" text-center">
                       
                        <button type="submit" class="btn button" name="login">Submit</button>
                    </td>
                </tr>
                <tr></tr>
                </tr>
          

                <tr><td><center>
                <a class="sign-up" href="index.php">If you have account ? Click here  </a>
                </center>
                        
                        </td></tr>
                
            

            </form>
            <?php
if(isset($_POST['login'])){
    session_start();
         $connect=mysqli_connect("localhost","root","","web_ban_sach");
         mysqli_set_charset($connect,"utf8");
    $password= addslashes($_POST['password']);
    $password_md5= addslashes(md5($_POST['password']));
    $email   =addslashes($_POST['email']);
    $password_new = addslashes(md5($_POST['password_new']));
    $sql_sign_in=mysqli_query($connect,"Select * from `member` where email = '$email' and password = '".$password_md5."'");
    $sql_sign_in_md5=mysqli_query($connect,"Select * from `member` where email = '$email' and password = '".$password."'");
    $member_md5=mysqli_fetch_assoc($sql_sign_in_md5);
    $member = mysqli_fetch_assoc($sql_sign_in);         
    
    if($_POST['email']==null||$_POST['password']==null||$_POST['password_new']==null){
       echo "<script>
       alert('Bạn chưa điền đủ thông tin !');
       </script>
       ";

   }
   else{
    if( ($member_md5['email']==$email&&$member_md5['password']==$password)||($member['email']==$email&&$member['password']==$password_md5)) {
        if($password_new==$password_md5||$password_new==$password){
            echo "<script>
            alert('Mật khẩu mới phải khác mật khẩu cũ !');
            </script>
            ";  
        }
        else{
        $sql_update=mysqli_query($connect,"UPDATE `member` SET `password`='".$password_new."' where email='".$email."'");
       echo "<script>
       alert('Thay đổi mật khẩu thành công !');
       </script>
       ";  }
   
    }
    else{
       
        echo "<script>
        alert('Thông tin vừa nhập không chính xác!');
        </script>
        ";  
            }
    }
?>
<?php }
?>
        </tbody>
    </table>
    <b class="text-center" style="margin-top: 0px; margin-left: 460px;">Classy Update Form . All rights reserved | Design by Anh.dd182330</b>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>
