
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Plastic Group</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Plastic Group</b>
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
    <h4 class='panel-title'>Plastic Group</h4>
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
        <a href='#add-modal-plasticgroup' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Plastic Group </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Group</th>
                <th class='text-nowrap'>Plastic Group Name</th>
                <th class='text-nowrap'>Info</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($plasticgroup as $pl)
                <tr>
                    <td width='10%'>{{ $pl->id_laminating_group}}</td>
                    <td>{{ $pl->laminating_group_name}}</td>
                    <td>{{ $pl->info_laminating_group}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-plasticgroup_id="{{$pl->id_laminating_group}}" data-plasticgroup_name="{{$pl->laminating_group_name}}" data-plasticgroup_info="{{$pl->info_laminating_group}}" data-toggle="modal" data-target="#edit_plasticgroup"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-plasticgroup_id="{{$pl->id_laminating_group}}" data-toggle="modal" data-target="#delete_plasticgroup"><i class="fa fa-trash-alt"></i></button>
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
        @if(session('tambah_plastic'))
          <div class="alert alert-primary" role="alert">
            <strong>{{session('tambah_plastic')}}</strong>
          </div>
        @endif
        @if(session('edit_plastic'))
          <div class="alert alert-warning" role="alert">
            <strong>{{session('edit_plastic')}}</strong>
          </div>
        @endif
        @if(session('delete_plastic'))
          <div class="alert alert-danger" role="alert">
            <strong> {{session('delete_plastic')}}</strong>
          </div>
        @endif
        <div class='m-b-2 text-inverse f-w-600 f-s-16'></div>
        <br />
        <a href='#add-modal-plastic' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Plastic Type </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Plastic</th>
                <th class='text-nowrap'>Plastic Name</th>
                <th class='text-nowrap'>Plastic Group</th>
                <th class='text-nowrap'>Tamper Type</th>
                <th class='text-nowrap'>Length</th>
                <th class='text-nowrap'>Width</th>
                <th class='text-nowrap'>Price</th>
                <th class='text-nowrap'>Information</th>
                <th class='text-nowrap'>Begda</th>
                <th class='text-nowrap'>Endda</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($plastic as $m)
                <tr>
                    <td width='10%'>{{ $m->id_laminate}}</td>
                    <td>{{ $m->laminate_name}}</td>
                    <td>{{ $m->laminating_group_name}}</td>
                    <td>{{ $m->tamper_type}}</td>
                    <td>{{ $m->panjang_laminate}}</td>
                    <td>{{ $m->lebar_laminate}}</td>
                    <td>{{ $m->laminate_harga}}</td>
                    <td>{{ $m->ket_laminate}}</td>
                    <td>{{ $m->begda}}</td>
                    <td>{{ $m->endda}}</td>
                    <td>{{ $m->created_at}}</td>
                    <td>{{ $m->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-plastic_id="{{$m->id_laminate}}" data-plasticgroup_id="{{$m->id_laminate_group}}" data-plastic_name="{{$m->laminate_name}}" data-plastic_tampertype="{{$m->tamper_type}}" data-plastic_panjang="{{$m->panjang_laminate}}" data-plastic_lebar="{{$m->lebar_laminate}}" data-plastic_harga="{{$m->laminate_harga}}" data-plastic_ket="{{$m->ket_laminate}}" data-plastic_begda="{{$m->begda}}" data-plastic_endda="{{$m->endda}}" data-toggle="modal" data-target="#edit_plastic"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-plastic_id="{{$m->id_laminate}}" data-toggle="modal" data-target="#delete_plastic"><i class="fa fa-trash-alt"></i></button>
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
    <div class='modal fade' id='add-modal-plasticgroup'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Plastic Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('plasticgroup.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminating_group_name' placeholder='Plastic Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_laminating_group' placeholder='Plastic Group Info' />
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
<div class="modal fade" id="edit_plasticgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Plastic Group</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('plasticgroup.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_laminating_group" id="id_laminating_group" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Group Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminating_group_name' id='laminating_group_name' placeholder='Plastic Group Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Info</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='info_laminating_group' id='info_laminating_group' placeholder='Plastic Group Info' />
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
<div class="modal modal-danger fade" id="delete_plasticgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('plasticgroup.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_laminating_group" id="id_laminating_group" value="">

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
    <div class='modal fade' id='add-modal-plastic'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Plastic Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('plastic.store')}}" method="post">
                {{(csrf_field())}}
              
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminate_name' placeholder='Plastic Type Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_laminate_group' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($plasticgroup as $mg)
                            <option value='{{ $mg->id_laminating_group }}'>{{ $mg->laminating_group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Tamper Type</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='tamper_type' placeholder='Tamper Type' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='panjang_laminate' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='lebar_laminate' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminate_harga' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Information</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_laminate' placeholder='Information' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='begda' placeholder='Begin Date' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='endda' placeholder='End Date' />
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
<div class="modal fade" id="edit_plastic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Plastic Type</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('plastic.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
              
              <div class='form-group row m-b-15'>
                   <input type="hidden" name="id_laminate" id="id_laminate" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Type Name*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminate_name' id='laminate_name' placeholder='Plastic Type Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Plastic Group*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_laminate_group' id='id_laminating_group' class='form-control' required>
                        <option value=''>---Choose---</option>
                        @foreach($plasticgroup as $mg)
                            <option value='{{ $mg->id_laminating_group }}'>{{ $mg->laminating_group_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Tamper Type</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='tamper_type' id='tamper_type' placeholder='Tamper Type' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Length*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='panjang_laminate' id='panjang_laminate' placeholder='' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Width*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='lebar_laminate' id='lebar_laminate' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Price*</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='laminate_harga' id='laminate_harga' placeholder='' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Information</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='ket_laminate' id='ket_laminate' placeholder='Information' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Begda*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='begda' id='begda' placeholder='Begin Date' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Endda</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='date' name='endda' id='endda' placeholder='End Date' />
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
<div class="modal modal-danger fade" id="delete_plastic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('plastic.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id_laminate" id="id_laminate" value="">

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