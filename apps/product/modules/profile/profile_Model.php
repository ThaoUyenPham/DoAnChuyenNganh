<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class profile_Model extends Model {

    public function getChamsocda(){
        $query = "";
        return $this->qSelect($query);
    }

}
