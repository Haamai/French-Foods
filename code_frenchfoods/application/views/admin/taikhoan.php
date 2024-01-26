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
                                                    <th>Tên tài khoản</th>
                                                    <th>Email</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Tích lũy</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                    <th>Cộng điểm</th>
                                                    <th>Trừ điểm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($taikhoan as $tk) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $tk["idtaikhoan"]?></td>
                                                        <td><?php echo $tk["hoten"] ?></td>
                                                        <td><?php echo $tk["taikhoan"] ?></td>
                                                        <td><?php echo $tk["email"] ?></td>
                                                        <td><?php echo $tk["sdt"] ?></td>
                                                        <td><?php echo $tk["tichluy"] ?></td>
                                                        <?php if ($tk["trangthai"]==0) {
                                                            echo "<td>Mở</td>";
                                                        } else {
                                                            echo "<td>Khóa</td>";
                                                        } ?>
                                                        <td>
                                                            <a class='btn btn-info btn-xs' href='<?php echo site_url('admin/view_edit_tk').'/'.$tk["idtaikhoan"];?>' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                            <?php if ($tk["trangthai"]==0) {
            echo "<a class='btn btn-danger btn-xs' href='".site_url('admin/khoa_tk_ok').'/'.$tk["idtaikhoan"]."' ><span class='glyphicon glyphicon-remove'></span> Khóa</a>";
                                                            } else {
            echo "<a class='btn btn-success btn-xs' href='".site_url('admin/mo_tk_ok').'/'.$tk["idtaikhoan"]."' ><span class='glyphicon glyphicon-ok'></span> Mở</a>";
                                                            } ?>
                                                            
                                                        </td>
                                                        <td style="width: 10%">
                                                            <form action="<?php echo site_url('admin/congdiem');?>" method="post">
                                                                <input type="text" style="width: 73%" class="form-control inputlogin1" name="diem">
                                                                <input type="hidden" name="idtaikhoan" value="<?php echo $tk["idtaikhoan"]?>">
                                                            <button type="submit" class='btn btn-info btn-xs'>+</button>
                                                            </form>
                                                        </td>
                                                        <td style="width: 10%">
                                                            <form action="<?php echo site_url('admin/trudiem');?>" method="post">
                                                                <input type="text" style="width: 76%" class="form-control inputlogin1" name="diem">
                                                                <input type="hidden" name="idtaikhoan" value="<?php echo $tk["idtaikhoan"]?>">
                                                            <button type="submit" class='btn btn-info btn-xs'>-</button>
                                                            </form>
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
