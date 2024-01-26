<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách sự kiện cần tổ chức</h1>
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
                                                    <th>Số người tham dự</th>
                                                    <th>Ghi chú</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($dktcsk as $tcsk) {
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <tr class="odd gradeX">
                                                        <td><?php echo $tcsk["idtochucsk"] ?></td>
                                                        <td><?php echo $tcsk["hoten"] ?></td>
                                                        <td><?php echo $tcsk["ngaytochuc"] ?></td>
                                                        <td><?php echo $tcsk["giotochuc"] ?></td>
                                                        <td><?php echo $tcsk["songuoi"] ?></td>
                                                        <td><?php echo $tcsk["ghichu"] ?></td>
                                                        <td><?php        
                                                                $time = now(); 
                                                                $time=unix_to_human($time, TRUE, 'UP7');

                                                                if ($time>$tcsk["ngaytochuc"]) {
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
                    return confirm("Bạn có đồng ý xóa yêu cầu tổ chức sự kiện này này?")
                }
            </SCRIPT>
<?php $this->load->view('admin/footer')?>  
