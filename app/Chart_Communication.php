<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart_Communication extends Model
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
    protected $table = 'chart_communication';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'cc_serialkey';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Actions for this Chart Communication.
     */
    public function actions()
    {
        return $this->hasMany(Chart_Communication_Action::class, 'cca_communication');
    }

}
