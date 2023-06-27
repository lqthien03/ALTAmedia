<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Models\Option;
use App\Models\Supply;
use App\Models\Progression;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ProgressionController extends Controller
{
    public function ShowProgression()
    {

        $firtProgressions = Progression::with(['user', 'supply', 'service', 'status'])->get();

        $progressions = $firtProgressions->filter(function ($progression) {
            return $progression->user->role_id === 1;
        });
        if ($key = request()->key) {
            $progressions = Progression::where('id_user->name', 'like', '%' . $key . '%')->get();
        }
        return view('progression.progression', compact('progressions'));
    }


    public function AddProgression()
    {
        $option_service = Service::all();
        return view('progression.add_progression', compact('option_service'));
    }
    public function StoreProgression(Request $request)
    {

        $request->validate([
            'id_service' => 'required|exists:services,id',
            // 'id_user'=>'required|exists:users,id',
        ]);
        //số thứ tự
        $service = Service::find($request->id_service);
        // dd($service);

        $rule = $service->rule_progression;
        // dd($rule);
        $last_progression = Progression::latest('id')->first();
        if ($rule->is_prefix == 1) {
            $nextId = $last_progression ? $last_progression->id + 1 : $rule->start_count;

            $nextCode = $service->ma_service . Str::padLeft($nextId, 4, '0');
        }

        $issuedAt = Carbon::now();
        // dd($issuedAt);

        $expiredAt  = $issuedAt->copy()->addHours(24);

        // dd($nextCode, $issuedAt, $expiredAt);

        $progression = Progression::create([
            'id_service' => $service->id,
            'stt' => $nextCode,
            'time_cap' => $issuedAt,
            'time_sudung' => $expiredAt,
        ]);
        // dd($progression);
        $option_service = Service::all();

        // return view('progression.add_progression',compact('option_service'));

        $dataSuccess = [
            'name_service' => $service->name_service,
            'stt' => $nextCode,
            'time_cap' => date($issuedAt),
            'time_sudung' => date($expiredAt),
        ];

        return back()->with('dataSuccess', $dataSuccess);
    }


    public function Detail_Progression($id)
    {
        $progression_id = Progression::find($id);
        return view('progression.detail_progression', compact('progression_id'));
    }
}
