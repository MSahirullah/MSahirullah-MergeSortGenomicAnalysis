<?php

namespace App\Http\Controllers\Sms;

use App\Http\Controllers\Controller;
use App\Models\SmsLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SmsHistoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $smsLogs = SmsLog::select('*');
            return datatables()->of($smsLogs)
                // ->addColumn('campaign_id', function ($smsLog) {
                //     return $smsLog->campaign_id ?? '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">NULL</span>';
                // })
                // ->addColumn('type', function ($smsLog) {
                //     return $smsLog->type ?? '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">NULL</span>';
                // })
                // ->addColumn('created_at', function ($smsLog) {
                //     return Carbon::parse($smsLog->created_at)->format('m/d/Y h:i A');
                // })
                // ->addColumn('is_sent', function ($smsLog) {
                //     if ($smsLog->is_sent) {
                //         return '<span class="text-no-wrap bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-1 rounded-full dark:bg-green-900 dark:text-green-300">Sent</span>';
                //     } else {
                //         return '<span class="text-no-wrap bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-1 rounded-full dark:bg-red-900 dark:text-red-300">Not Sent</span>';
                //     }
                // })
                // ->rawColumns(['campaign_id', 'type', 'is_sent'])
                ->make(true);
        }

        return view('sms-history.index');
    }
}
