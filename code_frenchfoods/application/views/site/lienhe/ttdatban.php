<!DOCTYPE html>
<html lang="en">
<body>

<?php $this->load->view('site/header')?>
<div>
  <div class="clear"></div>
	<div class="table-responsive">
		<div style="padding: 20px">
			<b style="font-size: 40px">Thông tin đặt bàn</b>
		</div>
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<th style="text-align: center;"> STT</th>
				<th style="text-align: center;"> Ngày tham dự </th>
				<th style="text-align: center;"> Giờ tham dự</th>
				<th style="text-align: center;"> Số người</th>
				<th style="text-align: center;"> Yêu cầu chi tiết</th>
				<th style="text-align: center;"> Trạng thái</th>
				<th style="text-align: center;"> Thao tác</th>
			</thead>
			<tbody>
                <?php 
                $i=1;
                if (empty($datban)){
                ?>
                <div style="padding-left: 20px">
					<p style="font-size: 15px">Không có dữ liệu</p>
				</div>
                <?php
                } else
                	foreach ($datban as $db) {
                ?>                         
                    <tr class="odd gradeX">
                        <td style="padding: 2px;vertical-align:baseline;"><center><?php echo $i++ ?></center></td>
                        <td style="padding: 2px;vertical-align:baseline;"><center><?php echo $db["ngaydb"] ?></center></td>
                        <td style="padding: 2px;vertical-align:baseline;"><center><?php echo $db["giodb"] ?></center></td>
                        <td style="padding: 2px;vertical-align:baseline;"><center><?php echo $db["songuoi"] ?></center></td>
                        <td style="padding: 2px;vertical-align:baseline;width: 500px;">
                        	<div style="max-height: 70px;overflow: auto;">
                        		<?php echo $db["ghichu"] ?>
                        	</div>
                        </td>
                        <td style="padding: 2px;vertical-align:baseline;">
                        	<center>
	                            <?php  
                                    if($db["trangthai"]==0){$time = now(); 
                                        $time=unix_to_human($time, TRUE, 'UP7');
                                        if ($time>$db["ngaydb"]) {
                                            echo "Đã hoàn thành";
                                        } else{
                                            echo "Chưa diễn ra";
                                        }
                                    } else {
                                        echo "Đã hủy";
                                    } 
	                            ?>
                        	</center>
                        </td>
                        <td style="padding: 2px;vertical-align:baseline;">
                            <center>
                            	<a style="padding: 3px 6px 3px 6px" class='btn btn-warning btn-xs' href='<?php echo site_url('lienhe/view_editdb').'/'.$db["iddatban"];?>' ><span class='glyphicon glyphicon-remove'></span> Edit</a>
                                <a style="padding: 3px 6px 3px 6px" onclick='return confirmAction()' class='btn btn-danger btn-xs' href='<?php echo site_url('lienhe/huydb').'/'.$db["iddatban"];?>' ><span class='glyphicon glyphicon-remove'></span> Hủy</a>
                            </center>
                        </td>
                    </tr>
                <?php
                }
                
                 
                ?>
            </tbody>
		</table>
		<div style="margin: 15px;"><center><a style="font-size: 20px" href="<?php echo site_url('thucdon/datban') ?>" class="xemthem">ĐẶT BÀN NGAY</a></center></div>
	</div>
</div>
<?php $this->load->view('site/footer');?>
</body>
<SCRIPT LANGUAGE="JavaScript">
        function confirmAction() {
          return confirm("Đồng ý hủy")
        }
</SCRIPT>
<script type="text/javascript"></script>
</body>
</html>