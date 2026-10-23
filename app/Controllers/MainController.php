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
    public function aboutOia()
    {
        return $this->renderPage('About Yogi Vemana University OIA', 'about_oia');
    }
    public function director()
    {
        return $this->renderPage('Director', 'director');
    }
    public function associateDirector()
    {
        return $this->renderPage('Associate Director', 'associate_director');
    }
    public function facultyVisits()
    {
        return $this->renderPage('Faculty Recent Visits-Visiting Fellowships/Seminars', 'faculty_visits');
    }
    public function postdoctoral()
    {
        return $this->renderPage('Postdoctoral', 'postdoctoral');
    }
    public function internationalSeminars()
    {
        return $this->renderPage('International Seminars', 'international_seminars');
    }
    public function pressNews()
    {
        return $this->renderPage('Press News', 'press_news');
    }
    private function renderPage(string $title, string $content)
    {
        return view('layout/templates', [
            'title' => $title,
            'content' => $content,
        ]);
    }
    public function about()
    {
        return redirect()->to(base_url('/about-oia'));
    }
    public function controllers()
    {
        return redirect()->to(base_url('/director'));
    }
    public function staff()
    {
        return redirect()->to(base_url('/associate-director'));
    }
    public function latestInfo()
    {
        return redirect()->to(base_url('/press-news'));
    }
    public function downloads()
    {
        return redirect()->to(base_url('/'));
    }
    public function contact()
    {
        return redirect()->to(base_url('/#office-address'));
    }

}
