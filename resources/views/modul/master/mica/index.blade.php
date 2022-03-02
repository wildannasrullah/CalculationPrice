
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Mica</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Mica</b>
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
    <h4 class='panel-title'>Mica</h4>
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
          <i class='fa fa-plus-square'></i> Add Mica </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
           <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Mica</th>
                <th class='text-nowrap'>Mica Name</th>
                <th class='text-nowrap'>Tamper</th>
                <th class='text-nowrap'>Price</th>
                <th class='text-nowrap'>Length</th>
                <th class='text-nowrap'>Width</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($mica as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_mika}}</td>
                    <td>{{ $pl->mika_name}}</td>
                    <td>{{ $pl->tamper_mika_type}}</td>
                    <td>{{ $pl->mika_harga}}</td>
                    <td>{{ $pl->panjang_mika}}</td>
                    <td>{{ $pl->lebar_mika}}</td>
                    <td>{{ $pl->mika_ket}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-mica_id="{{$pl->id_mika}}" data-mica_name="{{$pl->mika_name}}" data-mica_tamper="{{$pl->tamper_mika_type}}" data-mica_harga="{{$pl->mika_harga}}" data-mica_panjang="{{$pl->panjang_mika}}" data-mica_lebar="{{$pl->lebar_mika}}" data-mica_ket="{{$pl->mika_ket}}" data-toggle="modal" data-target="#edit_mica"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-mica_id="{{$pl->id_mika}}" data-toggle="modal" data-target="#delete_mica"><i class="fa fa-trash-alt"></i></button>
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
            <h4 class='modal-title'>Add Mica</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('mica.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Mica Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='mika_name' placeholder='Mica Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Tamper Mica Type</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='tamper_mika_type' placeholder='Tamper Mica' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='mika_harga' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='panjang_mika' placeholder='Length' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='lebar_mika' placeholder='Width' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='mika_ket' placeholder='Info' />
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
<div class="modal fade" id="edit_mica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Mica</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('mica.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_mika" id="id_mika" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Mica Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='mika_name' id='mika_name' placeholder='Mica Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Tamper Mica Type</label>
                <div class='col-md-8 col-sm-8'>
                   <input class='form-control' type='text' name='tamper_mika_type' id='tamper_mika_type' placeholder='Tamper Mica' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='mika_harga' id='mika_harga' placeholder='Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='panjang_mika' id='panjang_mika' placeholder='Length' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='lebar_mika' id='lebar_mika' placeholder='Width' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='mika_ket' id='mika_ket' placeholder='Info' />
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
<div class="modal modal-danger fade" id="delete_mica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('mica.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_mika" id="id_mika" value="">

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