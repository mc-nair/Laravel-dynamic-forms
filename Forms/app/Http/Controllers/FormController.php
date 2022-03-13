<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'links' => [
                [
                    'name' => 'name',
                    'value' => 'text'
                ],
                [
                    'name' => 'phone number',
                    'value' => 'number'
                ],
                [
                    'name' => 'lgender',
                    'value' => 'select'
                ]
            ]
        ];
        
        return view('forms',compact('data'));
    }

    public function add($formData){
        if($formData=='text'){
            $label='Name';
        } else if($formData=='number'){
            $label='Phone number';
        } else if($formData=='select'){
            $label='Gender';
        } else {
            $label='';
        }
        $data = [
            'links' => [
                [
                    'name' => 'name',
                    'value' => 'text'
                ],
                [
                    'name' => 'phone number',
                    'value' => 'number'
                ],
                [
                    'name' => 'lgender',
                    'value' => 'select'
                ]
                ],
            'builder' => [[
                'name' => $formData,
                'label' => $label,
            ]
            ]
        ];
         $arr=array();
         $arr['name']=$formData;
        return view('forms',compact('data'));
    }

    
}
