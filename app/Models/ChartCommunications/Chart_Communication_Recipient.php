<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\Chart_Communication_Recipient
 *
 * @property integer $ccr_id
 * @property integer $ccr_action_id
 * @property string $ccr_tm_queue
 * @property integer $ccr_tm_queue_type
 * @property-read \App\Models\ChartCommunications\Chart_Communication_Action $action
 * @property-read \App\Models\ChartCommunications\ChartCommunicationHelper $name
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Recipient whereCcrId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Recipient whereCcrActionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Recipient whereCcrTmQueue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Chart_Communication_Recipient whereCcrTmQueueType($value)
 * @mixin \Eloquent
 */
class Chart_Communication_Recipient extends Model
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
    protected $table = 'chart_communication_recipient';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'ccr_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Action that owns this Recipient
     */
    public function action()
    {
        return $this->belongsTo(Chart_Communication_Action::class, 'ccr_action_id', 'cca_serialkey');
    }

    /**
     * Get the Helper (UBL or Dept) that owns this Recipient.
     */
    public function name()
    {
        return $this->belongsTo(ChartCommunicationHelper::class, 'ccr_tm_queue');
    }
}
