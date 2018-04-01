<?php
						if(isset($_POST['btnsubmit'])){
						$nameSP = $_POST['nameSP'];
						$Gia = $_POST['Gia'];
						
						$SoLuong = $_POST['SoLuong'];
						$HinhAnh = $_POST['HinhAnh'];
						$MoTa = $_POST['MoTa'];
						

						$sql="insert into spham('', nameSP, Gia, SoLuong, HinhAnh, MoTa) values ('', '$nameSP', '$Gia', '$SoLuong', '$HinhAnh','$MoTa')";
						$ret = exec_update($sql);
						echo "Thành công";
                         }
						?>