@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Paper Group 2</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Paper Group 2</b>
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
    <h4 class='panel-title'>Paper Group 2</h4>
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
        <a href='#add-modal-dialog' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Paper Group 2 </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Group 2</th>
                <th class='text-nowrap'>Group 1</th>
                <th class='text-nowrap'>Paper Name</th>
                <th class='text-nowrap'>Information</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($papergroup2 as $pg2)
                <tr>
                    <td width='10%'>{{ $pg2->id_pg2}}</td>
                    <td>{{ $pg2->paper_name}}</td>
                    <td>{{ $pg2->pg2_name}}</td>
                    <td>{{ $pg2->info_pg2}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-paperg2_id_pg1="{{$pg2->id_pg1}}" data-paperg2_pg2_name="{{$pg2->pg2_name}}" data-paperg2_info="{{$pg2->info_pg2}}" data-paperg2_id_pg2="{{$pg2->id_pg2}}" data-toggle="modal" data-target="#edit_papergroup2"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-paperg2_id_pg2="{{$pg2->id_pg2}}" data-toggle="modal" data-target="#delete_paperg2"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
      <!-- end col-4 -->
    
    <!-- Modal Add Group -->
    <div class='modal fade' id='add-modal-dialog'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Paper Group 2</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('group2.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Group 1*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_pg1' class='form-control'>
                        <option value=''>---Choose---</option>
                        @foreach($papergroup1 as $pg1)
                            <option value='{{ $pg1->id_pg1 }}'>{{ $pg1->paper_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='pg2_name' placeholder='Paper Name' data-parsley-required='true' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Information</label>
                <div class='col-md-8 col-sm-8'>
                  <textarea class='form-control' name='info_pg2' rows='4' placeholder='Information'></textarea>
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
<div class="modal fade" id="edit_papergroup2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Paper Group 2</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('group2.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_pg2" id="id_pg2" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Group 1*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_pg1' id='id_pg1' class='form-control'>
                        <option value=''>---Choose---</option>
                        @foreach($papergroup1 as $pg1)
                            <option value='{{ $pg1->id_pg1 }}'>{{ $pg1->paper_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='pg2_name' id='pg2_name' placeholder='Paper Name' data-parsley-required='true' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Information</label>
                <div class='col-md-8 col-sm-8'>
                  <textarea class='form-control' name='info_pg2' id='info_pg2' rows='4' placeholder='Information'></textarea>
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
<div class="modal modal-danger fade" id="delete_paperg2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('group2.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_pg2" id="id_pg2" value="">

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