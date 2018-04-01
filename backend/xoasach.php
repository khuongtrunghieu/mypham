<?php 
	session_start();
	include_once('ketnoi2.php');
	//get input
	$id_sp = isset($_REQUEST["idSP"]) ? $_REQUEST["idSP"] : 0;
	if ($id_sp <  1) return ;
	//tao sql
	$sql = "select * from spham 
	where id_sp={$id_sp}";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	$result = select_one($sql);
	//print_r($result);exit();
	if (!$result) return ;
	//print_r($result);exit();
?>
<div class="container-fluid ">
  <div class="row well">
    <div class="col-md-12">
			<h1>Xóa sản phẩm</h1>
			<br/>
			<form class="form" action="xoasach_exec.php" method="post">
				<input type="hidden" name="id_sp" value="<?php echo $result["idSP"]?>"/>
				 <table class="table table-bordered text-center">
				<thead>
				  <tr >
					<th class="text-center">Tên sản phẩm</th>
					<th class="text-center">Gía</th>
					<th class="text-center">Hình ảnh</th>
					<th class="text-center">Số lượng</th>
					<th class="text-center">Mô tả</th>
				
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>
						<?php echo $result['nameSP']?>
					</td>
					<td>
						<?php echo $result['Gia']?>
					</td>
					<td>
					  <?php echo $result['HinhAnh']?>
					</td>
					<td>
					<?php echo $result['SoLuong']?>
					</td>
					<td>
						<?php echo $result['MoTa']?>
					</td>
					
				  </tr>
				  
				</tbody>
			  </table>
				<button >OK</button>
				<button ><a href="quantri.php?page_layout=danhsachsp">Bỏ qua</a></button>
			</form>
	 </div>
  </div>
</div>