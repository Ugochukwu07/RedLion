<?php

class Validation{
    public $errors = array(); public $isError;

    private function notEmpty($data, &$isError){
        if($data === ''){
            $isError = true;
            return 'Must not be left empty' ;
        }
    }

    private function alphaOnly($data, &$isError){
        $regex = "/^[a-zA-Z\s.]{1}+[a-zA-Z\s]+$/";
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        if (!preg_match($regex, $data) && $data !== '') {
            $isError = true;
            return 'Invalid Charaters' ;
        }
    }
    private function numberOnly($data, &$isError){
        $regex = "/^[0-9]+$/";
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match($regex, $data) && $data !== '') {
            $isError = true;
            return 'Numbers Only' ;
        }
    }
    private function phoneNumber($data, &$isError){
        $regex = "/^\+[0-9]{1,3}-[0-9]{1,3}-[0-9]{1,3}-[0-9]{1,4}$/";
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match($regex, $data) && $data !== '') {
            $isError = true;
            return 'Invalid Phone Number';
        }
    }
    private function email($data, &$isError){
        $regex = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._-]+$/";
        $data = filter_var($data, FILTER_SANITIZE_EMAIL);
        $data = filter_var($data, FILTER_VALIDATE_EMAIL);
        if (!preg_match($regex, $data) && $data !== '') {
            $isError = true;
            return 'Invalid Email Address' ;
        }
    }

    private function alphaNumeric($data, &$isError){
        $regex = "/^[a-zA-Z0-9\d\._]+$/";
        if(!preg_match($regex, $data) && $data !== ''){
            $isError = true;
            return 'Invalid Charaters';
        }
    }

    private function existing($data, &$isError, $table, $where){
        $db = new Database();
        $dbData = $db->selectOne($table, [$where => $data]);
        if($dbData && $data !== ''){
            $isError = true;
            return ucwords($where) . ' already exists';
        }

    }

    public function addUser($data){
        global $isError;
        /* $this->errors['firstname'] = $this->alphaOnly($data['firstname'], $isError);
        $this->errors['lastname'] = $this->alphaOnly($data['lastname'], $isError);
        $this->errors['phone'] = $this->phoneNumber($data['phone'], $isError);
        $this->errors['email'] = $this->email($data['email'], $isError);
        $this->errors['username'] = $this->existing($data['username'], $isError, 'users', 'username'); */
        $alphaOnly = array('firstname' => $data['firstname'],
                           'lastname' => $data['lastname']
                            );
        $phoneNumber = array('phone' => $data['phone']);
        $existing = array('username' => $data['username']);
        foreach($data as $key => $value){
            $this->errors[$key] = array();
            $errorsi = array();
            $error = array_key_exists($key, $alphaOnly) ? $this->alphaOnly($value, $isError) : '';
            array_push($errorsi, $error);
            $error = array_key_exists($key, $phoneNumber) ? $this->phoneNumber($value, $isError) : '';
            array_push($errorsi, $error);
            $error = array_key_exists($key, $existing) ? $this->existing($value, $isError, 'users', $key) : '';
            array_push($errorsi, $error);
            $error = array_key_exists($key, $data) ? $this->notEmpty($value, $isError, 'users', $key) : '';
            array_push($errorsi, $error);
            foreach($errorsi as $keyb => $value){
                if(strlen($value) > 0){
                    array_push($this->errors[$key], $value);
                }
            }
        }

        /* $alphaOnly = array('firstname' => $data['firstname'], 'lastname' => $data['lastname']);
        $phoneNumber = array('phone' => $data['phone']);
        foreach($alphaOnly as $key => $value){
            $this->errors[$key] = array();
            $error = $this->alphaOnly($value, $isError);
            if($error){
                array_push($this->errors[$key], $error);
            }
        }
        foreach($phoneNumber as $key => $value){
            $this->errors[$key] = array();
            $error = $this->phoneNumber($value, $isError);
            if($error !== ''){
                array_push($this->errors[$key], $error);
            }
        } */

        return $this->errors;
    }
}
?>