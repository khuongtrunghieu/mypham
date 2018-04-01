 <?php
//session_start();
include_once('ketnoi2.php');
error_reporting(0);
 // include('checklogin.php');
 // $user = checkLoggedUser();
//get input
//echo "id=[$id]"; exit();
//tao sql
$sql = "select * from danhmuc";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
// 
$categories = select_list($sql);
//print_r($categories);exit();
?>
  
<div class="container-fluid ">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          THÔNG TIN SẢN PHẨM
      </h3> 
      <form role="form" class="content-add" action="themsach_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="tensach">
           Tên sản phẩm
          </label>
          <input type="text" class="form-control" id="nameSP" name="nameSP" />
        </div>
        <div class="form-group">
          <label for="giasach">
            Giá
          </label>
          <input type="text" class="form-control" id="Gia" name="Gia" />
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
          <input type="file" id="HinhAnh"  name="HinhAnh"/>
        </div>
        <div class="form-group">
          <label for="km">
            Số Lượng
          </label>
          <input type="text" class="form-control" name="SoLuong" />
        </div>
        
		<div class="form-group">
          <label for="tt">
           Mô Tả
          </label>
          <input type="text" class="form-control" name="MoTa" />
        </div> 
        
        <button type="submit" class="btn btn-primary">
          Thêm
        </button>
        <button type="submit" class="btn btn-default" ><a href="quantri.php?page_layout=danhsachsp">Bỏ Qua</a>
        </button>
      </form>
    </div>
  </div>
</div>
