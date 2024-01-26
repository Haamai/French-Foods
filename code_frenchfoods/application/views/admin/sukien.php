<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách sự kiện</h1>
                            <a href="<?php echo site_url('admin/view_them_sk')?>" style="font-size: 20px">Thêm sự kiện mới</a>
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
                                                    <th>Tiêu đề</th>
                                                    <th>Trạng thái</th>
                                                    <th>Ngày bắt đầu</th>
                                                    <th>Ngày kết thúc</th>
                                                    <th>Nội dung</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Người viết</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                
                                                
                                                foreach ($sukien as $sk){
                                                ?>    
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $sk["idkhuyenmai"] ?></td>
                                                        <td><?php echo $sk["tieude"] ?></td>
                                                        <td>
                                                            <?php        
                                                                $time = now(); 
                                                                $time=unix_to_human($time, TRUE, 'UP7');

                                                                if ($time>$sk["tgketthuc"]) {
                                                                     echo "Đã kết thúc";
                                                                 } else{
                                                                     if ($time<$sk["tgbatdau"]){
                                                                         echo "Chưa diễn ra";
                                                                     } else{
                                                                             echo "Đang diễn ra";
                                                                     }
                                                                 }
                                                            ?>
                                                        </td>
                                                        
                                                        <td><?php echo $sk["tgbatdau"] ?></td>
                                                        <td><?php echo $sk["tgketthuc"] ?></td>
                                                        <td><div style="height: 100px;overflow: auto;"><?php echo $sk["noidung"] ?></div></td>
                                                        <td>
                                                            <img src="<?php echo public_url()?>/site/image/khuyenmai/<?php echo $sk["hinhanh"] ?>" width="100px" height="80px">
                                                        </td>
                                                        <td><?php echo $sk["nguoivietkm"] ?></td>
                                                        
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
