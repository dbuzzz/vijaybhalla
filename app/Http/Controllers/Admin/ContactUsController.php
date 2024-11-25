<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ContactUs};
use Validator;
use Yajra\DataTables\DataTables;
use Auth;
use Str;
use Schema;
use DB;
use Illuminate\Support\Arr;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        
      $data['cat'] = array();
      return view('admin.contactUs',$data);
    }//end of method

   

    


    public function show(Request $request){
        if ($request->ajax()) {
            $data = ContactUs::where(['is_deleted'=>0])->orderBy('id','DESC')->get();
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
                    ->rawColumns(['status'])
                    ->make(true);
        }
    }//end of method


    public function status(Request $request){
        $data['active_status'] = $request->status;
        $data['updated_by'] = Auth::user()->id;
        $row = ContactUs::where('id',$request->id)->update($data);

        if(empty($row)){
            return ['message'=>"Can't Update Status!",'status_code'=>201];
        }else{
            return ['message'=>'Status Updated!','status_code'=>200];
        }
    }//end of method
}
