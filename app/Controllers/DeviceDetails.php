<?php

namespace App\Controllers;

use App\Models\MonitorModel;

class DeviceDetails extends BaseController
{
    protected $monitorModel;
    public function __construct()
    {
        $this->monitorModel = new MonitorModel();
    }
    public function index()
    {
        //$monitor = $this->monitorModel->findAll();

        $data = [
            'title' => 'Daftar Device',
            'monitor' => $this->monitorModel->getDevice()
        ];

        
        return view('details/index', $data);
    }

    public function detail($slug)
    {
        $data= [

            'title' => 'Detail Device',
            'device' => $this->monitorModel->getDevice($slug)
        ];
        return view('details/carddetail', $data);
    }
}