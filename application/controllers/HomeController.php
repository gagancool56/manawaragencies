<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		load_file('index');
	}

	function pages($filename = '')
	{
		load_file($filename);
	}
}
