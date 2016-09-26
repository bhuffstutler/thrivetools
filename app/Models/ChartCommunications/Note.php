<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

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
