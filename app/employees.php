<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table="employees";
     protected $fillable = [
     	'company_id',
            'fname', 
            'lname',
            'mname', 
            'last_four_ssn',
            'date_of_birth',
            'gender', 
            'start_date',
            'title',
            'job_description',
            'photo',
            'status',
            'creator_id', 
            'created_at',
             'updated_at', 
             'employee_type_id', 
             'location', 
             'department_id',
              'cell_phone home_phone',
            'work_phone personal_email' ,
            'company_email other_email', 
            'percentage work_location_id',

            'huid user_id reports_to ',
            'companyInternalID',
             'rehire_date',
              'pan_no aadhar_id',
            'contact_country' ,
            'cellphone_contact_country',
            'workphone_contact_country',
            'homephone_ext', 
            'workphone_ext',
             'cellphone_ext',
            'benchcost'
        ];

}
