<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookingModel;

class BookingController extends BaseController
{
    public function index()
    {
        $bookingModel = new BookingModel();
        $bookings = $bookingModel->findAll();

        return view('Admin/View_Bookings', ['bookings' => $bookings]);
    }
    public function bookNow()
    {
        $bookingModel = new BookingModel();
        $bookings = $bookingModel->findAll();

        return view('User/Index', ['bookings' => $bookings]);
    }
    public function create()
    {
        return view('bookings/create');
    }
    public function store()
    {
        $bookingModel = new BookingModel();
        $data = [
            'property_id' => $this->request->getPost('property_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'datetime' => $this->request->getPost('datetime'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $bookingModel->insert($data);
        return redirect()->to('/bookings');
    }
}
