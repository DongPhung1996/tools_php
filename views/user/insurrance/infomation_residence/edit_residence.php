<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin sổ hộ khẩu</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_residence" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6
                                            ">    
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Chủ hộ</label>
                                                    <input type="text" name="host" class="form-control" value="<?php echo $data['host'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['host']) ? $error['host'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Số sổ hộ khẩu</label>
                                                    <input type="text" name="id_residence" class="form-control" value="<?php echo $data['id_residence'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['id_residence']) ? $error['id_residence'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                    <input type="date" name="date_of_birth" class="form-control" value="<?php  echo  $data['date_of_birth'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['date_of_birth']) ? $error['date_of_birth'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Giới tính</label>
                                                    <select name="gender" class="form-control">
                                                        <option value="1" <?php echo $data['gender'] == 1 ? 'selected' : '' ?> >Nam</option>
                                                        <option value="2" <?php echo $data['gender'] == 0 ? 'selected' : '' ?> >Nữ</option>
                                                    </select>   
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Cấp bởi</label>
                                                    <input type="text" name="issued_by" class="form-control" value="<?php echo $data['issued_by'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['issued_by']) ? $error['issued_by'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" name="address" class="form-control" value="<?php  echo  $data['address'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['address']) ? $error['address'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Mối quan hệ với chủ hộ</label>
                                                    <input type="text" name="relationship" class="form-control" value="<?php  echo  $data['relationship'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['relationship']) ? $error['relationship'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Số cmnd</label>
                                                    <input type="text" name="id_card" class="form-control" value="<?php  echo  $data['id_card'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['id_card']) ? $error['id_card'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Note</label>
                                                    <input type="text" name="note" class="form-control" value="<?php  echo  $data['note'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['note']) ? $error['note'] : ''; ?></p>
                                                </div>  
                                            </div>   
                                            </div>
                                            <div align="center">
                                                 <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                <button type="submit" class="btn btn-default" name="edit_residence">Sửa</button>
                                            </div>
                                        </div>                             
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
