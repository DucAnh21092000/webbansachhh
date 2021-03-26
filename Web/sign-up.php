<!doctype html>
<html lang="en">

<head>
    <title>Trang Đăng ký</title>
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
            margin: 20px 0px 20px 480px;
            background-color: #ffffff;
            color:white;
            border-radius: 20px;
            
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
            padding: 12px 0px 12px 40px;
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
            background-position-y: -8px;
            background-position-x: -5px;
            padding: 12px 20px 12px 60px;
      }
      .phone{
          background-image: url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-phone-icon-png-image_5065646.jpg);
          background-size: 8%;
            background-repeat: no-repeat;
            background-position-y: 8px;
            background-position-x: 8px;
            padding: 12px 0px 12px 40px;}
    </style>
</head>

<body>
    

    <table class="table table-striped table-inverse table-responsive main_login" style="color: black; width:370px">
    <form action="./sign-up.php" method="POST">
    <tbody>
           <tr></tr>
            <tr class="col" style="height: 10px;">
                <td class="" style="width: 500px;">
                    <h3 class="text-center" style="color: black;">
                    CLASSY SIGN-UP FORM </h3>
                </td>
            </tr>
            <tr></tr>
            <tr class="col">
                <td class="">
                <div class="mb-3 ">
                <label id="full_name_label" for="full_name" style="width: 200px;"> <i class="fa fa-user-circle " aria-hidden="true"></i> Email :</label>
                    <input  type="email" name="email" id="input" class="form-control email" value="" required="required" title=""style="margin-right: 30px;" placeholder="Enter your email">
                
            </div>
                </td>
            </tr>      
            <tr></tr>
            <tr class="col">
                <td >
                    <div class="mb-3 ">
                        <label for=" " style="width: 200px "> <i class="fa fa-key" aria-hidden="true"></i>  Password</label>
                        <input type="password" class="form-control password" name="password" id=" " placeholder="Enter your password" style="margin-right: 30px;">
                    </div>
                </td>
            </tr>
            <tr></tr>
            <tr class="col">
                <td >
                    <div class="mb-3">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                        <label id="full_name_label" for="full_name" style="width: 200px;"> Full Name</label>
                        <div class="d-flex flex-row" style="align-items: center;" class="td-form">
                        
                        <input id="full_name" name="full_name" type="text" class="form-control user" style="margin-right: 30px;"  autocomplete="null" placeholder="Enter your full name"/>
                        </div>
                        
                    </div>
                </td>
            </tr>
          <tr></tr>
            <tr class="col">
                <td >
                    
                        <label id="phone_label" for="phone" style="width: 200px;"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone Number</label>
                        <input id="phone" name="phone" type="text" class="form-control phone" style="margin-right: 30px;" placeholder="Enter Phone Number" />

                </td>
            </tr>

            <tr class="col">
                <td class="d-flex flex-row " style="justify-content: space-around; ">
                    <button class="button" type="submit" class="btn btn-primary"  name="create">
                    Create
                    </button>
                </td>
            </tr>         
<?php
if(isset($_POST['create'])){
         $connect=mysqli_connect("localhost","root","","web_ban_sach");
         mysqli_set_charset($connect,"utf8");
 
    $password=addslashes(md5($_POST['password']));
    $fullname=addslashes($_POST['full_name']);
    $email   =addslashes($_POST['email']);
    $phone   =addslashes($_POST['phone']);

    $sql_sign_up=mysqli_query($connect,"Select * from `member` where email = '$email'");
    $member = mysqli_fetch_assoc($sql_sign_up);
    if($_POST['password']==null||$_POST['full_name']==null||$_POST['email']==null||$_POST['phone']==null){
       echo "<script>
       alert('Bạn chưa điền đủ thông tin !');
       </script>
       ";

   }
   else{
    if( $member['email']==$email) {
        echo "<script>
      confirm('Tài khoản đã tồn tại !');
            </script>   
        ";
        
    }
    else{
        $sql_insert= mysqli_query($connect,"INSERT INTO `member` (`id`, `fullname`, `password`, `phone`, `email`) VALUES (null,'$fullname','$password',$phone,'$email')");
        echo "<script>
        alert('Thêm tài khoản thành công !');
        window.location.replace('index.php');
        </script>
        ";  
            }
    }
?>
<?php }
?>
        </tbody>
    </form>
    </table>

  
    <b class="text-center" style="margin-top: 10px; margin-left: 400px;">Classy SIGN-UP Form . All rights reserved | Design by Anh.dd182330</b>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>