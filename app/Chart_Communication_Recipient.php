<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    public function helper()
    {
        return $this->belongsTo(ChartCommunicationHelper::class, 'ccr_tm_queue');
    }
}
