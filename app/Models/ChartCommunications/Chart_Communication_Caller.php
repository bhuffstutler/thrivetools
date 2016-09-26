<?php

namespace App\Models\ChartCommunications;

use Illuminate\Database\Eloquent\Model;

class Chart_Communication_Caller extends Model
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
        return $this->belongsTo(Chart_Communication_Action::class, 'ccc_serialkey', 'cca_caller');
    }
}
