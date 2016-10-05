<?php

namespace App\Models\ChartCommunications;

use App\IpVisit1;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\ChartCommunication
 *
 * @property integer $cc_serialkey
 * @property float $cc_spid
 * @property float $cc_arid
 * @property string $cc_arxnum
 * @property string $cc_status
 * @property float $cc_profilenum
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChartCommunications\ChartCommunicationAction[] $actions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcSerialkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcSpid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcArid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcArxnum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunication whereCcProfilenum($value)
 * @mixin \Eloquent
 * @property-read \App\IpVisit1 $account
 */
class ChartCommunication extends Model
{
    /**
     * The database connection associated with the model.
     *
     * @var string
     */
    protected $connection = 'cpsi';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chart_communication';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'cc_serialkey';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Actions for this Chart Communication.
     */
    public function actions()
    {
        return $this->hasMany(ChartCommunicationAction::class, 'cca_communication');
    }

    /**
     * Get the account info (IpVisit1) for this Chart Communication.
     */
    public function account()
    {
        return $this->hasOne(IpVisit1::class, 'ipv1_num', 'cc_arxnum')
            ->select(array('ipv1_num', 'ipv1_lastname', 'ipv1_firstname', 'ipv1_phy'));
    }

    /**
     * Get the Notes for this Chart Communication.
     */
    public function notes()
    {
        return $this->hasManyThrough(Note::class, ChartCommunicationAction::class,
            'cca_note', 'note_id');
    }
}
