<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookingModel;
use App\Models\PropertyModel;

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
         $propertyModel = new PropertyModel();
        $properties = $propertyModel->findAll();

        return view('User/Index', ['properties' => $properties]);

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
        if($bookingModel->where('property_id', $data['property_id'])
            ->where('email', $data['email'])
            ->where('phone', $data['phone'])
            ->first()) {
            return redirect()->to('/book_now')->with('error', 'You have already booked this property.');
        }
        if($bookingModel->insert($data)){
            return redirect()->to('/book_now')->with('success', 'Booking successful!');
        } else {
            return redirect()->to('/book_now')->with('error', 'Failed to book property. Please try again.');
        }

    }
}
