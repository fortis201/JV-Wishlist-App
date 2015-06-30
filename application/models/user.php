<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	function create($post) {
		return $this->db->query("INSERT INTO users (first_name, last_name, username, password, email, created_at) VALUES (?,?,?,?,?,NOW())", array($post['first_name'], $post['last_name'], $post['username'], md5($post['password']), $post['email']));
	}

	function read_by_username($username) {
		return $this->db->query("SELECT * FROM users WHERE users.username = ?", array($username))->row_array();
	}
}