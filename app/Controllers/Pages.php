<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Login'
		];
		return view('pages/login', $data);
	}

	public function register_sipadu()
	{
		$data = [
			'title' => 'Register SIPADU'
		];
		return view('pages/register_sipadu', $data);
	}

	public function register_google()
	{
		$data = [
			'title' => 'Register Google'
		];
		return view('pages/register_google', $data);
	}

	public function reset_password()
	{
		$data = [
			'title' => 'Reset Password'
		];
		return view('pages/reset_password', $data);
	}

	public function login_sipadu()
	{
		$data = [
			'title' => 'Login SIPADU'
		];
		return view('pages/login_sipadu', $data);
	}

	public function login_google()
	{
		$data = [
			'title' => 'Login Google'
		];
		return view('pages/login_google', $data);
	}
	//--------------------------------------------------------------------

}
