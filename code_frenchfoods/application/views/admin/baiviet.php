<?php $this->load->view('admin/header')?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh sách sự kiện</h1>
                            <a href="<?php echo site_url('admin/view_them_bv')?>" style="font-size: 20px">Thêm bài viết mới</a>
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
                                                    <th>Chủ đề</th>
                                                    <th>Thời gian</th>
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
                                                        <td><?php echo $sk["idbaiviet"] ?></td>
                                                        <td><?php echo $sk["chude"] ?></td>
                                                        <td><?php echo $sk["thoigian"] ?></td>
                                                        <td><div style="height: 100px;overflow: auto;"><?php echo $sk["noidung"] ?></div></td>
                                                        <td>
                                                            <img src="<?php echo public_url()?>/site/image/baiviet/<?php echo $sk["hinhanh"] ?>" width="100px" height="80px">
                                                        </td>
                                                        <td><?php echo $sk["nguoiviet"] ?></td>
                                                        
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
