<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách người dùng</h1>
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
                                                    <th>Số điện thoại</th>
                                                    <th>Nhận xét</th>
                                                    <th>Thời gian</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($nhanxet as $nx) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $nx["idnhanxet"] ?></td>
                                                        <td><?php echo $nx["ngnhanxet"] ?></td>
                                                        <td><?php echo $nx["sdtnhanxet"] ?></td>
                                                        <td>
                                                            <div style="height: 100px;overflow: auto;"><?php echo $nx["ndnhanxet"] ?></div>
                                                        </td>
                                                        <td><?php echo $nx["thoigian"] ?></td>
                                                        <?php if ($nx["trangthai"]==0) {
                                                            echo "<td>Hiển thị</td>";
                                                        } else {
                                                            echo "<td>Ẩn</td>";
                                                        } ?>
                                                        <td>
                                                            <?php if ($nx["trangthai"]==0) {
            echo "<a class='btn btn-danger btn-xs' href='".site_url('admin/khoa_nx_ok').'/'.$nx["idnhanxet"]."' ><span class='glyphicon glyphicon-remove'></span> Ẩn</a>";
                                                            } else {
            echo "<a class='btn btn-success btn-xs' href='".site_url('admin/mo_nx_ok').'/'.$nx["idnhanxet"]."' ><span class='glyphicon glyphicon-ok'></span> Hiện</a>";
                                                            } ?>
                                                            
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
<?php $this->load->view('admin/footer')?>  
