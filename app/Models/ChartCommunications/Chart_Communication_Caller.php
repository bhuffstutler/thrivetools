<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\Chart_Communication_Caller
 *
 * @property integer $ccc_serialkey
 * @property string $ccc_name
 * @property float $ccc_phone
 * @property float $ccc_ext
 * @property-read \App\Models\ChartCommunications\Chart_Communication_Action $action
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Caller whereCccSerialkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Caller whereCccName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Caller whereCccPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Caller whereCccExt($value)
 * @mixin \Eloquent
 */
class Chart_Communication_Caller extends Model
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
    protected $table = 'chart_communication_caller';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'ccc_serialkey';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Action that owns this Caller.
     */
    public function action()
    {
        return $this->belongsTo(Chart_Communication_Action::class, 'ccc_serialkey', 'cca_caller');
    }
}
