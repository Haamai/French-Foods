<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách đặt bàn</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Ngày tổ chức</th>
                                                    <th>Giờ tổ chức</th>
                                                    <th>Số người tham gia</th>
                                                    <th>Ghi chú</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($datban as $db) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $db["iddatban"] ?></td>
                                                        <td><?php echo $db["hoten"] ?></td>
                                                        <td><?php echo $db["ngaydb"] ?></td>
                                                        <td><?php echo $db["giodb"] ?></td>
                                                        <td><?php echo $db["songuoi"] ?></td>
                                                        <td><?php echo $db["ghichu"] ?></td>
                                                        <td>
                                                            <?php        
                                                                $time = now(); 
                                                                $time=unix_to_human($time, TRUE, 'UP7');

                                                                if ($time>$db["ngaydb"]) {
                                                                     echo "Đã hoàn thành";
                                                                } else{                                                 echo "Chưa diễn ra";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                } 
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <SCRIPT LANGUAGE="JavaScript">
                function confirmAction() {
                    return confirm("Bạn có đồng ý xóa yêu cầu đạt bàn này?")
                }
            </SCRIPT>
<?php $this->load->view('admin/footer')?>  
