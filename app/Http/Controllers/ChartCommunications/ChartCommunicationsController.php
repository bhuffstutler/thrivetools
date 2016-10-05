<?php

namespace App\Http\Controllers\ChartCommunications;

use App\Queries\ChartCommunications\CommunicationsByProviderByDate;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChartCommunicationsController extends Controller
{
    /**
     * Show a Provider list view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return 'Provider list goes here';
    }

    /**
     * List the Chart Communications for the given Provider from Today
     *
     * @param $provider_num
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function today($provider_num)
    {
        $start_date = Carbon::today();
        $end_date = Carbon::today();
        $view = 'Today';

        $communications = (new CommunicationsByProviderByDate($provider_num, $start_date, $end_date))->get();

        return view('ChartCommunications.list', compact('view', 'communications'));
    }

    /**
     * List the Chart Communications for the given Provider from Yesterday
     *
     * @param $provider_num
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yesterday($provider_num)
    {
        $start_date = Carbon::yesterday();
        $end_date = Carbon::yesterday();
        $view = 'Yesterday';

        $communications = (new CommunicationsByProviderByDate($provider_num, $start_date, $end_date))->get();

        return view('ChartCommunications.list', compact('view', 'communications'));
    }

    /**
     * List the Chart Communications for the given Provider from the last Seven Days
     *
     * @param $provider_num
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sevenDays($provider_num)
    {
        $start_date = Carbon::today()->subDay(7);
        $end_date = Carbon::today();
        $view = 'Seven Days';

        $communications = (new CommunicationsByProviderByDate($provider_num, $start_date, $end_date))->get();

        return view('ChartCommunications.list', compact('view', 'communications'));
    }
}
