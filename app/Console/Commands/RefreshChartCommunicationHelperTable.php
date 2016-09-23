<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class RefreshChartCommunicationHelperTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RefreshChartCommunicationHelperTable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refreshes the Chart Communication Helper table from CPSI';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Clear the table
        DB::table('chart_communication_helper')->delete();

        // Get, format and insert the UBLs
        $ubls = DB::connection('cpsi')->select(
            "SELECT lognm_name as id, concat_ws(' ', lognm_firstnm, lognm_middlenm, lognm_lastnm) as name
             FROM oslogname"
        );
        foreach($ubls as $ubl)
        {
            DB::table('chart_communication_helper')->insert(get_object_vars($ubl));
        }

        // Get, format and insert the departments
        $depts = DB::connection('cpsi')->select(
            "SELECT dept_dept as dept_id, dept_dname as dept_name, dept_arid
             FROM department_table"
        );
        foreach($depts as $dept)
        {
            $id = 'dept_'.$dept->dept_id.'_'.$dept->dept_arid;
            DB::table('chart_communication_helper')->insert(
                ['id' => $id, 'name' => $dept->dept_name, 'facility' => $dept->dept_arid, 'is_dept' => 1]
            );
        }
    }
}
