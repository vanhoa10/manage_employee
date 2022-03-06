<?php

namespace App\Controllers;

use App\Models\Employee;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class Employee_db extends BaseController
{
	protected $table = 'if_employee';
	private $db;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}

	public function select()
	{
		$data['if_employee'] = $this->db->table($this->table)->select('id, name, birth, phonenumber, position')->get()->getResult();
		return view('empl/home', $data);
	}

	public function show($id) 
	{
		$data['if_employee'] = $this->db->table($this->table)->select('*')->where(["id"=>$id])->get()->getResult();
		return view('empl/show', $data);
	}
	public function create()
	{
		return view('empl/add');
	}

	public function save()
	{
		$employee = new Employee();
		$data = [
			'id' => $this->request->getPost('id'),
			'name' => $this->request->getPost('name'),
			'birth' => $this->request->getPost('birth'),
			'hometown' => $this->request->getPost('hometown'),
			'phonenumber' => $this->request->getPost('phonenumber'),
			'position' => $this->request->getPost('position'),
			'department' => $this->request->getPost('department'),
			'identification_card'  => $this->request->getPost('identification_card'),
			'issued_on' => $this->request->getPost('issued_on'),
			'placed_on' => $this->request->getPost('placed_on'),
		];
		$employee->insert($data);
		log_message('info', "employee save: " . json_encode($data));
		return redirect()->to(base_url('/'));
	}

	public function delete($id) {
		$employee = new Employee();
		$employee->delete($id);
		return redirect()->to(base_url('/'));
	}

	public function home() 
	{
		return view('empl/home');
	}

	public function ajaxSearch()
	{
		helper(['form', 'url']);
		$builder = $this->db->table($this->table);
		$query = $builder->like('position', $this->request->getVar('q'))->select('id, name, birth, phonenumber, position')->get();
		$data = $query->getResult();
		echo json_encode($data);
	}
}
