<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $array = [
        4200001 => [
            'lastname' => 'Seno',
            'firstname' => 'Chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true
        ],
        4200011 => [
            'lastname' => 'Ortiz',
            'firstname' => 'Bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false
        ]
    ];

    public function index()
    {
        return view('Home.index', ['showall' => $this->array]);
    }

    public function create()
    {
        return view('Home.create');
    }

    public function store(Request $request)
    {
        $studentnumber = Request()->input('studentnumber');
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $isnewstudent = Request()->input('isnewstudent');
        $array = [
            'studentnumber' => $studentnumber,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'birthday' => $birthday,
            'isnewstudent' => $isnewstudent
        ];
        return view('Home.store', ['store' => $array]);
    }

    public function show($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Home.show', ['show' => $this->array[$id]]);
    }

    public function edit($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Home.edit', ['edit' => $this->array[$id]]);
    }

    public function update(Request $request, $id)
    {
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $isnewstudent = Request()->input('isnewstudent');
        $array = [
            'lastname' => $lastname,
            'firstname' => $firstname,
            'birthday' => $birthday,
            'isnewstudent' => $isnewstudent
        ];
        return view('Home.update', ['update' => $array]);
    }

    public function destroy($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Home.destroy', ['destroy' => $this->array[$id]]);
    }
}
