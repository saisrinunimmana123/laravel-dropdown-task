<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companyworklocation;
use App\employees;
use App\configuration;


class companyworklocationcontroller extends Controller
{ 
//        Get the values from database into comapny_id,country,department,employeetype dropdowns 

  
   public function index(Request $request)
{ 
	
  $companyid = employees::select('company_id')->distinct()->get();

	$show = companyworklocation::select('*')->where('company_id',1302)->get();

	 $show2=configuration::select('value','id')->where('type','departments')->where('company_id',1302)->get();
  
    $show1 = configuration::select('value','id')->distinct()->where('type','employee-type')->where('company_id',1302)->get();

  
    return view('create')->with('companyid',$companyid)->with('show2',$show2)->with('show', $show)->with('show1', $show1);

}
   


 public function date(Request $request)
   {
 
  $data=$request->all();
  $Daterange = employees::leftJoin('companyworklocations','companyworklocations.id','=','employees.work_location_id')
  ->leftJoin('configurations','configurations.id','=','employees.employee_type_id')

  ->leftJoin('configurations as configcompanyid','configcompanyid.company_id','=','employees.company_id')
  ->leftJoin('configurations as configdepartment','configdepartment.id','=','employees.department_id')
  // ->whereBetween('start_date', [date('Y-m-d', strtotime($data['startdate'])),date('Y-m-d', strtotime($data['enddate']))])
  ->select('employees.id','employees.fname','employees.lname','employees.start_date','companyworklocations.country as workcountry','configurations.value as configurations_value','configdepartment.value as department','configcompanyid.company_id as company_name' )->distinct();
 
 if($data['CompanyName']){
    $Daterange=$Daterange->where('employees.company_id',$data['CompanyName']);
  }
 
  if($data['department']){
    $Daterange=$Daterange->where('department_id',$data['department']);
  }
  if($data['Type']){
    $Daterange=$Daterange->where('employee_type_id',$data['Type']);
  }
  if($data['country']){
    $Daterange=$Daterange->where('work_location_id',$data['country']);
  }

   if($data['startdate']) {
    $Daterange=$Daterange->whereBetween('start_date', [date('Y-m-d', strtotime($data['startdate'])),date('Y-m-d', strtotime($data['enddate']))]);


  }

  $Daterange=$Daterange->get();

return response()->json($Daterange);

}


public function Dropdown(Request $request)
   {
 
  $Companyid=$request->all();
  $companyid1 = employees::select('company_id')->distinct()->where('company_id', $Companyid['CompanyName'])->get();
   $WorklocationCountry=companyworklocation::select('*')->where('company_id', $Companyid['CompanyName'])->get();
  
   $ConfigDepartment=configuration::select('*')->where('company_id', $Companyid['CompanyName'])->where('type','departments')->get();
   $ConfigEmployeeType=configuration::select('*')->where('company_id', $Companyid['CompanyName'])->where('type','employee-type')->get();

return response()->json([
                        'companyid1'=>$companyid1,
                        'WorklocationCountry'=>$WorklocationCountry,
                        'ConfigDepartment'   =>$ConfigDepartment,
                        'ConfigEmployeeType' =>$ConfigEmployeeType
                       ]);


}
}



 