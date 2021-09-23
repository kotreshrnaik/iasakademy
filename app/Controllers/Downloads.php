<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
use CodeIgniter\Controller;
/**
 * Description of Downloads
 *
 * @author Admin
 */
class Downloads extends Controller{
    public function index()
    {
        return view('/downloads/downloads_view');
    }
    public function UPSCSyllabus()
    {
        return view('downloads/upscsyllabus_view');
    }
    public function NCERTBooks()
    {
        return view('downloads/ncertbooks_view');
    }
    public function NIOSStudyMaterial()
    {
        return view('downloads/niosstudymaterial_view');
    }
    public function YojanaAndKurukshetra()
    {
        return view('downloads/yojanaandkurukshetra_view');
    }
    public function PreviousYearPapers()
    {
        return view('downloads/previousyearpapers_view');
    }
    
    
}
