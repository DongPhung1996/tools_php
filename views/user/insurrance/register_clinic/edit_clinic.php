<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nơi đăng ký khám chữa bệnh</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_clinic" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">    
                                                <div class="form-group">
                                                    <label>Tỉnh/Thành phố</label>
                                                    <input type="text" name="city_of_province" class="form-control" value="<?php echo $data['city_of_province'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['city_of_province']) ? $error['city_of_province'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Quận/Huyện/Thị xã</label>
                                                    <input type="text" name="district_or_town" class="form-control" value="<?php  echo  $data['district_or_town'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['district_or_town']) ? $error['district_or_town'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bệnh viện</label>
                                                    <input type="text" name="hospital" class="form-control" value="<?php echo $data['hospital'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['hospital']) ? $error['hospital'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ khám chữa bệnh</label>
                                                    <input type="text" name="address_examination" class="form-control" value="<?php  echo  $data['address_examination'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['address_examination']) ? $error['address_examination'] : ''; ?></p>
                                                </div>
                                                <div align="center">
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <button type="submit" class="btn btn-default" name="edit_clinic">Sửa</button>
                                                </div>
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
