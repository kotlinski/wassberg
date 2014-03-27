<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Simon
 * Date: 2012-01-05
 * Time: 14:17
 * To change this template use File | Settings | File Templates.
 */

class Wassberg_media extends CI_Controller
{

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

	public function show_page($page_id = HOME_ID)
	{
		$menu_items = array(HOME_ID => "Hem",
			WEDDING_ID => "Bröllop",
			PRODUCTION_ID => "Verk",
			INSPIRATION_ID => "Inspiration",
			CONTACT_ID => "Kontakt"
		);

		$data['page_id'] = $page_id;
		$data['menu_items'] = $menu_items;
		if ($page_id == WEDDING_ID) {
			$data['selected_module'] = $this->load->view('wedding/index', $data, TRUE);
			$data['title'] = $menu_items[WEDDING_ID];
		} else if ($page_id == PRODUCTION_ID) {
			$data['selected_module'] = $this->load->view('production/index', $data, TRUE);
			$data['title'] =  $menu_items[PRODUCTION_ID];
		} else if ($page_id == INSPIRATION_ID) {
			$data['selected_module'] = $this->load->view('inspiration/index', $data, TRUE);
			$data['title'] = $menu_items[INSPIRATION_ID];
		} else if ($page_id == CONTACT_ID) {
			$data['selected_module'] = $this->load->view('contact/index', $data, TRUE);
			$data['title'] = $menu_items[CONTACT_ID];
		} else { //HOME_ID
			$data['selected_module'] = $this->load->view('home/index', $data, TRUE);
			$data['title'] = $menu_items[HOME_ID];
		}
		$data['menu'] = $this->load->view('templates/menu', $data, TRUE);
		$this->load->view('wassberg_base', $data);
	}
}