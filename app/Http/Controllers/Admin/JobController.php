<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Job};
use Validator;
use Yajra\DataTables\DataTables;
use Auth;
use Str;
use Schema;
use DB;
use Illuminate\Support\Arr;
class JobController extends Controller
{
    public function index(Request $request)
    {
        
      $data['cat'] = array();
      return view('admin.jobs',$data);
    }//end of method

   

    


    public function show(Request $request){
        if ($request->ajax()) {
            $data = Job::where(['is_deleted'=>0])->orderBy('id','DESC')->get();
            return DataTables::of($data)
                    ->addIndexColumn()

                    ->addColumn('status', function($row){
                        $btn = '';
                        if ($row->active_status == 1) {
                           $btn .= '<span class="badge badge-success" style="cursor:pointer;" onclick="status('.$row->id.',0)">Active</span>';
                        }else{
                           $btn .= '<span class="badge badge-warning" style="cursor:pointer;" onclick="status('.$row->id.',1)">De-Active</span>';


                        }
                          
                            return $btn;
                    })

                    ->addColumn('file', function($row){
                        if ($row->file) {
                           $btn = '<a href="'.$row->file.'" target = "_blank" class="p-2"><i class="fa fa-image"></i></a>';
                           
                        }else{
                           $btn = '<img style="height: 50px; width:50px" src="'.asset('uploads/default/default-user.jpg').'">';
                       }
                          
                            return $btn;
                    })
                    ->rawColumns(['status','file'])
                    ->make(true);
        }
    }//end of method


    public function status(Request $request){
        $data['active_status'] = $request->status;
        $data['updated_by'] = Auth::user()->id;
        $row = Job::where('id',$request->id)->update($data);

        if(empty($row)){
            return ['message'=>"Can't Update Status!",'status_code'=>201];
        }else{
            return ['message'=>'Status Updated!','status_code'=>200];
        }
    }//end of method
}
