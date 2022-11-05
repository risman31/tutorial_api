<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MData extends CI_Model
{
    function GetData($tabel, $where = null, $value = null)
    {
        if($where === null && $value === null)
        {
            $query=$this->db->get($tabel);
            return $query;
        } else {
            $query= $this->db->get_where($tabel, [$where => $value]);
            return $query;
        }

    }  
}