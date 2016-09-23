<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartCommunicationHelper extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chart_communication_helper';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Notes that belong to this User or Department.
     */
    public function notes()
    {
        return $this->hasMany('App\Note', 'note_author');
    }

    /**
     * Get the Recipients that belong to this User or Department.
     */
    public function recipients()
    {
        return $this->hasMany('App\Chart_Communication_Recipient', 'ccr_tm_queue');
    }
}
