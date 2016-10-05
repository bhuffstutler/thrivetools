<?php

namespace App\Queries\ChartCommunications;


use Carbon\Carbon;
use DB;
use App\Models\ChartCommunications\ChartCommunication;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CommunicationsByProviderByDate
 * @package App\Queries\ChartCommunications
 *
 * @param int $provider
 * @param string $start_date
 * @param string $end_date
 *
 * @return Collection
 */

class CommunicationsByProviderByDate
{
    protected $start_date, $end_date;

    public function __construct($provider = null, $start_date = null, $end_date = null)
    {
        // Assign some defaults if arguments are not supplied.
        $this->provider = ($provider == null) ? 5 : $provider;
        $this->start_date = ($start_date == null) ? Carbon::today() : $start_date;
        $this->end_date = ($end_date == null) ? Carbon::today() : $end_date;
    }

    public function get()
    {
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
                ip_visit_1.ipv1_phy = ".$this->provider." AND
                date(note.note_dttm) BETWEEN '".$this->start_date."' AND '".$this->end_date."';
        ");

        // Check for results before looping through $cc_list
        if (count($cc_list) > 0)
        {
            foreach ($cc_list as $cc) {
                $cc_array[] = $cc->cc_serialkey;
            }

            return ChartCommunication::whereIn('cc_serialkey', $cc_array)
                ->with('account', 'actions.recipient.name', 'actions.caller', 'actions.note.author')
                ->get();
        }
        else
        {
            return null;
        }
    }
}