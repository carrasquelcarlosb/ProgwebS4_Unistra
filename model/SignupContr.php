<?php

class SignupContr
{
    private $uId;
    private $pwd;
    private $pwdRepeat;
    private $emailAdress;

    public function _construct($uId, $pwd, $pwdRepeat, $emailAdress)
    {
        $this->$uid = $uid;
        $this->$pwd = $pwd;
        $this->$pwdRepeat = $pwdRepeat;
        $this->$emailAdress = $email;
    }

    private function emptyInput()
    {
        $result;
        if (
            empty($this->$uid) ||
            empty($this->$pwd) ||
            empty($this->$pwdRepeat) ||
            empty($this->$email)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidUId()
    {
        $result;
        if (!preg_match("/[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
