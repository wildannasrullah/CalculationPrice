
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Plate Group</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Plate Group</b>
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
    <h4 class='panel-title'>Plate Group</h4>
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
        <a href='#add-modal-platgroup' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Plate Group </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Group</th>
                <th class='text-nowrap'>Plate Group Name</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Sheets</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($platgroup as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_plat_group}}</td>
                    <td>{{ $pl->plat_group_name}}</td>
                    <td>{{ $pl->info_plat_group}}</td>
                    <td>{{ $pl->jumlah_lbr}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-platgroup_id="{{$pl->id_plat_group}}" data-platgroup_name="{{$pl->plat_group_name}}" data-platgroup_info="{{$pl->info_plat_group}}" data-platgroup_jumlahlbr="{{$pl->jumlah_lbr}}" data-toggle="modal" data-target="#edit_platgroup"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-platgroup_id="{{$pl->id_plat_group}}" data-toggle="modal" data-target="#delete_platgroup"><i class="fa fa-trash-alt"></i></button>
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
        @if(session('tambah_plat'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah_plat')}}</strong>
          </div>
        @endif
        @if(session('edit_plat'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit_plat')}}</strong>
          </div>
        @endif
        @if(session('delete_plat'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete_plat')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-plat' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Plate Type </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Plate</th>
                <th class='text-nowrap'>Plate Type Name</th>
                <th class='text-nowrap'>Plate Price</th>
                <th class='text-nowrap'>Length Plate</th>
                <th class='text-nowrap'>Width Plate</th>
                <th class='text-nowrap'>Info Plate</th>
                <th class='text-nowrap'>Plate Group</th>
                <th class='text-nowrap'>Machine</th>
                <th class='text-nowrap'>Begda</th>
                <th class='text-nowrap'>Endda</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($platlist as $plat)
                <tr>
                    <td width='10%'>{{ $plat->id_plat}}</td>
                    <td>{{ $plat->plat_name}}</td>
                    <td>{{ $plat->harga_plat}}</td>
                    <td>{{ $plat->length_plat}}</td>
                    <td>{{ $plat->width_plat}}</td>
                    <td>{{ $plat->info_plat}}</td>
                    <td>{{ $plat->plat_group_name}}</td>
                    <td>{{ $plat->name_mesin}}</td>
                    <td>{{ $plat->begda}}</td>
                    <td>{{ $plat->endda}}</td>
                    <td>{{ $plat->created_at}}</td>
                    <td>{{ $plat->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-plat_id="{{$plat->id_plat}}" data-plat_name="{{$plat->plat_name}}" data-plat_harga="{{$plat->harga_plat}}" data-plat_info="{{$plat->info_plat}}" data-plat_id_group="{{$plat->id_plat_group}}" data-plat_mesin="{{$plat->id_mesin}}" data-plat_begda="{{$plat->begda}}" data-plat_endda="{{$plat->endda}}" data-plat_length="{{$plat->length_plat}}" data-plat_width="{{$plat->width_plat}}" data-toggle="modal" data-target="#edit_plat"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-plat_id="{{$plat->id_plat}}" data-toggle="modal" data-target="#delete_plat"><i class="fa fa-trash-alt"></i></button>
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
    <div class='modal fade' id='add-modal-platgroup'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Plate Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('platgroup.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='plat_group_name' placeholder='Plate Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_plat_group' placeholder='Plate Group Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Sheets</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='jumlah_lbr' placeholder='Amount of Sheet' />
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
<div class="modal fade" id="edit_platgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Plate Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('platgroup.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_plat_group" id="id_plat_group" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='plat_group_name' id='plat_group_name' placeholder='Plate Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_plat_group' id='info_plat_group' placeholder='Plate Group Info' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Sheets</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='jumlah_lbr' id='jumlah_lbr' placeholder='Amount of Sheet' />
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
<div class="modal modal-danger fade" id="delete_platgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('platgroup.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_plat_group" id="id_plat_group" value="">

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
    <div class='modal fade' id='add-modal-plat'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Plate Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('plat.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_mesin' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($machine as $m)
                            <option value='{{ $m->id_mesin }}'>{{ $m->name_mesin }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
                <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_plat_group' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($platgroup as $pl)
                            <option value='{{ $pl->id_plat_group }}'>{{ $pl->plat_group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='plat_name' placeholder='Plate Type Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_plat' placeholder='Price' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length Plate*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='length_plat' placeholder='Length Plate' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width Plate*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='width_plat' placeholder='Width Plate' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info Plate</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_plat' placeholder='Info Plate' required />
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
<div class="modal fade" id="edit_plat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Plate Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('plat.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
               <div class='form-group row m-b-15'>
                <input type="hidden" name="id_plat" id="id_plat" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Machine Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_mesin' id='id_mesin' class='form-control' required >
                        <option value=''>---Choose---</option>
                          @foreach($machine as $m)
                            <option value='{{ $m->id_mesin }}'>{{ $m->name_mesin }}</option>
                          @endforeach
                    </select>
                </div>
                </div>
                <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_plat_group' id='id_plat_group' class='form-control' required >
                        <option value=''>---Choose---</option>
                         @foreach($platgroup as $pl)
                            <option value='{{ $pl->id_plat_group }}'>{{ $pl->plat_group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plate Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='plat_name' id='plat_name' placeholder='Ink Type Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='harga_plat' id='harga_plat' placeholder='Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length Plate*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='length_plat' id='length_plat' placeholder='Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width Plate*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='width_plat' id='width_plat' placeholder='Price' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info Plate</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_plat' id='info_plat' placeholder='Ink Type Info' />
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
<div class="modal modal-danger fade" id="delete_plat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('plat.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_plat" id="id_plat" value="">

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