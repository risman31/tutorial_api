<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MData');
	}

	public function index()
	{
        $status = array(
                'status' => 'Ok'
        );
		echo json_encode($status);
    }

    public function GetDataMahasiswa()
    {
        $query = $this->MData->GetData('tbl_mahasiswa')->result();
        echo json_encode($query);
    }

}
