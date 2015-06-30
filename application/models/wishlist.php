<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends CI_Model {
	function show_list($current_user_id) {
		// echo "in model";
		// var_dump($current_user_id);
		// die();

		return $this->db->query("SELECT users.first_name, users.username, users.email, items.item_name, items.created_by, wishlists.created_at, added_by_user.username as added_by_user FROM users LEFT JOIN wishlists ON users.id = wishlists.user_id LEFT JOIN items ON wishlists.item_id = items.id LEFT JOIN users as added_by_user ON items.created_by = added_by_user.id WHERE users.id = ?", array(intval($current_user_id)))->result_array();
	}

	function others_list($user_id) {
		return $this->db->query("SELECT DISTINCT items.id as this_item_id, items.item_name, wishlists.created_at as date_wishlisted, added_by_user.username as wishlisted_by FROM items LEFT JOIN wishlists ON items.id = wishlists.item_id LEFT JOIN users as added_by_user ON wishlists.user_id = added_by_user.id WHERE items.item_name NOT IN ( SELECT items.item_name FROM items LEFT JOIN wishlists ON items.id = wishlists.item_id LEFT JOIN users ON wishlists.item_id = users.id WHERE wishlists.user_id = ?) GROUP BY items.item_name", array($user_id))->result_array();
	}

	function show_item($item_name, $user_id) {
		return $this->db->query("SELECT items.id, items.item_name, users.username as also_added_by FROM items LEFT JOIN wishlists ON  wishlists.item_id = items.id LEFT JOIN users ON users.id = wishlists.user_id WHERE items.item_name = ? AND users.id != ?", array($item_name, $user_id))->result_array();
	}

	// check if item_name is already in db
	function read_to_check($item_name) {
		return $this->db->query("SELECT items.item_name FROM items where items.item_name = ?", array($item_name))->row_array();
	}

	function create($post) {
		$this->db->query("INSERT INTO items (item_name, created_by) VALUES (?,?)", array($post['item_name'], intval($post['user_id'])));
	}

	function update_wishlist_on_create($item_name) {
		$new_item_id = $this->db->query("SELECT items.id FROM items where items.item_name = ?", array($item_name))->row_array();
		$this->db->query("INSERT INTO wishlists (user_id, item_id, created_at) VALUES (?, ?, NOW())", array($this->session->userdata('id'), $new_item_id['id']));
	}

	function update_wishlist($item_id) {
		$this->db->query("INSERT INTO wishlists (user_id, item_id, created_at) VALUES (?, ?, NOW())", array($this->session->userdata('id'), $item_id));
	}

	function destroy($item_name, $user_id) {
		$item_id = $this->db->query("SELECT items.id FROM items where items.item_name = ?", array($item_name))->row_array();
		$this->db->query("DELETE FROM wishlists WHERE wishlists.item_id = ? AND wishlists.user_id = ?", array($item_id['id'], $user_id));
	}


}