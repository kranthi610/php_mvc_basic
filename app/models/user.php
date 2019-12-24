<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	public $name;
	public $timestamps = false;
	protected $fillable = ['username','email'];
}