<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\ChartCommunicationHelper
 *
 * @property string $id
 * @property string $name
 * @property string $facility
 * @property boolean $is_dept
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChartCommunications\Note[] $notes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChartCommunications\Chart_Communication_Recipient[] $recipients
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationHelper whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationHelper whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationHelper whereFacility($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\ChartCommunicationHelper whereIsDept($value)
 * @mixin \Eloquent
 */
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
        return $this->hasMany(Note::class, 'note_author');
    }

    /**
     * Get the Recipients that belong to this User or Department.
     */
    public function recipients()
    {
        return $this->hasMany(Chart_Communication_Recipient::class, 'ccr_tm_queue');
    }
}
