<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class login_Model extends Model {

    public function get(){
        $query = "";
        return $this->qSelect($query);
    }

}
