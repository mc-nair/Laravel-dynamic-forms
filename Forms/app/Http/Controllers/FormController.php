<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\AdminFormDetails;
use App\Forms;

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

    public function createform(Request $request){
        $params= $request->all();
        $formName=$params['formName'];
        $form_data = array(
            'formname'  =>  $params['formName'],
        );
       // print_r($form_data);exit;
        $result=AdminForms::create($form_data);
        return view('formdetail',compact('result'));
        // return $result;
    }

    public function createquestions($res=''){
        //print_r($res);exit;
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
        
        return view('questiontypes',compact('data'));
    }

    public function submit (Request $request){
        $params= $request->all();
        //print_r($params);exit;
        
        if(isset($params['gender'])){
            $gender=$params['gender'];
        } else {
            $gender='';
        }
        $form_data = array(
            'formname'  =>  $params['formName'],
            'questiontypelabel'     =>  $params['labelvalue'],
            'questiontypevalue'  => $params['builderTextName'],
            'option1'=> $gender,
            'option2' => '',
            'option3' => ''
            
        );
        $result=AdminFormDetails::create($form_data);
       
        return $result;
    }
    
}
