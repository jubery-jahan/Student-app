<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $fullName, $result, $i, $data = [], $password, $x, $index, $item;

    public function index()
    {
        return view('home', ['products' => Product::where('status',1)->get()]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function details($id)
    {
        return view('details', ['product' => Product::find($id)]);
    }

    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name. ' ' . $request->last_name;
        return back()->with([
                'full_name' => $this->fullName,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,

            ]
        );
    }

    public function creatSeries(Request $request)
    {
        switch ($request->choice)
        {
            case 'odd':
                $this->result = $this->getOddNumber($request);
                break;
            case 'even':
                $this->result = $this->getEvenNumber($request);
                break;
            case 'all':
                $this->result = $this->getAllNumber($request);
                break;
        }

        return back()->with ([

                'result' => $this->result

            ]
        );
    }

    private function getOddNumber(Request $request)
    {
        for($this->i = $request->starting_number; $this->i <= $request->ending_number;$this->i++)
        {
            if($this->i%2 != 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }

    private function getEvenNumber(Request $request)
    {
        for($this->i = $request->starting_number; $this->i <= $request->ending_number;$this->i++)
        {
            if($this->i%2 == 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }

    private function getAllNumber(Request $request)
    {
        for($this->i = $request->starting_number; $this->i <= $request->ending_number;$this->i++)
        {
                $this->result .= $this->i.' ';

        }
        return $this->result;
    }

    public function passwordGenerator()
    {
        return view('password-generator');
    }
    public function makePassword(Request $request)
    {
        $this->data = ['$','1', 'a','L','*','o','p','g','f'];
        $this->password=' ';
        for($x = 1; $x <= $request->password_length; $x++)
        {
            $this->index = rand(0,count($this->data) - 1);
            $this->item = $this->data[$this->index];
            $this->password = $this->password.$this->item;
        }
        return back()->with([
            'password_length' => $request->password_length,
            'your_password' =>$this->password
        ]);

    }

    public function studentInfo()
    {
        return view('student');
    }

    public function returnInfo(Request $request)
    {
        return back()->with([
            'name' => $request->name,
            'subjects' =>$request->subject,
        ]);
    }

}
