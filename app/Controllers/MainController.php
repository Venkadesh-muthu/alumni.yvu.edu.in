<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function __construct()
    {

    }
    public function index()
    {
        return $this->renderPage('Office of the International Affairs (OIA)', 'index');
    }
    public function about()
    {
        return $this->renderPage('About Yogi Vemana University OIA', 'about');
    }
    public function visionCorePurpose()
    {
        return $this->renderPage('Vision & Core Purpose', 'vision_core_purpose');
    }
    public function alumniAssociation()
    {
        return $this->renderPage('Alumni Association', 'alumni_association');
    }
    public function contact()
    {
        return $this->renderPage('Contact Us', 'contact');
    }
    public function renderPage($title, $view, $data = [])
    {
        $data['title'] = $title;
        return view('layout/header', $data) . view($view, $data) . view('layout/footer', $data);
    }
}
