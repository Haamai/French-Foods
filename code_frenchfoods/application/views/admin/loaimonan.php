<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách loại món ăn</h1>
                            <a href="<?php echo site_url('admin/view_them_lma')?>" style="font-size: 20px">Thêm loại món ăn</a>
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
                                                    <th>Tên loại</th>
                                                    <th>Mô tả</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($loaimonan as $tk) {
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $tk["idloaimonan"] ?></td>
                                                        <td><?php echo $tk["tenloaimonan"] ?></td>
                                                        <td><?php echo $tk["mota"] ?></td>
                                                        <td>
                                                            <a class='btn btn-info btn-xs' href='<?php echo site_url('admin/view_edit_lma').'/'.$tk["idloaimonan"];?>' ><span class='glyphicon glyphicon-edit'></span> Sửa</a>
                                                            
                                                            <a class='btn btn-danger btn-xs' onclick='return confirmAction()' href='<?php echo site_url('admin/xoa_lma_ok').'/'.$tk["idloaimonan"];?>' ><span class='glyphicon glyphicon-remove'></span> Xóa</a>
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
          return confirm("Đồng ý xóa <?php echo $tk["tenloaimonan"] ?>")
        }
</SCRIPT>
<?php $this->load->view('admin/footer')?>  
