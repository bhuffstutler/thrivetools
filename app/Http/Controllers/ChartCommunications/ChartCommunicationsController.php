<?php

namespace App\Http\Controllers\ChartCommunications;

use App\Models\ChartCommunications\Chart_Communication;
use App\Models\ChartCommunications\Chart_Communication_Action;
use App\Queries\ChartCommunications\CommunicationsByDate;
use App\Queries\ChartCommunications\CommunicationsByProviderByDate;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChartCommunicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Index2';
    }

    /**
     * Display Gayla's Chart Communications
     *
     * @return \Illuminate\Http\Response
     */
    public function actions()
    {
        // TODO Remove if unneeded
        $actions = Chart_Communication_Action::has('recipient')
            ->whereHas('note', function($query) {
                $query->where('note_author', '=', 'u10475');
            })
            ->orWhereHas('recipient', function($query) {
                $query->where('ccr_tm_queue', '=', 'u10475');
            })
            ->with('chart_communication', 'chart_communication.account',
            'caller', 'recipient', 'recipient.name', 'note', 'note.author')
            ->get()->groupBy('cca_communication');

        return view('app', compact('actions'));
    }

    public function today()
    {
        $view = 'Today';

        // TODO Move to repository or class
        $cc_list = DB::connection('cpsi')->select("
            SELECT chart_communication.cc_serialkey
            FROM
                chart_communication,
                chart_communication_action,
                note,
                ip_visit_1
            WHERE
                chart_communication.cc_serialkey = chart_communication_action.cca_communication AND
                chart_communication.cc_arxnum = ip_visit_1.ipv1_num AND
                chart_communication_action.cca_note = note.note_id AND
                ip_visit_1.ipv1_phy = 5 AND
                date(note.note_dttm) = '".Carbon::today()."';
        ");

        //TODO Check for results before looping through $cc_list
        foreach($cc_list as $cc)
        {
            $cc_array[] = $cc->cc_serialkey;
        }

        $communications = Chart_Communication::whereIn('cc_serialkey', $cc_array)
            ->with('account', 'actions.recipient.name', 'actions.caller', 'actions.note.author')
            ->get();

        return view('ChartCommunications.list', compact('view', 'communications'));
    }

    public function yesterday()
    {
        $view = 'Yesterday';

        $cc_list = DB::connection('cpsi')->select("
            SELECT chart_communication.cc_serialkey
            FROM
                chart_communication,
                chart_communication_action,
                note,
                ip_visit_1
            WHERE
                chart_communication.cc_serialkey = chart_communication_action.cca_communication AND
                chart_communication.cc_arxnum = ip_visit_1.ipv1_num AND
                chart_communication_action.cca_note = note.note_id AND
                ip_visit_1.ipv1_phy = 5 AND
                date(note.note_dttm) = '".Carbon::yesterday()."';
        ");

        //TODO Check for results before looping through $cc_list
        foreach($cc_list as $cc)
        {
            $cc_array[] = $cc->cc_serialkey;
        }

        $communications = Chart_Communication::whereIn('cc_serialkey', $cc_array)
            ->with('account', 'actions.recipient.name', 'actions.caller', 'actions.note.author')
            ->get();

        //return $communications;
        return view('ChartCommunications.list', compact('view', 'communications'));
    }

    public function sevenDays()
    {
        $view = '7 Days';

        $cc_list = DB::connection('cpsi')->select("
            SELECT chart_communication.cc_serialkey
            FROM
                chart_communication,
                chart_communication_action,
                note,
                ip_visit_1
            WHERE
                chart_communication.cc_serialkey = chart_communication_action.cca_communication AND
                chart_communication.cc_arxnum = ip_visit_1.ipv1_num AND
                chart_communication_action.cca_note = note.note_id AND
                ip_visit_1.ipv1_phy = 5 AND
                date(note.note_dttm) BETWEEN '".Carbon::today()->subDay(7)."' AND '".Carbon::today()."';
        ");

        //TODO Check for results before looping through $cc_list
        foreach($cc_list as $cc)
        {
            $cc_array[] = $cc->cc_serialkey;
        }

        $communications = Chart_Communication::whereIn('cc_serialkey', $cc_array)
            ->with('account', 'actions.recipient.name', 'actions.caller', 'actions.note.author')
            ->get();

        //return $communications;
        return view('ChartCommunications.list', compact('view', 'communications'));
    }

    public function test()
    {
        $view = 'Test';
        //$communications = (new CommunicationsByProviderByDate(5, Carbon::today(), Carbon::today()))->get();
        $communications = (new CommunicationsByProviderByDate())->get();


        return view('ChartCommunications.list', compact('view', 'communications'));
    }
}
