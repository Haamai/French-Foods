<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách người ứng tuyển</h1>
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
                                                    <th>Họ tên</th>
                                                    <th>Giới tính</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Vị trí</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Email</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($tuyendung as $td) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $td["idtuyendung"] ?></td>
                                                        <td><?php echo $td["hoten"] ?></td>
                                                        <td><?php echo $td["gioitinh"] ?></td>
                                                        <td><?php echo $td["ngaysinh"] ?></td>
                                                        <td><?php echo $td["diachi"] ?></td>
                                                        <td><?php echo $td["vitri"] ?></td>
                                                        <td><?php echo $td["sdt"] ?></td>
                                                        <td><?php echo $td["email"] ?></td>
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
<?php $this->load->view('admin/footer')?>  
