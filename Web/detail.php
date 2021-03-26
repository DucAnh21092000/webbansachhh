
<!doctype html>
<html lang="en">
<?php
  session_start();
  ob_start();    
?>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/all.min.css" type="text/css">
    <style>
        /* X-Small devices (portrait phones, less than 576px) // No media query for `xs` since this is the default in Bootstrap // Small devices (landscape phones, 576px and up) */
        
        @media (min-width: 576px) and (max-width: 767.98px) {
          
        }
        /* Medium devices (tablets, 768px and up) */
        
        @media (min-width: 768px) and (max-width: 991.98px) {
           
        }
        /* Large devices (desktops, 992px and up)*/
        
        @media (min-width: 992px) and (max-width: 1199.98px) {
          
        }
        /* X-Large devices (large desktops, 1200px and up) */
        
        @media (min-width: 1200px) and (max-width: 1399.98px) {
           
        }
        /* XX-Large devices (larger desktops,
    1400px and up) */
        
        @media (min-width: 1400px) {
          
        }
    </style>
</head>

<body>
                    <!-- logo web  -->
                    <div>
             <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2020/TrangComicManga_main_1263x60.jpg" width="100%">
        </div>

                             <!-- menu --->                
         <div class=" top">
               <div class="text-danger d-flex flex-row top__shop-name">
                    Anh.dd20182330 
                </div>

                <div class="d-flex flex-row">
                    <form action="index.php" method="Post">
                            <button type="submit" name="log-out" class="btn_top">Đăng xuất</button>
                    </form>
                   
                    <form >
                            <button type="submit" class="btn_top"> Giỏ hàng</button>
                    </form>
                </div>

                <div>
                    <form action="product.php?user=<?=$_GET['user']?>&phone=<?=$_GET['phone']?>" method="post">
                        <input type="text" name="input_search" class="btn_top search">
                            <button type="submit" name="btn_search" class="btn btn-sm btn_top" style="margin-bottom: 5px;">
                            Tìm kiếm 
                            </button>
              
                    </form>
                </div>

                <div class="menu_translate d-flex flex-row">
                    <div style="color:orangered ">
                        Ngôn ngữ : &nbsp;
                    </div>
                        <div style="color:orangered " id="translate_select">
                        </div>
      
                            <script type="text/javascript" 
                             src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>
                                    <script type="text/javascript">
                                            function googleTranslateElementInit() {
                                                new google.translate.TranslateElement({pageLanguage: 'vi'}, 'translate_select');
                                                                       }
                                    </script>               

                </div>
         </div>
    <div class="menu-contact d-flex flex-row">
        <div class="menu-contact__menu-product">
            <div style="margin-bottom:5px" class="menu-product__show">
                <button type="submit" class="menu-product__btn"> 
                         <i class="fas fa-bars"></i>
                             Danh mục sản phẩm 
                         <i class="fas fa-2x fa-sort-down menu-product__btn-image"></i>
                 </button>
                 <div class="null"></div>
                
                <button type="submit" class="btn_menu"> 
                        <i class="fas fa-home"></i> 
                            Trang chủ
                </button>
                <div class="null"></div>
                
                <button type="submit" class="btn_menu">
                        <i class="fas fa-address-card"></i>
                            Liên hệ 
                </button>

            </div>
        </div>
        <div class="menu-contact__menuHotline">
             <button class="menu-contact__menuHotLine-btnMenu">
                HotLine : 0582.842.388 
             </button>
            
            <div class="null">
                 &nbsp; <!-- dau cach-->
            </div>

            <button class="menu-contact__menuHotLine-btnMenu">
                 Hỗ trợ trực tuyến
            </button>
            
            <div class="null">
                &nbsp;
            </div>
            
            <div class="text" style="margin-right: 10px;">
               <b> <?php echo "Xin chào ".$_SESSION['fullname']." ".$_SESSION['fullname_1']. " !" ?></b> 
            </div>
        </div>
    </div>  

    <div  class="d-flex flex-row menuBook"> 
         <ul class="menuBook__menu">
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__ info">
                    <button class="btn btn-primary menuList__info-btn"> 
                         Sách thiếu nhi 
                    </button>
                    
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="sr-only">Toggle dropdown</span> 
                     </button>
                    <div class="dropdown-menu ">
                        <form action="list.php?name='truyen tranh '" method="POST"> 
                        <button class="dropdown-item active " > Truyện tranh</button>
                        </form>
                        <button class="dropdown-item active " href="# ">Truyện cổ tích</button>
                        <button class="dropdown-item active " href="# ">Sách khám phá khoa học</button>
                        <button class="dropdown-item active " href="# ">Thơ thiếu nhi</button>
                        <button class="dropdown-item active " href="# ">Sách đố vui thông minh</button>
                        <button class="dropdown-item active " href="# ">Sách bách khoa tri thức cho bé </button>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info ">
                    <button class="btn btn-primary menuList__info-btn">Sách giáo dục</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item active " href="# ">Sách tiểu học</a>
                        <a class="dropdown-item active " href="# ">Sách trung học cơ sở </a>
                        <a class="dropdown-item active " href="# ">Sách trung học phổ thông </a>
                        <a class="dropdown-item active " href="# ">Sách đại học </a>
                    </div>
                </div>

            </li>

            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info ">
                    <button class="btn btn-primary menuList__info-btn">Sách lập trình</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item active " href="# ">Html & Css </a>
                        <a class="dropdown-item active " href="# ">Java</a>
                        <a class="dropdown-item active " href="# ">Python</a>
                        <a class="dropdown-item active " href="# ">Php</a>
                        <a class="dropdown-item active " href="# ">Nodle Js</a>
                        <a class="dropdown-item active " href="# ">SQL</a>
                        <a class="dropdown-item active " href="# "> C/C++</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                    <button class="btn btn-primary menuList__info-btn ">Truyện</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item active " href="# ">Truyện tranh</a>
                        <a class="dropdown-item active " href="# ">Truyện cổ tích</a>
                        <a class="dropdown-item active " href="# ">Truyện ngụ ngôn</a>
                        <a class="dropdown-item active " href="# ">Truyện ngôn tình</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                    <button class="btn btn-primary menuList__info-btn">Sách luyện thi</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item active " href="# ">Luyện thi toeic</a>
                        <a class="dropdown-item active " href="# ">Luyện thi đại học</a>
                        <a class="dropdown-item active " href="# ">Luyện thi vào THPT</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                    <button class="btn btn-primary menuList__info-btn ">Tài liệu tham khảo</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="sr-only">Toggle dropdown</span>
  
                     </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown">
                        <a class="dropdown-item active " href="# ">Tài liệu nước ngoài</a>
                        <a class="dropdown-item active " href="# ">Tài liệu trong nước</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                    <button class="btn btn-primary menuList__info-btn ">Sản phẩm khách hàng bán</button>
                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="sr-only">Toggle dropdown</span>
  
                     </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown">
                        <a class="dropdown-item active " href="# ">Danh sách sản phẩm</a>
                        <a class="dropdown-item active " href="# ">Đăng ký đăng bài</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">

                <button class="btn btn-primary menuList__info " type="button " data-toggle="collapse " data-target="#contentId " aria-expanded="false " aria-controls="contentId ">
                        Sách giảm giá    &nbsp; &nbsp; &nbsp; &nbsp; 
                    </button>

            </li>
            <li class="menuBook__menu-menuList">
                <button class="btn btn-primary menuList__info " type="button " name="menuList__info" data-toggle="collapse " data-target="#contentId " aria-expanded="false " aria-controls="contentId ">
                        Sách mới phát hành   &nbsp; &nbsp; 
                    </button>

            </li>
         
            
        </ul>
       
        <div style="background-color: aqua; flex-flow:wrap; width:100%;margin-top:7px">
      
       <?php
        $connect=mysqli_connect("localhost","root","","web_ban_sach");
        mysqli_set_charset($connect, "utf8");
        $sql_product= mysqli_query($connect,"Select * from `product` where id = ".$_GET['id']."");
                
        ?>
            <h1 class="text-center text-dark"> Chi tiết sản phẩm</h1>
                            <div class="d-flex  all_product"  style="padding: 30px;">
                 <?php while($product=mysqli_fetch_assoc($sql_product))
                {?>
          <div class="" style="height:321px; width:210px"> 
        <img src="<?=$product['image']?>"  style="height:321px; width:210px; border: 1px solid" >
          </div>
          <div style="margin:0px 0px 0px 150px; width:60%"><h3 class=" "><?=$product['name']?></h3>
          <div style="background:white;height:2px;width:100%;margin-top:10px;margin-bottom:10px"> &nbsp;</div>
          <div class="d-flex flex-row"  style="margin:20px 0px 0px 0px">
          <div style="height:fit-content; width:60%" class="d-flex flex-column">
          <li> Tác giả : <b><?=$product['author'] ?></b></li>
          <li>Nhà xuất bản : <b><?=$product['publishing_company']?></b></li>
          <li>Nhà phát hành : <b> <?=$product['publisher']?></b></li>
          <li>Số trang : <b><?=$product['number_of_page']?></b></li>
          <li>Hình thức : <b><?=$product['form']?></b></li>
          <li>Trọng lượng : <b><?=$product['weight']."&nbspg"?></b></li>
          <li>Kích thước : <b><?=$product['size']?></b></li>
        </div>          
          <div class="" style="height:271px; width:400px ;margin-left:100px; border:1px solid">
          <div class="container d-flex flex-column">
       <div class="d-flex flex-row">
       <p >Giá : &nbsp  &nbsp</p>
       <h5 class=""><?=$_SESSION['price']=$product['price'] ?>( Đã có VAT) </h5>
       </div>
       <form method="Post">
       <div class=" flex-row d-flex">
                <label for="input" class=""style="width:max-content" >Số lượng:</label>
                <input style="width:50px;height:20px;margin-left:10px" type="text" name="text"  class="form-control" title="">
      
        </div>
        <button name="cart" type="submit" class="btn btn-primary" style="margin-top:30px;width:200px"> <i style="margin-left:-27px" class="fa fa-cart-arrow-down" aria-hidden="true"></i> &nbsp Mua sản phẩm </button>
                       <?php 
                             if(isset($_POST['cart']))
                             {   $text=addslashes($_POST['text']);
                                $_SESSION['number']=$text;
                                 if($text==null){
                                         echo "<script>
                                                        alert('Mời bạn nhập số lượng sản phẩm muốn đặt mua !');
                                               </script>  
                             ";
                             }else{
                               
                                 echo "<script>
                                 window.location.replace('buy.php?id=".$_GET['id']."');
                                 </script>
                                 ";}
}
                       ?>
        </form>
        <form action="cart.php?id=<?=$_GET['id']?>">
             <button type="button" class="btn btn-primary" style="margin-top:30px;width:200px"> <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbspThêm vào giỏ hàng</button>
             <?php 
                             if(isset($_POST['cart']))
                             {   $text=addslashes($_POST['text']);
                                 
                                 if($text==null){
                                         echo "<script>
                                                        alert('Mời bạn nhập số lượng sản phẩm muốn đặt mua !');
                                               </script>  
                             ";
                             }else{
                                  $sql_order_detail=mysqli_query($connect,"insert into order_detail ");
                            
                            
                                  }
}
                       ?>
        </form>
       </div></div>
       
          </div>
      
          </div>
          
         
                         </div>
                         
                         <h4 class="text-center">Giới thiệu sách </h4>
                         
                        <p class="container"> <?=$product['info']?> </p>
          <?php } ?>
          
          <form method="Post" action="detail.php?id=<?=$_GET['id']?>&action=comment"> 
          <button type="submit" class="btn btn-primary" name="btn-submit"> Bình luận</button></br>
          </form>
 <div style="background:white;height:2px;width:100%;margin-top:10px;margin-bottom:10px"> &nbsp;</div>

<div class="d-flex flex-column">
<?php           
                
                switch ($_GET['action']) {
               
                case "comment" :   
               
                $sql_comment=mysqli_query($connect,"SELECT * FROM `comments` WHERE product_id=".$_GET['id']."");  
                $row = mysqli_num_rows($sql_comment);
                if($row==0){
                    echo "<p "."style="."margin-left:100px"."> Chưa  có bình luận nào ! </p>";
                    }
                else{
                    echo   "<p class="."container"." style="."margin-left: 200px; margin-right:200px"."> Tổng số comments :".$row."  </p>"; 
                }
                while ($comment=mysqli_fetch_assoc($sql_comment)) {
               ?>
<?php
echo "<div class="."d-flex flex-row"." style="."margin-bottom:10px".">";
echo "<b style="."margin-left:100px".">" .$comment['username_comment']."&nbsp &nbsp : &nbsp &nbsp"."</b> " . $comment['comments']."";
echo "</div>";
    
        }  
        
         ?>
</div> 

<form class="form-inline" style="margin-left: 100px;" method="POST"  action="detail.php?id=<?=$_GET['id']?>&action=comment">
<input class="form-control mr-sm-2" type="text" name="text_cmt" placeholder="Enter Your Comments ....." aria-label="Enter Your Comments .....">
<button class="btn btn-primary" type="submit" name="submit">Submit</button>      
<?php 
          
          if(isset($_POST['submit'])){
            $c= addslashes($_POST['text_cmt']);
            $id=$_GET['id'];
            $sql_cmt = mysqli_query($connect,"INSERT INTO `comments` (`id`, `product_id`,`username_comment`, `comments`) VALUES (null,$id,'".$_SESSION['fullname']."','$c');");
            echo "<script>
                 window.location.replace('detail.php?id=".$_GET['id']."&action=comment');  
                 </script>
                 ";
        }
            
          ?>                         
</form>
         

            
<?php break;
                 
                } ?>                
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>