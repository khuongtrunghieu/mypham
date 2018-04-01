<?php
include_once('ketnoi2.php');
//buoc 1 
	$id_dm = isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"] * 1 : 0; 
	//buoc 2
	$sql = "select * from danhmuc where IdDM={$id_dm}";
	$danhmuc = select_one($sql);
  if (isset($_POST["btn_submit"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $ten_danhmuc = $_POST["nameDM"];
    $sql = "UPDATE danhmuc SET nameDM = '$ten_danhmuc'";
  }
  ?>
 
<div class="container-fluid ">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          SỬA THÔNG TIN DANH MỤC
      </h3> 
      <form role="form" action="suadm_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group" >
		<input type="hidden" name="IdDM"  value="<?php echo $danhmuc['IdDM']?>"/>
          <label for="tendm">
            Tên danh mục
          </label>
          <input type="text" class="form-control" name="nameDM" value="<?php echo $danhmuc['nameDM']?>"/>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_submit">
          Sửa
        </button>
        <button type="cancel" class="btn btn-default" action="danhmucsp.php">
          Hủy
        </button>
      </form>
    </div>
  </div>
</div>

