
<div><table width="560" border="0" cellspacing="0" cellpadding="0">
    <tr>
    
    <div class="w3-content w3-section" style="max-width:560px">
    <img class="mySlides w3-animate-top" src="images/new/15109545_1151605818263972_5992066859633853550_n.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/new/22089855_1471692569588627_4895845703403841944_n.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/new/22496077_1485272718230612_9214891400409532375_o.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>
  </tr>
</table>
<?php	
	$sql2="select * from loaisanpham where id_nhom='1'";
	$kq2=mysql_query($sql2);
	while($r2=mysql_fetch_array($kq2))
	{
		$id_loai=$r2["id_loai"];$tenloaisp=$r2["tenloaisp"];
		$query="select count(*) from sanpham where ghichu='new'";			
		$kq_query=mysql_query($query);
		$r_query=mysql_fetch_array($kq_query);
		$n_query=$r_query[0];
		if($n_query==0){	echo "";}
		else{

?>	
<table width="760" border="0" cellspacing="0" cellpadding="0">
  <tr>	
    <td style="  padding-left:5px; width:550px; height:30px ;/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff3030+0,ea7b3f+100 */
background: rgb(255,48,48); /* Old browsers */
background: -moz-linear-gradient(left, rgba(255,48,48,1) 0%, rgba(234,123,63,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, rgba(255,48,48,1) 0%,rgba(234,123,63,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, rgba(255,48,48,1) 0%,rgba(234,123,63,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3030', endColorstr='#ea7b3f',GradientType=1 ); /* IE6-9 */" background="images/bg_tieude3.jpg"><a href="?b=lsp&idl=<?php echo $id_loai; ?>" style="color: #FFF; font-size:14px; font-weight:bold"><img src="images/new-icon.png" /><?php echo $tenloaisp;?></a>
  </tr> 
  <tr>
  	<td align="center" style="padding-left:5px;">
<?php	
	$sql3="select * from sanpham where id_loai=$id_loai and (ghichu='new' ) order by rand() limit 0,3";
	$kq3=mysql_query($sql3);
	while($r3=mysql_fetch_array($kq3))
	{
		$id=$r3["id"];$tensp=$r3["tensp"];$hinh=$r3["hinh"];
		$gia=$r3["gia"];$gia2=number_format($gia,0,'','.');
		 $s=$gia2." VND";
		echo "<div class=divshow style = \"width : 270px \">
		<table width=175 height=220 border=0 cellspacing=0 cellpadding=0 background=\"images/box.gif\">
		  <tr>
			<td height=170><a href=?b=ct&id=$id><img src='sanpham/small/$hinh'  height=170 border=0> </a></td>
		  </tr>
		  <tr>
			<td height=25 style=\"font-size:14px; color:#F00\"><a href=?b=ct&id=$id class=a-m><strong>$tensp</strong></a></td>
		  </tr>
		  <tr>
			<td height=25>Giá: $s</td>
		  </tr>
		</table>		
		</div>";
	}
?>
	</td>
   </tr>
    <tr>
  	<td align="right" style="padding-right:10px; border-top:1px solid #999"><a href="?b=lsp&idl=<?php echo $id_loai; ?>">Xem toàn bộ sản phẩm...</a>    
    </td>
  </tr>
<?php	}
	}
?>
 
</table>
</div>			