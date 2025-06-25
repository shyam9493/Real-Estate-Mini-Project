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

        return view('Admin/Index', ['properties' => $properties]);
    }
    public function view_property($id)
    {
        $propertyModel = new PropertyModel();
        $property = $propertyModel->find($id);
        return view('User/view_property', ['property' => $property, 'id' => $id]);
    }
    
    public function addProperty()
    {
        $propertyModel = new PropertyModel();
        $image = $this->request->getFile('images');
        
        $imagePath = null;
        if ($image && $image->isValid()) {
            $image->move('uploads');
            $imagePath = 'uploads/' . $image->getName();
        }

        $data = [
            'name' => $this->request->getPost('property_name'),
            'type' => $this->request->getPost('property_type'),
            'price' => $this->request->getPost('price'),
            'area_sqft' => $this->request->getPost('area'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'image_path' => $imagePath,
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        if ($propertyModel->insert($data)) {
            return redirect()->to('/admin')->with('success', 'Property added successfully!');
        } else {
            return redirect()->to('/admin')->with('error', 'Failed to add property. Please try again.');
        }
    }
}
