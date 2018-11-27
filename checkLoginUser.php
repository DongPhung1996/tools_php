<?php
require_once 'config/database.php';
class User extends ConnectDB{

    public function listUser() {
        $sql = "SELECT * FROM account";
        return  mysqli_query($this->conn, $sql);
    }

    public function register($username, $password) {  
        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'"; 
        $result =  mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0 ) {
        	return true;
        }
        return false;
    }

    public function checkID($username, $password) {
        $sql = "SELECT id FROM account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function checkUserName($id) {
        $sql = "SELECT username FROM account WHERE id = '$id' ";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //information persional
    public function addIdAccountInfoUser($id_account) {
        $sql = "INSERT INTO infomationn_personal(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountUser($id_account) {
        $sql = "SELECT id FROM infomationn_personal WHERE id_account = '$id_account'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //insurance
    public function addIdAccountInsurance($id_account) {
        $sql = "INSERT INTO insurrance_book(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountInsurance($id_account) {
        $sql = "SELECT id FROM insurrance_book WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //labol_contract
    public function addIdAccountLabol($id_account) {
        $sql = "INSERT INTO labol_contract(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountLabol($id_account) {
        $sql = "SELECT id FROM labol_contract WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //experience
    public function addIdAccountExperience($id_account) {
        $sql = "INSERT INTO experience(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountExperience($id_account) {
        $sql = "SELECT id FROM experience WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //skill
    public function addIdAccountSkill($id_account) {
        $sql = "INSERT INTO skill(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountSkill($id_account) {
        $sql = "SELECT id FROM skill WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //certificate
    public function addIdAccountCertificate($id_account) {
        $sql = "INSERT INTO certificate(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountCertificate($id_account) {
        $sql = "SELECT id FROM certificate WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //fort
    public function addIdAccountFort($id_account) {
        $sql = "INSERT INTO fort(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountFort($id_account) {
        $sql = "SELECT id FROM fort WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //apply_for_leave
    public function addIdAccountApply($id_account) {
        $sql = "INSERT INTO apply_for_leave(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountApply($id_account) {
        $sql = "SELECT id FROM apply_for_leave WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //information_residence
    public function addIdAccountResidence($id_account) {
        $sql = "INSERT INTO information_residence(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountResidence($id_account) {
        $sql = "SELECT id FROM information_residence WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    //register_for_the_clinic
    public function addIdAccountClinic($id_account) {
        $sql = "INSERT INTO register_for_the_clinic(id_account) VALUES ('$id_account')";
        return mysqli_query($this->conn, $sql);
    }

    public function checkIdAccountClinic($id_account) {
        $sql = "SELECT id FROM register_for_the_clinic WHERE id_account = $id_account";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
}

?>