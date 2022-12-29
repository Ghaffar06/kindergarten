<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function create(Request $request): RedirectResponse
    {
        $authorization = RoleController::can('create report');
        if ($authorization !== null) {
            return $authorization;
        }

        $request->validate([
            'message' => 'required',
            'title' => 'required',
        ]);
        $report = new Report;
        $report->title = $request->title;
        $report->message = $request->message;
        $report->handled = 'N';
        $report->user_id = $request->user()->id;
        $report->save();
        $user = (new User)->findOrFail($request->user()->id);
        $user->reports()->save($report);

        return back()->with('success', 'your report has sent!');
    }

    public function handleReport(Report $report): RedirectResponse
    {
        $authorization = RoleController::can('handle report');
        if ($authorization !== null) {
            return $authorization;
        }

        $report->handled = 'Y';
        $report->save();
        return back()->with('success', 'report marked as read!');
    }

    public function index()
    {
        $authorization = RoleController::can('create report');
        if ($authorization !== null) {
            return $authorization;
        }

        return view('report.index');
    }

    public function viewReport(Report $report)
    {
        $authorization = RoleController::can('view report details');
        if ($authorization !== null) {
            return $authorization;
        }

        return view('report.single_report', ['report' => $report]);
    }
}
