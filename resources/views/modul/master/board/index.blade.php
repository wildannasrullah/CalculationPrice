
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Board</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Board</b>
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
    <h4 class='panel-title'>Board</h4>
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
        <a href='#add-modal-mica' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Board </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
           <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Board</th>
                <th class='text-nowrap'>Board Name</th>
                <th class='text-nowrap'>Price</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($board as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_papan}}</td>
                    <td>{{ $pl->papan_name}}</td>
                    <td>{{ $pl->harga_papan}}</td>
                    <td>{{ $pl->ket_papan}}</td>
                    <td>{{ $pl->created_at}}</td>
                    <td>{{ $pl->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-board_id="{{$pl->id_papan}}" data-board_name="{{$pl->papan_name}}" data-board_harga="{{$pl->harga_papan}}" data-board_ket="{{$pl->ket_papan}}"  data-toggle="modal" data-target="#edit_board"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-board_id="{{$pl->id_papan}}" data-toggle="modal" data-target="#delete_board"><i class="fa fa-trash-alt"></i></button>
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
    <div class='modal fade' id='add-modal-mica'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Board</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('board.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Board Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='papan_name' placeholder='Board Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='harga_papan' placeholder='Price' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_papan' placeholder='Info' />
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
<div class="modal fade" id="edit_board" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Board</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('board.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_papan" id="id_papan" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Board Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='papan_name' id='papan_name' placeholder='Board Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                   <input class='form-control' type='text' name='harga_papan' id='harga_papan' placeholder='Tamper Mica' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_papan' id='ket_papan' placeholder='Info' />
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
<div class="modal modal-danger fade" id="delete_board" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('board.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_papan" id="id_papan" value="">

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