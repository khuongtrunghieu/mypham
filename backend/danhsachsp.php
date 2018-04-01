
<?php
session_start();
include_once('ketnoi2.php');
//include('checklogin.php');
//$user = checkLoggedUser();
//
    $q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";
    $q = trim($q);
    $cond = "";
    if ($q){
      $cond = "where (ten_sp like '%{$q}%')";
      $cond .=" or (gia_sp like '%{$q}%') "; 
    }
      if(isset($_GET['page'])){
      $page=$_GET['page'];
    }else
    {
      $page=1;
    }
      $rowsPerPage=10;
      $perRow=$page * $rowsPerPage - $rowsPerPage;
      $sql="SELECT * FROM spham {$cond} INNER JOIN danhmuc ON spham.IdDM=danhmuc.IdDM ORDER BY idSP DESC
      LIMIT $perRow, $rowsPerPage";
      $datas = select_list($sql);
      //
      //print_r($datas);
      $sql1="SELECT * FROM spham";
      $data1=select_list($sql1);
      $totalRows=count($data1);
      //print_r($totalRows);
      $totalPages=ceil($totalRows/$rowsPerPage);
      //print_r($totalPages);
      $listPage='';
      for($i=1;$i<=$totalPages;$i++)
      {
            if($page==$i){
            $listPage.= ' <span> '. $i .' </span> ';
            }else{
                $listPage.='<a href="danhsachsp.php'. $i .'">'. $i . '</a > ';
            }
        }
 
?>
<div class="container-fluid">
  <div class="row well">
    <div class="col-md-12">
      <h3 class="text-center text-danger">
          QUẢN LÝ SÁCH
      </h3> 
        <h4>Xin chào <?php //echo $user['user'];//?>!</h4>
      <h3><a href="quantri.php?page_layout=themsach" class="btn btn-info">THÊM MỚI SÁCH</a></h3>
      <table class="table table-bordered text-center">
        <thead>
          <tr >
            <th class="text-center">ID</th>
            <th class="text-center">Tên sách mới</th>
            <th class="text-center">Giá</th>
      <th class="text-center">Ảnh mô tả</th>
            <th class="text-center">Chuyên Mục</th>
            <th class="text-center">Sửa</th>
            <th class="text-center">Xóa</th>
          </tr>
        </thead>
        <tbody>
    <?php  if($datas) foreach ($datas as $data){?>
          <tr>
            <td>
              <?php echo $data['idSP'];?>
            </td>
            <td>
              <?php echo $data['nameSP'];?>
            </td>
            <td>
              <?php echo $data['Gia'];?>
            </td>
      <td>
        <img class="img-thumbnail" width="120" height="170" src="../<?php echo $data['HinhAnh'];?>" />
            </td>
            <td>
              <?php echo $data['nameDM'];?>
            </td>
            <td>
              <a class="btn btn-info" href="quantri.php?page_layout=suasach&id_sp=<?php echo $data['idSP']?> " action="suasach_exec.php"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
            </td>
            <td>
             <a  class="btn btn-danger" href="quantri.php?page_layout=xoasach&id_sp=<?php echo $data['idSP']; ?>"><span class="glyphicon glyphicon-remove-circle"></span>Xóa</a>
            </td>
          </tr>
          <?php } 
      ?>
        </tbody>
      </table>
    <div id="pagination" class="text-right"><?php echo $listPage; ?></div>
    </div>
  </div>
</div>
