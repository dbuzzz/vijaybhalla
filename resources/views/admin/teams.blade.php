
@extends('admin.layout')
@section('extern-css')
<link rel="stylesheet" type="text/css" href="{{ url('plugins\datatables\dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins\datatables\responsive.bootstrap4.min.css') }}">

   <link rel="stylesheet" href="{{asset('')}}admin_assets/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Team-Management
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Team-Management</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
      <div class="row">

        <div class="col-lg-12 col-12">
          <div class="box box-solid bg-gray">
            <div class="box-header with-border">
                <h4 class="box-title">Add</h4>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
              </div>
            <div class="box-body">
             
            <form id="save_form">
                <input type="hidden" name="id" id="id" value="{{@$data->id}}">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text"
                               class="form-control"
                               name="name" 
                               id="name" 
                               placeholder="Enter name .."
                               value="{{@$data->name}}">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Education</label>
                        <input type="text"
                               class="form-control"
                               name="education" 
                               id="education" 
                               placeholder="Enter education .."
                               value="{{@$data->education}}">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="cat">Team Type</label>
                        <select id="teamType"
                                
                                class="form-control" name="teamType">
                            <option value="">Select option</option>
                            <option value="1" {{@$data->teamType == 1?'selected':''}}>Core Members</option>
                            <option value="2" {{@$data->teamType == 2?'selected':''}}>Other Members</option>
                        </select>
                    </div>

                    <textarea id="editor1" class="textarea" placeholder="Enter Descripton"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{@$data->description}}</textarea>
                   
                    <div class="form-group col-lg-6 pt-4 mt-4">
                        <label for="exampleInputEmail1">Featured Image</label><span style="color:red">1080 x 1080 px</span>
                        <input type="file"
                               class="form-control"
                               name="image"
                               id="file" 
                               accept=".jpg,.png,.jpeg">
                    </div>

                    <div class="form-group col-lg-6 pt-4 mt-4">
                        <img style=" padding: 11px; width: 265px; height: 185px; " src="{{!empty($data)?$data->image:asset('uploads/default/default-image.jpg')}}" id="image">
                    </div>



                </div>
               
                <button type="submit"
                        class="btn btn-primary" id="submit">Submit</button>
            </form>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-12">
          <div class="box box-solid bg-gray">
            <div class="box-header with-border">
              <h4 class="box-title">Listing</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table class="table mb-0" id="cat_datatable">
                      <thead>
                        <tr>
                          <th>#</th>

                            <th >Name</th>
                            <th >Education</th>
                            <th >Description</th>
                            <th >Image</th>
                            <th >Status</th>
                            <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div> 
            
      </div>
     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection
@section('extern-js')
<script src="{{url('plugins\datatables\jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins\datatables\dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins\datatables\dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins\datatables\responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins\datatables\dataTables.hideEmptyColumns.min.js')}}"></script>
<script src="{{url('plugins\datatables\buttons.colVis.min.js')}}"></script>
<script src="{{url('admin_assets/custom_js/teams.js')}}"></script>

<script src="{{asset('')}}admin_assets/assets/vendor_components/ckeditor/ckeditor.js"></script>
    <script src="{{asset('')}}admin_assets/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

    <script src="{{asset('')}}admin_assets/js/pages/editor.js"></script>
@endsection