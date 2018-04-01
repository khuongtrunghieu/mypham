 <?php
session_start();
include_once('ketnoi2.php');
?>
  
<div class="container-fluid">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          THÔNG TIN DANH MỤC SÁCH
      </h3> 
      <form role="form" class="content-add" action="themdm_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="tendm">
           Tên danh mục
          </label>
          <input type="text" class="form-control" id="nameDM" name="nameDM" />
        </div>
        <button type="submit" class="btn btn-primary">
          Thêm
        </button>
        <button type="" class="btn btn-default" action="danhsachsp.php" ><a href="quantri.php?page_layout=danhmucsp">Bỏ qua</a>
        </button>
      </form>
    </div>
  </div>
</div>