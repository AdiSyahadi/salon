<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function kontak()
	{
		$this->load->view('kontak');
	}

	public function pesanan()
	{
		$this->load->view('pesanan');
	}

	public function paket1()
	{
		$this->load->view('paket/paket1');
	}

	public function paket2()
	{
		$this->load->view('paket/paket2');
	}

	public function paket3()
	{
		$this->load->view('paket/paket3');
	}

	public function paket4()
	{
		$this->load->view('paket/paket4');
	}

	public function paket5()
	{
		$this->load->view('paket/paket5');
	}

	public function paket6()
	{
		$this->load->view('paket/paket6');
	}

	public function paket7()
	{
		$this->load->view('paket/paket7');
	}
}
