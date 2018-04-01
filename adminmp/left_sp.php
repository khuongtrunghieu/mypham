<div id="content-left">          
        <table width="215" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td class="menu" height="30"><div align="left" style="color:#FFF; font-family:Tahoma; font-size: 13px; font-weight:bold">QUẢN LÝ SẢN PHẨM:</div></td>
  </tr>
  <tr>
   <td height="50" style="padding-left:20px">
   <div align="left">
   <img align="absmiddle" src="../images/towred1-r.gif"><a href="themsp_moi.php" class="admin-menu-left"> Thêm sản phẩm mới.</a><br>
  <div style="height:10px"></div>
  <img align="absmiddle" src="../images/towred1-r.gif"><a href="#" class="admin-menu-left"> Danh sách sản phẩm</a>    
    </div>
   </td>   
  </tr>
  <tr>
    <td><script>
function danhmuc(j){

  objName = "danhmuc[" + j + "]";
  var obj=document.getElementById(objName);
//alert(objName);
var objImg = obj.parentNode.getElementsByTagName("img")[0];
objImg.src="../adminmp/img/expand_uf.gif";

  if(obj.style.display == "none"){
    obj.style.display = "block";
    objImg.src="../adminmp/img/expand_uf.gif";


  }else{
    obj.style.display = "none";
    objImg.src="../adminmp/img/expand_f.gif";
  }
}
</script>
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<div style="padding-left:20px;">
				<table border=0 cellspacing=0 cellpadding=0 >
					<tr>
						<td height=30px width=100%>
							<a onclick="danhmuc(1);"><img src="img\expand_f.gif" width=9 height=9 /></a>
							<img src="img\file_uf.gif" width=20 height=20 />
							<a style="color:#000000" onclick='danhmuc(1);' onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Danh mục sản phẩm</a>
						</td>	
					</tr>    
				</table>
			</div>
<table width=195 id='danhmuc[1]' style='display:none' border=0 cellspacing=0 cellpadding=0>
    <tr>
		<td>
			<div style="padding-left:40px">
				  <img src="img\file_c.gif" width=20 height=20 />
				  <a href=../adminmp/?m=sp&b=sp-list&idl=7 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Trang Điểm Nền</a>
			</div>
		</td>
	</tr>
    <tr>
		<td>
			<div style="padding-left:40px">
				  <img src="img\file_c.gif" width=20 height=20 />
				  <a href=../adminmp/?m=sp&b=sp-list&idl=6 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Trang Điển Điểm</a>
			</div>
		</td>
	</tr>
    <tr>
		<td>
			<div style="padding-left:40px">
				  <img src="img\file_c.gif" width=20 height=20 />
				  <a href=../adminmp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Mỹ Phẩm Tẩy Trang</a>
			</div>
		</td>
	</tr>
     <tr>
		<td>
			<div style="padding-left:40px">
				  <img src="img\file_c.gif" width=20 height=20 />
				  <a href=../adminmp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Dưỡng Da</a>
			</div>
		</td>
	</tr>
	 <tr>
		<td>
			<div style="padding-left:40px">
				  <img src="img\file_c.gif" width=20 height=20 />
				  <a href=../adminmp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Sản Phẩm Khác</a>
			</div>
		</td>
	</tr>
     
 
		</td>
	</tr>
</table>
</table>
</td>
  </tr>
</table>

        </div>