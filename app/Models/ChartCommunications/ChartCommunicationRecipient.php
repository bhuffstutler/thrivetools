<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\ChartCommunicationRecipient
 *
 * @property integer $ccr_id
 * @property integer $ccr_action_id
 * @property string $ccr_tm_queue
 * @property integer $ccr_tm_queue_type
 * @property-read \App\Models\ChartCommunications\ChartCommunicationAction $action
 * @property-read \App\Models\ChartCommunications\ChartCommunicationHelper $name
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationRecipient whereCcrId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationRecipient whereCcrActionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationRecipient whereCcrTmQueue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationRecipient whereCcrTmQueueType($value)
 * @mixin \Eloquent
 */
class ChartCommunicationRecipient extends Model
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
        return $this->belongsTo(ChartCommunicationAction::class, 'ccr_action_id', 'cca_serialkey');
    }

    /**
     * Get the Helper (UBL or Dept) that owns this Recipient.
     */
    public function name()
    {
        return $this->belongsTo(ChartCommunicationHelper::class, 'ccr_tm_queue');
    }
}
