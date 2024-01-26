<?php $this->load->view('admin/header')?> 
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách đồ uống</h1>
                            <a href="<?php echo site_url('admin/view_them_douong')?>" style="font-size: 20px">Thêm đồ uống mới</a>
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
                                                    <th>ID </th>
                                                    <th>Tên</th>
                                                    <th>Mô tả</th>
                                                    <th>Giá</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Loại</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($douong as $tk) {
                                                ?>
                                                    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $tk["iddouong"] ?></td>
                                                        <td><?php echo $tk["tendouong"] ?></td>
                                                        <td><?php echo $tk["mota"] ?></td>
                                                        <td><?php echo $tk["gia"] ?></td>
                                                        <td>
                                                            <img src="<?php echo public_url()?>/site/image/douong/<?php echo $tk["hinhanh"] ?>" width="100px" height="80px">
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            foreach ($loaidouong as $lma) {
                                                                if ($lma['idloaidouong']==$tk["idloaidouong"]) {
                                                                    echo $lma['tenloaidouong'];
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a class='btn btn-info btn-xs' href='<?php echo site_url('admin/view_edit_douong').'/'.$tk["iddouong"];?>' ><span class='glyphicon glyphicon-edit'></span> Sửa</a>
                                                            
                                                            <a class='btn btn-danger btn-xs' onclick='return confirmAction()' href='<?php echo site_url('admin/xoa_douong_ok').'/'.$tk["iddouong"];?>' ><span class='glyphicon glyphicon-remove'></span> Xóa</a>
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
        return confirm("Đồng ý xóa <?php echo $tk["tendouong"] ?> ra khỏi thực đơn")
    }
</SCRIPT>
<?php $this->load->view('admin/footer')?>  
