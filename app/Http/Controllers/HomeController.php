<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\models\ClassModel;
use App\models\Subject;
use App\models\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $error = Session::get('error');
		$success=Session::get('success');
		$tclass = ClassModel::count();
		$tsubject = Subject::count();
		$tstudent=Student::count();
 		//$totalAttendance = Attendance::groupBy('date')->get();
 		//$totalExam = Marks::groupBy('exam')->groupBy('subject')->get();
		//$book = AddBook::count();
 		$total = [
 			'class' =>$tclass,
 			'student' =>$tstudent,
 			'subject' =>$tsubject
 			//'attendance' =>count($totalAttendance),
 			//'exam' =>count($totalExam),
			//'book' => $book
 		];
 	// 	//graph data
 		/*$monthlyIncome= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Income')
 		->groupBy('month')
 		->get();

 		$monthlyExpences= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Expence')
 		->groupBy('month')
 		->get();
 		$incomeTotal = Accounting::where('type','Income')
 		->sum('amount');
 		$expenceTotal = Accounting::where('type','Expence')
 		->sum('amount');
 		$incomes=$this->datahelper($monthlyIncome);
 		$expences=$this->datahelper($monthlyExpences);
 		$balance = $incomeTotal - $expenceTotal;*/
		return view('home');
    }
}
