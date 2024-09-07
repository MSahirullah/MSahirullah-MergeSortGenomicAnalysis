<?php

namespace App\Http\Controllers\Sms;

use App\Http\Controllers\Controller;
use App\Http\Requests\SmsSettingUpdateRequest;
use App\Models\Sms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SmsSettingsController extends Controller
{
    public function index(Request $request)
    {
        $sms = Sms::first();
        return view('sms-settings.index', [
            'sms' => $sms,
        ]);
    }

    public function update(SmsSettingUpdateRequest $request): RedirectResponse
    {
        $sms = Sms::first();

        if ($sms === null) {
            $sms = new Sms();
        }

        $sms->fill($request->validated());
        $sms->save();

        return Redirect::route('sms-settings.index')->with('status', 'sms-details-updated');
    }
}
