<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\ChartCommunicationCaller
 *
 * @property integer $ccc_serialkey
 * @property string $ccc_name
 * @property float $ccc_phone
 * @property float $ccc_ext
 * @property-read \App\Models\ChartCommunications\ChartCommunicationAction $action
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationCaller whereCccSerialkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationCaller whereCccName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationCaller whereCccPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationCaller whereCccExt($value)
 * @mixin \Eloquent
 */
class ChartCommunicationCaller extends Model
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
        return $this->belongsTo(ChartCommunicationAction::class, 'ccc_serialkey', 'cca_caller');
    }
}
