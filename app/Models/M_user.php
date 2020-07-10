<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model{

	protected $table = 'user';
	protected $primaryKey = 'email';
	protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'date_update'];
}