<?php
 ini_set('display_errors', 0);
if(!isset($_SESSION))
	session_start();
	$user=$_SESSION["user"];
	$title="Tuan Anh Tourist";
?> 
<?php include "connect.php"; include "function.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php
echo "Tuan Anh Tourist"
?></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/menu.css" />
<script language="JavaScript" type="text/JavaScript" src="quanly.js"></script>
<!--<script language="JavaScript" type="text/JavaScript" src="Scripts/kt-trinhduyet.js"></script>-->
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="ajax.js"></script>
<script language="JavaScript" type="text/JavaScript" src="Scripts/avim.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">
:root {
  /* if u want to change the color of
   * the ripple change this value
  */
  --color-ripple: rgba(255,255,255,0.8);
}

body {
  background: #36353c;
}

.container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 50px;
  width: 200px;
  margin: auto;
}
*[data-animation="ripple"] {
  position: relative; /*Position relative is required*/
  height: 100%;
  width: 100%;
  display: block;
  outline: none;
  padding: 20px;
  color: #fff;
  text-transform: uppercase;
  background: linear-gradient(135deg, #e570e7 0%,#79f1fc 100%);
  box-sizing: border-box;
  text-align: center;
  line-height: 14px;
  font-family: roboto, helvetica;
  font-weight: 200;
  letter-spacing: 1px;
  text-decoration: none;
  box-shadow: 0 5px 3px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  /*border-radius: 50px;*/
  -webkit-tap-highlight-color: transparent;
}

*[data-animation="ripple"]:focus {
  outline: none;
}

*[data-animation="ripple"]::selection {
  background: transparent;
  pointer-events: none;
}
button {

    width:80px; 
     background-image:url(""); 
       border:0; 
     font:Tahoma; 
     color:#FFFFFF;
     height:26px;
    background: #428BCA;
    color: #fff;
    font-family: Sans-serif;
    font-size: 20px;
    height: 60px;
    width: 150px;
    line-height: 60px;
    margin: 25px 25px;
    text-align: center;
    border: 0;
    transition: all 0.3s ease 0s;
}

button:hover {
  background: #CF4647;
}
</style>
<style>
.mySlides {display:none;}

</style>
<body onload="kt()" style = "background-image: url(backkkk.png);">
 <script type="text/javascript" src="Scripts/tooltip/wz_tooltip.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_balloon.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_centerwindow.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_followscroll.js"></script>
<script src="myDirectory/touchMyRipple.js"></script>

<div id="container" style = "max-width: 960px;-webkit-border-radius: 5px;
border-radius: 5px; 
-webkit-box-shadow: 0 0 30px -1px #BD0000;
box-shadow: 0 0 30px -1px #BD0000;">
<div>
	<img src="background.png" style="max-width: 960px" alt="" />
</div>

	

	
    <div id="menu-ngang">      
	 <?php include "menu-top.php"; ?>   
    </div>
    <br clear="all" />
      
    <div id="main" style="margin-top:0px;">
    	<div id="content-left">
        <?php include "include/menu-left-or.php";?>        

        
        </div>
        
        <div id="content-right">
        <?php
        if(isset($_SESSION["success"])){
            include "include/login_success.php";
        }
        else
            include "include/login.php";
        ?>
        <div style="height:5px"></div>
        <?php include "timkiem.php"; ?>		
        <div style="height:5px"></div>
        <?php include "include/menu-giohang.php"; ?>	
        <div style="height:5px"></div> 
        <?php include "include/hotro.php"; ?> 
  
                   	         	  
        </div>
        	
        <div id="content">
		<?php
		$file="include/content.php";
		//$file="include/cont.php";
		if(isset($_REQUEST["b"]))
		{
			$b=$_REQUEST["b"];
			if($b=="gioithieu")
				$file="include/gioithieu.php";
			if($b=="lienhe")
				$file="include/lienhe.php";				
			if($b=="huongdanmuahang")
				$file="include/huongdanmuahang.php";
			if($b=="ct")
				$file="include/chitiet.php";
			if($b=="ctm")
				$file="include/chitiet-menu.php";	
			if($b=="nsp")
				$file="include/nhomsp.php";
			if($b=="lsp")
				$file="include/loaisp.php";
			if($b=="tk")
				$file="include/result.php";
			if($b=="dk")
				$file="include/register.php";
			if($b=="cpw")
				$file="include/change-pw.php";
			//if($b=="rpw")
			//	$file="include/reset-pw.php";
			if($b=="showcart")
				$file="include/showcart.php";
			if($b=="gh")
				$file="include/giohang.php";				
			if($b=="pay")
				$file="include/thanhtoan.php";	
			if($b=="listcart")
				$file="include/cart.php";
			if($b=="m")
				$file="include/noidung-menu.php";
			if($b=="tintuc")
				$file="include/tintuc.php";	//tin tuc						
			if($b=="ttcn")
				$file="include/thongtincanhan.php";					
			if($b=="change")
				$file="include/change.php";									
			if($b=="pwr")
				$file="include/create-pass.php";
		}
		include "$file";
		
		?>
        </div>
    </div>
</div>
<div id="footer">
<?php include "include/footer.php"; ?>   
</div>
</body>
</html>