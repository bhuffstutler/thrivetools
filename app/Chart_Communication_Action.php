<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart_Communication_Action extends Model
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
        return $this->belongsTo(Chart_Communication::class, 'cca_communication', 'cc_serialkey');
    }

    /**
     * Get the Caller for this Action.
     */
    public function caller()
    {
        return $this->hasOne(Chart_Communication_Caller::class, 'ccc_serialkey', 'cca_caller');
    }

    /**
     * Get the Recipient for this Action.
     */
    public function recipient()
    {
        return $this->hasOne(Chart_Communication_Recipient::class, 'ccr_action_id');
    }

    /**
     * Get the Note for this Action.
     */
    public function note()
    {
        return $this->hasOne(Note::class, 'note_id', 'cca_note');
    }
}
