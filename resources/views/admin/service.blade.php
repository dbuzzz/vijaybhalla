
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
        Service-Management
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Service-Management</a></li>
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
                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Heading</label>
                        <input type="text"
                               class="form-control"
                               name="heading" 
                               id="heading" 
                               placeholder="Enter heading .."
                               value="{{@$data->heading}}">
                    </div>

                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Sub-Heading</label>
                        <input type="text"
                               class="form-control"
                               name="subheading" 
                               id="subheading" 
                               placeholder="Enter subheading .."
                               value="{{@$data->subHeading}}">
                    </div>

                    <div class="form-group col-lg-2">
                        <label for="exampleInputEmail1">Small Icon</label>
                        <input type="file"
                               class="form-control"
                               name="smallIcon"
                               accept=".jpg,.png,.jpeg">
                    </div>

                    <textarea id="editor1" class="textarea" placeholder="Enter Descripton"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{@$data->description}}</textarea>

                          <textarea name="desc2" id="editor2" class="textarea" placeholder="Enter Small Description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{@$data->description2}}</textarea>
                   
                    <div class="form-group col-lg-6 pt-4 mt-4">
                        <label for="exampleInputEmail1">Featured Image</label><span style="color:red">1080 x 1080 px</span>
                        <input type="file"
                               class="form-control"
                               name="image"
                               id="file" 
                               accept=".jpg,.png,.jpeg">
                    </div>

                    @php 
                    $derviceheading = array();
                    $servicesubHeading = array();
                    $question = array();
                    $answer = array();
                    if (!empty($data)) {

                        $derviceheading = explode('$HARSH$', $data->serviceHeading);
                        $servicesubHeading = explode('$HARSH$', $data->servicesubHeading);
                        $question = explode('$HARSH$', $data->question);
                        $answer = explode('$HARSH$', $data->answer);
                    }
                    @endphp

                    <div class="form-group col-lg-6 pt-4 mt-4">
                        <img style=" padding: 11px; width: 265px; height: 185px; " src="{{!empty($data)?$data->image:asset('uploads/default/default-image.jpg')}}" id="image">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Service-Heading</label>
                        <input type="text"
                               class="form-control"
                               name="serviceHeading[]" 
                               placeholder="Enter serviceHeading .."
                               value="{{@$derviceheading[0]}}">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Service Sub-Heading</label>
                        <input type="text"
                               class="form-control"
                               name="serviceSubheading[]" 
                               placeholder="Enter serviceSubheading .."
                               value="{{@$servicesubHeading[0]}}">
                    </div>

                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Service Image</label><span style="color:red">1080 x 1080 px</span>
                        <input type="file"
                               class="form-control"
                               name="serviceimage[]"
                               accept=".jpg,.png,.jpeg">
                    </div>
                    <div class="col-md-1 mt-4">
                      <a href="javascript:void(0)"class="add_field_button btn btn-success btn-xs">+</a>
                    </div>

                    @if (!empty($data))
                    @for ($i=1; $i <count($derviceheading) ; $i++)
                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Service-Heading</label>
                        <input type="text"
                               class="form-control"
                               name="serviceHeading[]" 
                               placeholder="Enter serviceHeading .."
                               value="{{@$derviceheading[$i]}}">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Service Sub-Heading</label>
                        <input type="text"
                               class="form-control"
                               name="serviceSubheading[]" 
                               placeholder="Enter serviceSubheading .."
                               value="{{@$servicesubHeading[$i]}}">
                    </div>

                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Service Image</label><span style="color:red">1080 x 1080 px</span>
                        <input type="file"
                               class="form-control"
                               name="serviceimage[]"
                               accept=".jpg,.png,.jpeg">
                    </div>
                    <div class="col-md-1 mt-4">
                      <button class="remove_field btn btn-danger btn-xs">-</button>
                    </div>
                    @endfor
                    @endif
                    <div id="appendData"></div>


                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Question</label>
                        <input type="text"
                               class="form-control"
                               name="question[]" 
                               placeholder="Enter question .."
                               value="{{@$question[0]}}">
                    </div>

                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Answer</label>
                        <input type="text"
                               class="form-control"
                               name="answer[]" 
                               placeholder="Enter answer .."
                               value="{{@$answer[0]}}">
                    </div>

                    <div class="col-md-2 mt-4">
                      <a href="javascript:void(0)"class="add_field_buttons btn btn-success btn-xs">+</a>
                    </div>

                    @if (!empty($data))
                    @for ($i=1; $i <count($question) ; $i++)
                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Question</label>
                        <input type="text"
                               class="form-control"
                               name="question[]" 
                               placeholder="Enter question .."
                               value="{{@$question[$i]}}">
                    </div>

                    <div class="form-group col-lg-5">
                        <label for="exampleInputEmail1">Answer</label>
                        <input type="text"
                               class="form-control"
                               name="answer[]" 
                               placeholder="Enter answer .."
                               value="{{@$answer[$i]}}">
                    </div>

                    <div class="col-md-2 mt-4">
                      <button class="remove_fields btn btn-danger btn-xs">-</button>
                    </div>
                    @endfor
                    @endif
                    
                    <div id="appendDatas"></div>

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

                            <th >Heading</th>
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
<script src="{{url('admin_assets/custom_js/service.js')}}"></script>

<script src="{{asset('')}}admin_assets/assets/vendor_components/ckeditor/ckeditor.js"></script>
    <script src="{{asset('')}}admin_assets/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

    <script src="{{asset('')}}admin_assets/js/pages/editor.js"></script>
@endsection