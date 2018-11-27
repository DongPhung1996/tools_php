<?php  
    include "checkLoginUser.php";
    $userModel  = new User();
    
    $error = array();

    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $results = $userModel->checkID($username, $password);
        if (!$results) {
            if (isset($_POST['username']) && $_POST['username'] == '') {
                $error['username'] = "No input username";
            } else {
                $error['login'] = "Username or Password Error!";
            }
            if (isset($_POST['password']) && $_POST['password'] == '') {
                $error['password'] = "No input password";
            }  else {
                $error['login'] = "Username or Password Error!";
            }
        }
        if (!$error) {
            //process session
            session_start();
            $_SESSION['id'] = $results['id'];
            $name = $userModel->checkUserName($_SESSION['id']);       
            $_SESSION['name'] = $name['username'];

            //add id_account all tables

            //information_persional
            $check_id_info = $userModel->checkIdAccountUser($results['id']);
            if ($check_id_info['id'] == NULL) {
                $info_persional = $userModel->addIdAccountInfoUser($results['id']);
            }

            //insurrance_book
            $check_insurrance = $userModel->checkIdAccountInsurance($results['id']);
            if ($check_insurrance['id'] == NULL) {
                $insurance = $userModel->addIdAccountInsurance($results['id']);
            }

            //labol_contract
            $check_labol = $userModel->checkIdAccountLabol($results['id']);
            if ($check_labol['id'] == NULL) {
                $labol = $userModel->addIdAccountLabol($results['id']);
            }

            //experience
            $check_experience = $userModel->checkIdAccountExperience($results['id']);
            if ($check_experience['id'] == NULL) {
                $experience = $userModel->addIdAccountExperience($results['id']);
            }

            //skills
            $check_skill = $userModel->checkIdAccountSkill($results['id']);
            if ($check_skill['id'] == NULL) {
                $skills = $userModel->addIdAccountSkill($results['id']);
            }

            //certificate
            $check_certificate = $userModel->checkIdAccountCertificate($results['id']);
            if ($check_certificate['id'] == NULL) {
                $certificate = $userModel->addIdAccountCertificate($results['id']);
            }

            //fort
            $check_fort = $userModel->checkIdAccountFort($results['id']);
            if ($check_fort['id'] == NULL) {
                $fort = $userModel->addIdAccountFort($results['id']);
            }

            //apply_for_leave
            $check_apply = $userModel->checkIdAccountApply($results['id']);
            if ($check_apply['id'] == NULL) {
                $apply = $userModel->addIdAccountApply($results['id']);
            }

            //information_residence
            $check_residence = $userModel->checkIdAccountResidence($results['id']);
            if ($check_residence['id'] == NULL) {
                $residence = $userModel->addIdAccountResidence($results['id']);
            }

            //register_for_the_clinic
            $check_residence = $userModel->checkIdAccountClinic($results['id']);
            if ($check_residence['id'] == NULL) {
                $residence = $userModel->addIdAccountClinic($results['id']);
            }


            header("Location: user.php?id=".$results['id']);
        }
    }
?>              
<?php include 'form_login/header.php';?>
<div class="col-lg-12" align="center">
    <h1 class="page-header">Tài khoản</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="" method="POST">
      <div class="form-group">
        <label>Tên tài khoản</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username">
        <p style="color: red; text-align: center;"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
      </div>
      <div class="form-group">
        <label>Mật khẩu</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        <p style="color: red; text-align: center;"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
      </div>
      <div class="form-group">
          <a href="forgot_user.php">Quên mật khẩu?</a>  
      </div>
      <p style="color: red; text-align: center;"><?php echo isset($error['login']) ? $error['login'] : ''; ?></p>
      <div align="center">
        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
      </div>
    </form>
</div>
<div class="col-md-4"></div>
<!-- /#page-wrapper -->
<?php include 'form_login/footer.php';?>