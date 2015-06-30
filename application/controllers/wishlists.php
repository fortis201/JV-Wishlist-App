<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlists extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('wishlist');
	}

	public function index()	{
		$my_list = $this->wishlist->show_list($this->session->userdata('id'));
		$this->load->view('index', array('my_list'=>$my_list));
	}

	function show_others() {
		$others_list = $this->wishlist->others_list($this->session->userdata('id'));
		$this->load->view('partials/others', array('others_list'=>$others_list));
	}

	function show_item($item_name) {
		// var_dump($this->input->post());
		// die();
		// $item_name = $this->input->post();
		$replaced = str_replace('%20', ' ', $item_name);
		$item = $this->wishlist->show_item($replaced, $this->session->userdata('id'));
		$this->load->view('partials/item', array('item_name' => $replaced, 'item_info' => $item));
	}

	function home() {
		redirect('/wishlists');
	}

	function goto_create() {
		$this->load->view('create');
	}

	function create() {
		$check_if_exists = $this->wishlist->read_to_check($this->input->post('item_name'));
		if (count($check_if_exists) > 0) {
			$this->session->set_flashdata('exists_error', 'This item already exists in the database! Please enter a unique item name.');
			redirect('/wishlists/goto_create');
		} else {
			$this->wishlist->create($this->input->post());
			$this->wishlist->update_wishlist_on_create($this->input->post('item_name'));
			$this->session->set_flashdata('create_success', "Successfully added a new item to your wishlist!");
			redirect('/wishlists');
		}	
	}

	function update_wishlist($item_id) {
		$this->wishlist->update_wishlist($item_id);
		redirect('/wishlists');
	}

	function destroy($item_name) {
		// var_dump($item_name);
		// die();
		$replaced = str_replace('%20', ' ', $item_name);
		$this->wishlist->destroy($replaced, $this->session->userdata('id'));
		redirect('/wishlists');

	}

}

//end of main controller