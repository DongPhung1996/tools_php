<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Thông tin cá nhân</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">           	
                	<?php if (isset($_SESSION['edit_info_user'])) { ?>
                        <div class="alert alert-success" align="center">
                            <?php echo $_SESSION['edit_info_user'];  ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['edit_info_user'])) {
                        unset($_SESSION['edit_info_user']);
                    }  ?>
			        <input type="hidden" value=" <?php echo $_SESSION['id'];  ?>"> 
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 table-responsive">
							      	<table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
							              <th>Số cmnd</th>
							              <th>Ngày cấp</th>
							              <th>Điện thoại</th>	
							              <th>Skype</th>
							              <th>Giới tính</th>
							              <th>Chi tiết</th>
							            </tr>
							          </thead>
							          <tbody>
								          <?php $stt = 1; ?>
									      <?php foreach ($data as $list) { ?>
									          <tr>
									              <td><?php echo $stt++?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["date_of_birth"]?></td>
									              <td><?php echo $list["id_card"]?></td>
									              <td><?php echo $list["date_range"]?></td>
									              <td><?php echo $list["phone"]?></td>
									              <td><?php echo $list["skype"]?></td>
									              <td><?php echo ($list["gender"] == 1) ? 'Nam' :'Nữ' ?></td>
									              <td>
									              		<button 
									              			name="<?= $list['name']; ?>"
									              			gender="<?= $list['gender']; ?>"
									              			date_of_birth="<?= $list['date_of_birth']; ?>"
									              			id_card="<?= $list['id_card']; ?>"
									              			date_range="<?= $list['date_range']; ?>"
									              			phone="<?= $list['phone']; ?>"
									              			email="<?= $list['email']; ?>"
									              			skype="<?= $list['skype']; ?>" 		 
									              			address="<?= $list['address']; ?>"
									              			nationality="<?= $list['nationality']; ?>"
									              			maried="<?= $list['maried']; ?>"
									              			passport_no="<?= $list['passport_no']; ?>"
									              			passport_date="<?= $list['passport_date']; ?>"
									              			passport_where="<?= $list['passport_where']; ?>"
									              			number_of_insurrance="<?= $list['number_of_insurrance']; ?>" 
									              			date_range_insurrance="<?= $list['date_range_insurrance']; ?>"
									              			issued_by="<?= $list['issued_by']; ?>"
									              			bank_account="<?= $list['bank_account']; ?>"								      
									              			type="button" class="view btn btn-default" data-toggle="modal" data-target="#View">
														  Xem thêm
														</button>

														<!-- Modal -->
														<?php include('modal_list.php') ?>
									              </td>
									       <?php } ?>
							          </tbody>
							        </table> 
							   </div>   							 
                            </div>
                            <!-- /.row (nested) -->
                            <div align="center">
                            	<a class="btn btn-primary" href=<?php echo "user.php?controller=user&action=edit_info_user&id=".$list['id']?>>
		          					Cập nhật
		          				</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<script>
	$(document).ready(function(){
		$(".view").on("click",function(){
			var name = $(this).attr('name');
		 	$("#name").val(name);
		 	var date_of_birth = $(this).attr('date_of_birth');
		 	$("#date_of_birth").val(date_of_birth);
			var id_card = $(this).attr('id_card');
		 	$("#id_card").val(id_card);
			var date_range = $(this).attr('date_range');	
		 	$("#date_range").val(date_range);
		 	var phone = $(this).attr('phone');
		 	$("#phone").val(phone);
		 	var email = $(this).attr('email');
		 	$("#email").val(email);
			var skype = $(this).attr('skype');
			$("#skype").val(skype);
			var gender = $(this).attr('gender');
			if (gender == 1) {
				$("#gender").val("Nam");
			} else {
				$("#gender").val("Nữ");
			}
		 	var address = $(this).attr('address');
		 	$("#address").val(address);
			var nationality = $(this).attr('nationality');
			$("#nationality").val(nationality);
			var maried = $(this).attr('maried');
		 	if (maried == 1) {
				$("#maried").val("Có");
			} else {
				$("#maried").val("Không");
			}
			var passport_no = $(this).attr('passport_no');
			$("#passport_no").val(passport_no);
			var passport_date = $(this).attr('passport_date');
		 	$("#passport_date").val(passport_date);
			var passport_where = $(this).attr('passport_where');
			$("#passport_where").val(passport_where);
			var number_of_insurrance = $(this).attr('number_of_insurrance');
		 	$("#number_of_insurrance").val(number_of_insurrance);
			var date_range_insurrance = $(this).attr('date_range_insurrance');
			$("#date_range_insurrance").val(date_range_insurrance);
			var issued_by = $(this).attr('issued_by');
		 	$("#issued_by").val(issued_by);
			var bank_account = $(this).attr('bank_account');
			$("#bank_account").val(bank_account);
		});
	})	
</script>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
