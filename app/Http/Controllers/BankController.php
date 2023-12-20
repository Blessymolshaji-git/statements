<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    public function index() {
        return view('bank.bank_statement_create');
    }
    public function store(){
        $request->validate([
             'name' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'teansfer_name' => 'required',
            'teansfer_email' =>'required',
]);
    Bank::create($request->all());
        return redirect()->route('form')->with('success','Amount Deposit Successfully');

    }
    public function liststatment( ){
    
        $bankstatement = Bank::latest()->paginate(10);
        return view('bank.statement_show',compact('bankstatement'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    
        
    }
     
    
}
