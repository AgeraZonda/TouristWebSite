<style type="text/css">

.button {

    width:50px; 
     background-image:url(""); 
       border:0; 
     font:Tahoma; 
     color:#FFFFFF;
     height:20px;
    background: #428BCA;
    color: #fff;
    font-family: Sans-serif;
    font-size: 20px;
    height: 40px;
    width: 100px;
    line-height: 30px;
    margin-bottom: 10px;
    text-align: center;
    border: 0;
    transition: all 0.3s ease 0s;
    border-radius: 5px;
}

.button:hover {
  background: #CF4647;
}
</style><table width="195px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td background="images/bgn_timkiem2.png" height="35px"><div align="left" style="color:#fff; font-family:Tahoma; font-size: 14px; padding-left:30px;">TÌM KIẾM </div></td>
  </tr>
 <form action="?b=tk" method="GET" onsubmit="return tk(text_content.value);">    
 <input type="hidden" name="b" value="tk" />
  <tr>
    <td background="images/toplist-content.gif" style="border-left: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC; background-repeat:repeat-x">
    <div align="left" style="padding-top:5px; height:20px">Nhập từ khóa cần tìm:</div>
    <div style="padding-top:5px; padding-bottom:3px" align="center">    
      <p>
        <input type="text" name="text_content" id="text_content" class="timkiem-textbox" maxlength="70" style="height:18px; border:1px solid #999; width:165px">
      </p>
    </div></td>
  </tr>
  <tr>    
    <td height="30" align="center" style="border-left: 1px solid #CCCCCC;border-right: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC"><span style="border-bottom:5px">
      <input  type="submit" value="Tìm" class="button" />
      
    </span></td>    
  </tr> 
  </form>  
</table>
