<?php

class Home extends Controller
{
	public function __construct()
	{
		$this->user = $this->model('user');
	}
	public function index( $name = 'guest', int $age = 0 )
	{
		$this->user->name = $name;
		$this->user->age = $age;
		return $this->view('home/index', $this->user );
	}

	public function create( $username, $email )
	{
		/*User::create([
			'username' => $username,
			'email' => $email
		]); */
		$this->user->create([
			'username' => $username,
			'email' => $email
		]); 
	}
}