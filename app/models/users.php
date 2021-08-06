<?php

class UserModel
{
    public $data;
    public $table;
    public $db;

    
    public function __construct()
    {
        $this->table = 'users';
        $this->codeTable = 'codes';
        $this->db = new Database();
    }

    /*     private function levelAccess($level){
            switch ($level) {
                #level 1 for normal users
                case '1':
                    # code...
                    break;
                #default level is for normal users
                default:
                    //$mails = array(welcome(), emailVerify());
                    $access = array('mails' => $mails);
                    return $access;
                    break;
            }
        } */

    #for adding need user data to the database
    public function addUser($data){
        //add to users db, code,
        global $isError;
        //validate data
        $validation = new Validation();
        $errors = $validation->addUser($data);
        if (!$isError) {
            /* $userId = $this->db->create($this->table, $data);
            if ($userId) {
                $codeId = $this->db->create($this->codeTable, ['ref' => generateRandomString($ref_code, 6)]);
                $mail = new Mailer();
                $mail->addUser($data);
            } else {
                return true;
            } */
        } else {
            return $errors;
        }
    }
}

?>