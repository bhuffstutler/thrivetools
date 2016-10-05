<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\ChartCommunicationAction
 *
 * @property integer $cca_serialkey
 * @property integer $cca_communication
 * @property integer $cca_caller
 * @property integer $cca_note
 * @property integer $cca_type
 * @property-read \App\Models\ChartCommunications\ChartCommunication $chart_communication
 * @property-read \App\Models\ChartCommunications\ChartCommunicationCaller $caller
 * @property-read \App\Models\ChartCommunications\ChartCommunicationRecipient $recipient
 * @property-read \App\Models\ChartCommunications\Note $note
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationAction whereCcaSerialkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationAction whereCcaCommunication($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationAction whereCcaCaller($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationAction whereCcaNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationAction whereCcaType($value)
 * @mixin \Eloquent
 */
class ChartCommunicationAction extends Model
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
    protected $table = 'chart_communication_action';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'cca_serialkey';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Chart Communication that owns this Action.
     */
    public function chart_communication()
    {
        return $this->belongsTo(ChartCommunication::class, 'cca_communication', 'cc_serialkey');
    }

    /**
     * Get the Caller for this Action.
     */
    public function caller()
    {
        return $this->hasOne(ChartCommunicationCaller::class, 'ccc_serialkey', 'cca_caller');
    }

    /**
     * Get the Recipient for this Action.
     */
    public function recipient()
    {
        return $this->hasOne(ChartCommunicationRecipient::class, 'ccr_action_id');
    }

    /**
     * Get the Note for this Action.
     */
    public function note()
    {
        return $this->hasOne(Note::class, 'note_id', 'cca_note');
    }
}
