<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
    {
        public function index()
        {
            $data = [
                'judul'=> 'Dashboard',
                'subjudul'=> '',
                'menu'=> 'Dashboard',
                'submenu'=> '',
                'page' =>'v_admin',
            ];
            return view('v_template', $data);
        }

        }
    
    