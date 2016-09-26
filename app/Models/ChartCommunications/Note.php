<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChartCommunications\Note
 *
 * @property integer $note_id
 * @property string $note_author
 * @property string $note_dttm
 * @property string $note_subject
 * @property string $note_body
 * @property string $note_launcher_cmd
 * @property boolean $note_priority
 * @property integer $note_facid
 * @property-read \App\Models\ChartCommunications\Chart_Communication_Action $action
 * @property-read \App\Models\ChartCommunications\ChartCommunicationHelper $helper
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteDttm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteLauncherCmd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNotePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChartCommunications\Note whereNoteFacid($value)
 * @mixin \Eloquent
 */
class Note extends Model
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
    protected $table = 'note';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'note_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Action that owns this Note.
     */
    public function action()
    {
        return $this->belongsTo(Chart_Communication_Action::class, 'note_id', 'cca_note');
    }

    /**
     * Get the Helper (UBL or Dept) that owns this Note.
     */
    public function helper()
    {
        return $this->belongsTo(ChartCommunicationHelper::class, 'note_author');
    }
}
