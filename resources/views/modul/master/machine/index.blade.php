
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Machine Group</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Machine Group</b>
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
    <h4 class='panel-title'>Machine Group</h4>
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
        <a href='#add-modal-machinegroup' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Machine Group </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Group</th>
                <th class='text-nowrap'>Machine Group Name</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($machinegroup as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_group}}</td>
                    <td>{{ $pl->group_name}}</td>
                    <td>{{ $pl->ket_group}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-machinegroup_id="{{$pl->id_group}}" data-machinegroup_name="{{$pl->group_name}}" data-machinegroup_info="{{$pl->ket_group}}" data-toggle="modal" data-target="#edit_machinegroup"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-machinegroup_id="{{$pl->id_group}}" data-toggle="modal" data-target="#delete_machinegroup"><i class="fa fa-trash-alt"></i></button>
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
        @if(session('tambah_machine'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah_machine')}}</strong>
          </div>
        @endif
        @if(session('edit_machine'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit_machine')}}</strong>
          </div>
        @endif
        @if(session('delete_machine'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete_machine')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-machine' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Machine Type </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Machine</th>
                <th class='text-nowrap'>Machine Name</th>
                <th class='text-nowrap'>Group</th>
                <th class='text-nowrap'>Colour</th>
                <th class='text-nowrap'>Max Length</th>
                <th class='text-nowrap'>Max Width</th>
                <th class='text-nowrap'>Capacity</th>
                <th class='text-nowrap'>Price per Hour</th>
                <th class='text-nowrap'>Inline</th>
                <th class='text-nowrap'>Max Plate L</th>
                <th class='text-nowrap'>Max Plate W</th>
                <th class='text-nowrap'>Active</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($machine as $m)
                <tr>
                    <td width='10%'>{{ $m->id_mesin}}</td>
                    <td>{{ $m->name_mesin}}</td>
                    <td>{{ $m->group_name}}</td>
                    <td>{{ $m->jum_warna}}</td>
                    <td>{{ $m->max_panjang}}</td>
                    <td>{{ $m->max_lebar}}</td>
                    <td>{{ $m->kapasitas}}</td>
                    <td>{{ $m->harga_p_jam}}</td>
                    <td>{{ $m->inline}}</td>
                    <td>{{ $m->max_pjg_plat}}</td>
                    <td>{{ $m->max_lbr_plat}}</td>
                    <td>{{ $m->aktif}}</td>
                    <td>{{ $m->created_at}}</td>
                    <td>{{ $m->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-mesin_id="{{$m->id_mesin}}" data-group_id="{{$m->id_group}}" data-mesin_name="{{$m->name_mesin}}" data-mesin_jumwarna="{{$m->jum_warna}}" data-mesin_maxpanjang="{{$m->max_panjang}}" data-mesin_maxlebar="{{$m->max_lebar}}" data-mesin_kapasitas="{{$m->kapasitas}}" data-mesin_harga="{{$m->harga_p_jam}}" data-mesin_inline="{{$m->inline}}" data-mesin_maxpplat="{{$m->max_pjg_plat}}" data-mesin_maxlplat="{{$m->max_lbr_plat}}" data-mesin_aktif="{{$m->aktif}}" data-toggle="modal" data-target="#edit_machine"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-mesin_id="{{$m->id_mesin}}" data-toggle="modal" data-target="#delete_machine"><i class="fa fa-trash-alt"></i></button>
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
    <div class='modal fade' id='add-modal-machinegroup'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Machine Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('machinegroup.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='group_name' placeholder='Machine Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_group' placeholder='Machine Group Info' />
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
<div class="modal fade" id="edit_machinegroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Machine Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('machinegroup.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_group" id="id_group" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='group_name' id='group_name' placeholder='Machine Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_group' id='ket_group' placeholder='Machine Group Info' />
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
<div class="modal modal-danger fade" id="delete_machinegroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('machinegroup.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_group" id="id_group" value="">

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
    <div class='modal fade' id='add-modal-machine'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Machine Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('machine.store')}}" method="post">
                {{(csrf_field())}}
              
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_group' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($machinegroup as $mg)
                            <option value='{{ $mg->id_group }}'>{{ $mg->group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_mesin' placeholder='Machine Type Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Colour</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='jum_warna' placeholder='Colour' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='max_panjang' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='max_lebar' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Capacity</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='kapasitas' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price /hour*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_p_jam' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Inline</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='inline' placeholder='Inline' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Plate length</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='max_pjg_plat' placeholder='Width Plate' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Plate Width</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='max_lbr_plat' placeholder='Width Plate' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Active</label>
                <div class='col-md-8 col-sm-8'>
                  <select name='aktif' class='form-control'>
                    <option value='1'>Active</option>
                    <option value='0'>Non Active</option>
                  </select>
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
<div class="modal fade" id="edit_machine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Machine Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('machine.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
               <div class='form-group row m-b-15'>
                   <input type="hidden" name="id_mesin" id="id_mesin" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_group' id='id_group' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($machinegroup as $mg)
                            <option value='{{ $mg->id_group }}'>{{ $mg->group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='name_mesin' id='name_mesin' placeholder='Machine Type Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Colour</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='jum_warna' id='jum_warna' placeholder='Colour' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='max_panjang' id='max_panjang' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='max_lebar' id='max_lebar' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Capacity</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='kapasitas' id='kapasitas' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price /hour*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_p_jam' id='harga_p_jam' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Inline</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='inline' id='inline' placeholder='Inline' req />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Plate length</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='max_pjg_plat' id='max_pjg_plat' placeholder='Length Plate' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Max Plate Width</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='max_lbr_plat' id='max_lbr_plat' placeholder='Width Plate' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Active</label>
                <div class='col-md-8 col-sm-8'>
                   <select name='aktif' id='aktif' class='form-control'>
                    <option value='1'>Active</option>
                    <option value='0'>Non Active</option>
                  </select>
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
<div class="modal modal-danger fade" id="delete_machine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('machine.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_machine" id="id_machine" value="">

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