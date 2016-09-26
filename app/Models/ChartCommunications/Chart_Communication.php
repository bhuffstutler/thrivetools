<?php

namespace App\Models\ChartCommunications;

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

}
