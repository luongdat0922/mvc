<?php
class AccountModel extends Model 
{
    const TABLE = 'accounts';

    public function addAccount($data) {
        $this->add(self::TABLE, $data);
    }

    public function processLogin($username, $password) {
        return $this->checkLogin(self::TABLE, $username, $password);
    }
}
?>