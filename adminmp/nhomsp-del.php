<?php
	$iddm=$_GET["idDM"];	
	$check=mysqli_query("select count(*) from danhmuc where id='$iddm'");
	$r=mysqli_fetch_array($check);
	$n=$r[0];
	if($n!=0)
		echo "<script>alert('Không thể xóa!! vì có loại sản phẩm thuộc nhóm sản phẩm này');window.location='../admindm/?m=mn&b=nhomsp-list';</script>";		
	else{
	$sql="delete from danhmuc where IdDM='$iddm'";
	$kq=mysqli_query($sql);
	if(!$kq)
		echo "<script>alert('Có lỗi trong khi xóa!!!');window.location='../adminmp/?m=mn&b=themnhom_sp';</script>";
	else
	{
		$n=mysqli_affected_rows();
		echo "<script>alert('Đã xóa');window.location='../adminmp/?m=mn&b=themnhom_sp';</script>";		
	}
	}

?>