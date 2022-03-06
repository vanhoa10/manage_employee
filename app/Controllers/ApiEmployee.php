<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Employee;

class ApiEmployee extends ResourceController
{
    use ResponseTrait;

    //lấy tất cả dữ liệu
    public function all()
    {
        $employee = new Employee();
        $data['if_employee'] = $employee->findAll();
        return $this->respond($data, 200);
    }

    //lấy 1 dữ liệu
    public function once($id=null)
    {
        $employee = new Employee();
        $data = $employee->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Không có dữ liệu với id ' . $id);
        }
    }

    //thêm dữ liệu 
    public function create()
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
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Thêm thành công'
            ]
        ];
        return $this->respondCreated($response);
    }

    public function delete($id = null)
    {
        $employee = new Employee();
        $data = $employee->find($id);
        if ($data) {
            $employee->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }
}
