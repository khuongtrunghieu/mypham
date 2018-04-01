<?php 
include_once('ketnoi2.php');
$id_user=isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"]: 0;
$username=isset($_REQUEST["username"]) ? $_REQUEST["username"]: 0;
$password=isset($_REQUEST["password"]) ? $_REQUEST["password"]: 0;
$fullname=isset($_REQUEST["fullname"]) ? $_REQUEST["fullname"]: 0;
$gioitinh=isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"]: 0;
	$sql3 = "select * from user where id_user={$id_user}";
	$product1 = select_one($sql3);
 ?>
 <div class="container-fluid ">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          SỬA THÔNG TIN USER
      </h3> 
      <form role="form" class="content-add" action="suauser_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
           <input type="hidden" name="id_user"  value="<?php echo $product1['id_user']?>"/>
          <label for="username">
            UserName
          </label>
          <input type="text" class="form-control" name="username"  value="<?php echo $product1['username']?>"/>
        </div>
        <div class="form-group">
          <label for="password">
            PassWord
          </label>
          <input type="text" class="form-control" name="password"  value="<?php echo $product1['password']?>"/>
        </div>
        <div class="form-group">
          <label for="Ncc">
            FullName
          </label>
          <input type="text" class="form-control" name="fullname"  value="<?php echo $product1['fullname']?>"/>
        </div>
        <select >
        Giới Tính
        <option>Nam</option>
        <option>Nữ</option>
        	
        </select>
<br></br>
        <button type="submit" class="btn btn-primary">
          Sửa
        </button>
        <button type="submit" class="btn btn-default">
        <a href="quantri.php?page_layout=user">Bỏ Qua</a>
        </button>
      </form>
    </div>
  </div>
</div>