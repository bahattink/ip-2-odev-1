<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hakkimizda()
    {
        $student = new Student();
        $student->first_name = "Eralp";
        $student->last_name = "Sarıbıyık";
        $student->city = "Balıkesir";
        $student->save();

        return view('pages.hakkimizda');
    }

    public function bolumlerimiz()
    {
        return view('pages.bolumlerimiz');
    }

    public function bizeUlasin()
    {
        return view('pages.bize-ulasin');
    }
}
