
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Ink Group</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Ink Group</b>
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
    <h4 class='panel-title'>Ink Group</h4>
  </div>
  <div class='panel-body'>
    <div class='row row-space-30'>
      <!-- begin col-4 -->
      <div class='col-lg-6'>
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
        <a href='#add-modal-inkgroup' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Ink Group </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Group</th>
                <th class='text-nowrap'>Ink Group Name</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($inkgroup as $ink)
                <tr>
                    <td width='10%'>{{ $ink->id_tinta}}</td>
                    <td>{{ $ink->name_tinta}}</td>
                    <td>{{ $ink->info}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-inkgroup_id="{{$ink->id_tinta}}" data-inkgroup_name="{{$ink->name_tinta}}" data-inkgroup_info="{{$ink->info}}" data-toggle="modal" data-target="#edit_inkgroup"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-inkgroup_id="{{$ink->id_tinta}}" data-toggle="modal" data-target="#delete_inkgroup"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
      </div>
    <!-- end col-4 -->

    <!-- LIST INK -->
    <div class='row row-space-30'>
      <!-- begin col-4 -->
      <div class='col-lg-12'>
        @if(session('tambah_ink'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah_ink')}}</strong>
          </div>
        @endif
        @if(session('edit_ink'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit_ink')}}</strong>
          </div>
        @endif
        @if(session('delete_ink'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete_ink')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-inklist' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Ink Type </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Ink</th>
                <th class='text-nowrap'>Ink Type Name</th>
                <th class='text-nowrap'>Ink Group</th>
                <th class='text-nowrap'>Info Ink</th>
                <th class='text-nowrap'>Price</th>
                <th class='text-nowrap'>Begda</th>
                <th class='text-nowrap'>Endda</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($inklist as $inktype)
                <tr>
                    <td width='10%'>{{ $inktype->id_tt}}</td>
                    <td>{{ $inktype->name_tinta}}</td>
                    <td>{{ $inktype->name_tinta_t}}</td>
                    <td>{{ $inktype->info_t}}</td>
                    <td>{{ $inktype->harga_tinta_t}}</td>
                    <td>{{ $inktype->begda}}</td>
                    <td>{{ $inktype->endda}}</td>
                    <td>{{ $inktype->created_at}}</td>
                    <td>{{ $inktype->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-inklist_id="{{$inktype->id_tt}}" data-inklist_id_t="{{$inktype->id_tinta}}" data-inklist_name="{{$inktype->name_tinta_t}}" data-inklist_info="{{$inktype->info_t}}" data-inklist_harga="{{$inktype->harga_tinta_t}}" data-inklist_begda="{{$inktype->begda}}" data-inklist_endda="{{$inktype->endda}}" data-toggle="modal" data-target="#edit_inklist"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-inklist_id="{{$inktype->id_tt}}" data-toggle="modal" data-target="#delete_inklist"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
    <!-- END LIST INK -->

    <!-- INK GROUP -->
     <!-- Modal Add Group -->
    <div class='modal fade' id='add-modal-inkgroup'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Ink Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('ink.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_tinta' placeholder='Ink Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info' placeholder='Ink Group Info' />
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
<div class="modal fade" id="edit_inkgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Ink Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('ink.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_inkgroup" id="id_inkgroup" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_tinta' id='name_tinta' placeholder='Ink Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info' id='info' placeholder='Ink Group Info' />
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
<div class="modal modal-danger fade" id="delete_inkgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('ink.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_inkgroup" id="id_inkgroup" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-danger">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
    
    <!-- INK LIST -- Modal Add Group -->
    <div class='modal fade' id='add-modal-inklist'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Ink Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('inklist.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_tinta' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($inkgroup as $ink)
                            <option value='{{ $ink->id_tinta }}'>{{ $ink->name_tinta }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_tinta_t' placeholder='Ink Type Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info Ink Type</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_t' placeholder='Ink Type Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_tinta_t' placeholder='Ink Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='begda' placeholder='Begda this price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='endda' placeholder='Endda this price' required />
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
<div class="modal fade" id="edit_inklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Ink Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('inklist.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
               <div class='form-group row m-b-15'>
                <input type="hidden" name="id_inklist" id="id_inklist" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_tinta' id='id_tinta' class='form-control' required >
                        <option value=''>---Choose---</option>
                        @foreach($inkgroup as $ink)
                            <option value='{{ $ink->id_tinta }}'>{{ $ink->name_tinta }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Ink Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_tinta_t' id='name_tinta_t' placeholder='Ink Type Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info Ink Type</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_t' id='info_t' placeholder='Ink Type Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_tinta_t' id='harga_tinta_t' placeholder='Ink Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='begda' id='begda' placeholder='Begda this price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='endda' id='endda' placeholder='Endda this price' required />
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
<div class="modal modal-danger fade" id="delete_inklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('inklist.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_inktype" id="id_inktype" value="">

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