<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PropertyModel;
use App\Models\BookingModel;

class PropertyController extends BaseController
{
    public function index()
    {
        $propertyModel = new PropertyModel();
        $properties = $propertyModel->findAll();

        return view('properties/index', ['properties' => $properties]);
    }
    public function create()
    {
        return view('properties/create');
    }
    public function store()
    {
        $propertyModel = new PropertyModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
            'price' => $this->request->getPost('price'),
            'area_sqft' => $this->request->getPost('area_sqft'),
            'address' => $this->request->getPost('address'),
            'description' => $this->request->getPost('description'),
            'image_path' => $this->request->getFile('image')->store(),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $propertyModel->insert($data);
        return redirect()->to('/properties');
    }
}
