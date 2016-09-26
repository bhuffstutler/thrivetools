<?php

namespace App\Models\ChartCommunications;

use App\Ip_Visit_1;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\Chart_Communication
 *
 * @property integer $cc_serialkey
 * @property float $cc_spid
 * @property float $cc_arid
 * @property string $cc_arxnum
 * @property string $cc_status
 * @property float $cc_profilenum
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChartCommunications\Chart_Communication_Action[] $actions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcSerialkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcSpid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcArid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcArxnum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication whereCcProfilenum($value)
 * @mixin \Eloquent
 * @property-read \App\Ip_Visit_1 $account
 */
class Chart_Communication extends Model
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
        return $this->hasMany(Chart_Communication_Action::class, 'cca_communication');
    }

    /**
     * Get the account info (Ip_Visit_1) for this Chart Communication.
     */
    public function account()
    {
        return $this->hasOne(Ip_Visit_1::class, 'ipv1_num', 'cc_arxnum')
            ->select(array('ipv1_num', 'ipv1_lastname', 'ipv1_firstname'));
    }

}
