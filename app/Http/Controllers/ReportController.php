<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'title' => 'required',
        ]);
        $report = new Report;
        $report->title = $request->title ;
        $report->message = $request->message ;
        $report->handled = 'N';
        $user = User::findOrFail($request->user()->id);
        $user->reports()->save($report);

        return back()->with('success', 'your report has sent!');
    }

    public function handleReport(Report $report)
    {
        $report->handled = 'Y';
        $report->save();
        return back()->with('success', 'report marked as read!');
    }

    public function index()
    {
        return view('report.index');
    }

    public function viewReport(Report $report)
    {
        return view('report.single_report', ['report' => $report]);
    }
}
