<?php 
	include_once('ketnoi2.php');
	//get input
	$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"] : 0;
	if ($id_dm <  1) return ;
	//tao sql
	$sql = "select * from dmsanpham 
	where id_dm={$id_dm}";
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
			<h1>Xóa danh mục tin bài</h1>
			<br/>
			<form class="form" action="xoadm_exec.php" method="post">
				<input type="hidden" name="id_dm" value="<?php echo $result["id_dm"]?>"/>
				<label>Tên danh mục sản phẩm</label> <?php echo $result["ten_dm"]?>
				<div class="clearfix"></div>
				<button >OK</button>
			</form>
			<br/>
			<br/>
		</div>
</body>
</html>