<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách người kiểm duyệt</h1>
                            <a href="<?php echo site_url('admin/them_qtv')?>" style="font-size: 20px">Thêm người kiểm duyệt mới</a>
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
                                                    <th>Tên tài khoản</th>
                                                    <th>Email</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Loại tài khoản</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($taikhoan as $tk) {
                                                    if ($tk["quyen"]==0) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $tk["idadmin"]?></td>
                                                        <td><?php echo $tk["hoten"] ?></td>
                                                        <td><?php echo $tk["taikhoan"] ?></td>
                                                        <td><?php echo $tk["email"] ?></td>
                                                        <td><?php echo $tk["sdt"] ?></td>
                                                        <td>
                                                            <?php 
                                                                if ($tk["quyen"]==1) {
                                                                    echo "Quản trị viên";
                                                                } else {
                                                                    echo "Người kiểm duyệt";
                                                                }
                                                            ?>
                                                        </td>
                                                        <?php if ($tk["trangthai"]==0) {
                                                            echo "<td>Mở</td>";
                                                        } else {
                                                            echo "<td>Khóa</td>";
                                                        } ?>
                                                        <td>
                                                            <a class='btn btn-info btn-xs' href='<?php echo site_url('admin/view_edit_tk_qtv').'/'.$tk["idadmin"];?>' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                            <?php if ($tk["trangthai"]==0) {
            echo "<a class='btn btn-danger btn-xs' href='".site_url('admin/khoa_tk_qtv_ok').'/'.$tk["idadmin"]."' ><span class='glyphicon glyphicon-remove'></span> Khóa</a>";
                                                            } else {
            echo "<a class='btn btn-success btn-xs' href='".site_url('admin/mo_tk_qtv_ok').'/'.$tk["idadmin"]."' ><span class='glyphicon glyphicon-ok'></span> Mở</a>";
                                                            } ?>
                                                            
                                                        </td>
                                                    </tr>
                                                <?php
                                                } }
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
