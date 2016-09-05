<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkproject extends CI_Controller {

    /**
     *
     *    Контроллер изменения статуса проекта
     *
     */
    public function projectstatus()
    {
	$this->load->database();

	$projectId = $this->input->post('projectId');
	$projectStatus = $this->input->post('projectStatus');

	$projectId = str_replace('project-','',$projectId);

	$data = array('status' => $projectStatus);

	$where = " id = '$projectId' ";

	$str = $this->db->update('projects', $data, $where);
    }
}
?>