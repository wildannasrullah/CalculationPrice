
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Glue</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Glue</b>
  <small>Krisanthium Offset Printing, PT.</small>
</h1>
<div class='panel panel-inverse'>
  <div class='panel-heading'>
    <div class='panel-heading-btn'>
      <a href='javascript:;' class='btn btn-sm btn-icon btn-circle btn-default' data-click='panel-expand' title='Fullscreen'>
        <i class='fa fa-expand'></i>
      </a>
      <a href='javascript:;' class='btn btn-sm btn-icon btn-circle btn-success' data-click='panel-reload' title='Refresh'>
        <i class='fa fa-redo'></i>
      </a>
      <a href='javascript:;' class='btn btn-sm btn-icon btn-circle btn-warning' data-click='panel-collapse' title='Minimize'>
        <i class='fa fa-minus'></i>
      </a>
    </div>
    <h4 class='panel-title'>Glue</h4>
  </div>
  <div class='panel-body'>
    <div class='row row-space-30'>
      <!-- begin col-4 -->
      <div class='col-lg-12'>
        @if(session('tambah'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah')}}</strong>
          </div>
        @endif
        @if(session('edit'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit')}}</strong>
          </div>
        @endif
        @if(session('delete'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-glue' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Glue </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
           <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Glue</th>
                <th class='text-nowrap'>Glue Name</th>
                <th class='text-nowrap'>Glue Variable</th>
                <th class='text-nowrap'>Glue Info</th>
                <th class='text-nowrap'>Glue Price</th>
                <th class='text-nowrap'>Process</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($glue as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_glue}}</td>
                    <td>{{ $pl->glue_name}}</td>
                    <td>{{ $pl->glue_variable}}</td>
                    <td>{{ $pl->glue_ket}}</td>
                    <td>{{ $pl->glue_harga}}</td>
                    <td>{{ $pl->glue_proses}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-glue_id="{{$pl->id_glue}}" data-glue_name="{{$pl->glue_name}}" data-glue_variable="{{$pl->glue_variable}}" data-glue_ket="{{$pl->glue_ket}}" data-glue_harga="{{$pl->glue_harga}}" data-glue_proses="{{$pl->glue_proses}}" data-toggle="modal" data-target="#edit_glue"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-glue_id="{{$pl->id_glue}}" data-toggle="modal" data-target="#delete_glue"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
      </div>
    <!-- end col-4 -->

    <!-- INK GROUP -->
     <!-- Modal Add Group -->
    <div class='modal fade' id='add-modal-glue'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Glue</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('glue.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='glue_name' placeholder='Glue Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Variable</label>
                <div class='col-md-8 col-sm-8'>
                     <input class='form-control' type='text' name='glue_variable' placeholder='Glue Variable' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_ket' placeholder='Glue Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Price</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_harga' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Process</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_proses' placeholder='Process' />
                </div>
              </div>
              </p>
          </div>
          <div class='modal-footer'>
            <a href='' class='btn btn-white' data-dismiss='modal'>
              <i class='fa fa-times-circle'></i> Close </a>
            <button type='submit' class='btn btn-yellow'>
              <i class='fa fa-save'></i> Save </button>
          </div>
        </div>
        </form>
      </div>
    </div>    
<!-- end modal Add Group -->

<!-- Modal Edit Group -->
<div class="modal fade" id="edit_glue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Glue</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('glue.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_glue" id="id_glue" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='glue_name' id='glue_name' placeholder='Glue Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Variable</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='glue_variable' id='glue_variable' placeholder='Glue Variable'/>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_ket' id='glue_ket' placeholder='Glue Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Glue Price</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_harga' id='glue_harga' placeholder='Price' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Process</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='glue_proses' id='glue_proses' placeholder='Process' />
                </div>
              </div>
              </p>
          </div>
           <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-yellow">Save Changes</button>
	      </div>
        </div>
      </form>
  </div>
</div>

<!-- end modal Edit Group -->

<!-- Modal -->
<div class="modal modal-danger fade" id="delete_glue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('glue.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_glue" id="id_glue" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-danger">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>

 @endsection