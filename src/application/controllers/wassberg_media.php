<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Simon
 * Date: 2012-01-05
 * Time: 14:17
 * To change this template use File | Settings | File Templates.
 */

class Wassberg_media extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
/*        $this->load->model('startpage_model');
		$this->load->model('Images_model', 'images_model');*/
    }

    public function index()
    {
        $this->show_page();
    }

    public function show_page($page_id = STARTPAGE_ID)
    {
        $data['page_id'] = $page_id;
        if ($page_id == 999){

        } else { //STARTPAGE_ID
            $data['selected_module'] = $this->load->view('startpage/index', '', TRUE);
            $data['title'] = 'Hem';
        }
        $data['menu'] = $this->load->view('templates/menu', $data, TRUE);
        $this->load->view('wassberg_base', $data);
    }
}