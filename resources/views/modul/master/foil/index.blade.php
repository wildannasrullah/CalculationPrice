
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Foil Group</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Foil Group</b>
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
    <h4 class='panel-title'>Foil Group</h4>
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
        <a href='#add-modal-foilgroup' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Foil Group </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Foil Group</th>
                <th class='text-nowrap'>Foil Group Name</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($foilgroup as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_foilgroup}}</td>
                    <td>{{ $pl->foilgroup_name}}</td>
                    <td>{{ $pl->info}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-foilgroup_id="{{$pl->id_foilgroup}}" data-foilgroup_name="{{$pl->foilgroup_name}}" data-foilgroup_info="{{$pl->info}}" data-toggle="modal" data-target="#edit_foilgroup"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-foilgroup_id="{{$pl->id_foilgroup}}" data-toggle="modal" data-target="#delete_foilgroup"><i class="fa fa-trash-alt"></i></button>
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
        @if(session('tambah_foil'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah_foil')}}</strong>
          </div>
        @endif
        @if(session('edit_foil'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit_foil')}}</strong>
          </div>
        @endif
        @if(session('delete_foil'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete_foil')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-foil' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Foil Type </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Foil</th>
                <th class='text-nowrap'>Foil Name</th>
                <th class='text-nowrap'>Group</th>
                <th class='text-nowrap'>Foil Length</th>
                <th class='text-nowrap'>Foil Width</th>
                <th class='text-nowrap'>Foil Price</th>
                <th class='text-nowrap'>Foil Info</th>
                <th class='text-nowrap'>Begda</th>
                <th class='text-nowrap'>Endda</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($foil as $m)
                <tr>
                    <td width='10%'>{{ $m->id_foil}}</td>
                    <td>{{ $m->foil_name}}</td>
                    <td>{{ $m->foilgroup_name}}</td>
                    <td>{{ $m->f_panjang}}</td>
                    <td>{{ $m->f_lebar}}</td>
                    <td>{{ $m->f_harga}}</td>
                    <td>{{ $m->f_ket}}</td>
                    <td>{{ $m->begda}}</td>
                    <td>{{ $m->endda}}</td>
                    <td>{{ $m->created_at}}</td>
                    <td>{{ $m->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-foil_id="{{$m->id_foil}}" data-foilgroup_id="{{$m->id_foilgroup}}" data-foil_name="{{$m->foil_name}}" data-foil_panjang="{{$m->f_panjang}}" data-foil_lebar="{{$m->f_lebar}}" data-foil_harga="{{$m->f_harga}}" data-foil_ket="{{$m->f_ket}}" data-foil_begda="{{$m->begda}}" data-foil_endda="{{$m->endda}}" data-toggle="modal" data-target="#edit_foil"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-foil_id="{{$m->id_foil}}" data-toggle="modal" data-target="#delete_foil"><i class="fa fa-trash-alt"></i></button>
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
    <div class='modal fade' id='add-modal-foilgroup'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Foil Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('foilgroup.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='foilgroup_name' placeholder='Foil Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info' placeholder='Foil Group Info' />
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
<div class="modal fade" id="edit_foilgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Foil Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('foilgroup.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_foilgroup" id="id_foilgroup" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='foilgroup_name' id='foilgroup_name' placeholder='Foil Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info' id='info' placeholder='Foil Group Info' />
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
<div class="modal modal-danger fade" id="delete_foilgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('foilgroup.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_foilgroup" id="id_foilgroup" value="">

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
    <div class='modal fade' id='add-modal-foil'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Foil Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('foil.store')}}" method="post">
                {{(csrf_field())}}
              
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_foilgroup' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($foilgroup as $mg)
                            <option value='{{ $mg->id_foilgroup }}'>{{ $mg->foilgroup_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='foil_name' placeholder='Foil Type Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_panjang' placeholder='Length' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_lebar' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Price</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_harga' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='f_ket' placeholder='Information' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='begda' placeholder='Begda' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='endda' placeholder='Endda' />
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
<div class="modal fade" id="edit_foil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Foil Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('foil.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
               <div class='form-group row m-b-15'>
                   <input type="text" name="id_foil" id="id_foil" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_foilgroup' id='id_foilgroup' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($foilgroup as $mg)
                            <option value='{{ $mg->id_foilgroup }}'>{{ $mg->foilgroup_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='foil_name' id='foil_name' placeholder='Foil Type Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_panjang' id='f_panjang' placeholder='Length' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_lebar' id='f_lebar' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Foil Price</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_harga' id='f_harga' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Information</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='f_ket' id='f_ket' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='begda' id='endda' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='endda' id='endda' placeholder='Inline' req />
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
<div class="modal modal-danger fade" id="delete_foil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('foil.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_foil" id="id_foil" value="">

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