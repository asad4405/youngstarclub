<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::where('status', 1)->latest()->get();
        return view('Backend.expense.index',compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::where('status', 1)->orderBy('position', 'ASC')->get();
        return view('Backend.expense.create',compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expense                 = new Expense();
        $expense->program_id     = $request->program_id;
        $expense->user_id        = Auth::id();
        $expense->expense_reason = $request->expense_reason;
        $expense->amount         = $request->amount;
        $expense->date           = $request->date;
        $expense->status         = $request->status;

        $expense->save();
        return redirect()->route('admin.expense.index')->with('success', 'New Expense Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense = Expense::find($id);
        $programs = Program::where('status', 1)->latest()->get();
        if ($expense->user_id != Auth::id()) {
            return back()->with('error', 'No Edited!');
        }
        return view('Backend.expense.edit',compact('expense',compact('programs')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expense                 = Expense::find($id);
        $expense->program_id     = $request->program_id;
        $expense->user_id        = Auth::id();
        $expense->expense_reason = $request->expense_reason;
        $expense->amount         = $request->amount;
        $expense->date           = $request->date;
        $expense->status         = $request->status;

        $expense->update();
        return redirect()->route('admin.expense.index')->with('success', 'Expense Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::find($id);
        if ($expense->user_id != Auth::id()) {
            return back()->with('error', 'No Deleted!');
        }
        $expense->delete();
        return redirect()->route('admin.expense.index')->with('delete-success', 'Expense Deleted Successfull!');
    }
}
