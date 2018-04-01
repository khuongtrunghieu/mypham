<?php
include_once('ketnoi2.php');
error_reporting(0);
//buoc 1 
   $id_dm=isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"]: 0;
  //$ten_sp = isset($_REQUEST["ten_sp"]) ? $_REQUEST["ten_sp"] : "";
	$id_sp = isset($_REQUEST["idSP"]) ? $_REQUEST["idSP"] : 0; 
	//buoc 2
	$sql1 = "select * from spham where idSP={$id_sp}";
	$product = select_one($sql1);
	$sql2 = "select * from danhmuc";
	$datas = select_list($sql2);
	//print_r($product);
	//buoc 3 output
?>  
<div class="container-fluid ">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          SỬA THÔNG SẢN PHẨM
      </h3> 
      <form role="form" class="content-add" action="suasach_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
           <input type="hidden" name="idSP"  value="<?php echo $product['idSP']?>"/>
          <label for="tensach">
            Tên sản phẩm
          </label>
          <input type="text" class="form-control" name="nameSP"  value="<?php echo $product['nameSP']?>"/>
        </div>
        <div class="form-group">
          <label for="giasach">
            Giá 
          </label>
          <input type="text" class="form-control" name="Gia"  value="<?php echo $product['Gia']?>"/>
        </div>
        <div class="form-group">
          <label>Danh Mục</label>
          <select name="id_dm">
            <option value="1">Trang Điểm Nền</option> 
            <option value="2">Trang Điểm Điểm</option> 
            <option value="3">Mỹ Phẩm Tẩy Trang</option> 
            <option value="4">Dưỡng Da</option> 
            <option value="5">Sản Phẩm Khác</option> 
            

          </select>
        </div>
        
        <div class="form-group">
          <label for="anh">
            Hình Ảnh
          </label> 
			<input type="file" name="HinhAnh" /><input type="hidden" name="HinhAnh" value="<?php echo $product['$upload_image']?>" /><?php  echo $product['HinhAnh'];?>
        </div>
        <div class="form-group">
          <label for="km">
            Số Lượng
          </label>
          <input type="text" class="form-control" name="SoLuong" value="<?php echo $product['SoLuong']?>" />
        </div>
		<div class="form-group">
          <label for="tt">
            Mô Tả
          </label>
          <input type="text" class="form-control" name="MoTa" value="<?php echo $product['MoTa']?>"/>
        </div>

        <button type="submit" class="btn btn-primary">
          Sửa
        </button>
        <button type="submit" class="btn btn-default">
        <a href="quantri.php?page_layout=danhsachsp">Bỏ Qua</a>
        </button>
      </form>
    </div>
  </div>
</div>
<script>
function boquaForm(){
	window.location = 'quantri.php?page_layout=danhsachsp';
	return false;
}
</script>