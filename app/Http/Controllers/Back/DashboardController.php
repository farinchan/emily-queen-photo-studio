<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'menu' => 'dashboard',
            'sub_menu' => '',

        ];
        return view('back.pages.dashboard.index', $data);
    }

    public function visistorStat()
    {


        $data = [
            'visitor_monthly' => Visitor::select(DB::raw('Date(created_at) as date'), DB::raw('count(*) as total'))
            ->orderBy('date', 'desc')
                ->limit(30)
                ->groupBy('date')
                ->get(),
            'visitor_platfrom' => Visitor::select('platform', DB::raw('count(*) as total'))
                ->groupBy('platform')
                ->get(),
            'visitor_browser' => Visitor::select('browser', DB::raw('count(*) as total'))
                ->groupBy('browser')
                ->get(),
        ];
        return response()->json($data);
    }
}
