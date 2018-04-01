<?php 
	include_once('ketnoi2.php');
	//get input
	$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : 0;
	if ($id_dm <  1) return ;
	//tao sql
	$sql = "select * from user 
	where id_user={$id_user}";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	$result = select_one($sql);
	//print_r($result);exit();
	if (!$result) return ;
	//print_r($result);exit();
?>
<!DOCTYPE >
<html  xml:lang="en" lang="en">
<head>
	<title>Cửa hàng sách online</title>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
</head>	
<body>
<div class="add">
			<h1>Xóa Tài Khoản</h1>
			<br/>
			<form class="form" action="xoauser_exec.php" method="post">
				<input type="hidden" name="id_user" value="<?php echo $result["id_user"]?>"/>
				<label>Tên danh mục sản phẩm</label> <?php echo $result["username"]?>
				<div class="clearfix"></div>
				<button >OK</button>
			</form>
			<br/>
			<br/>
		</div>
</body>
</html>