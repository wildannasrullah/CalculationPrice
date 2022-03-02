@extends('update.edit') 
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>User Management</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master User </b>
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
    <h4 class='panel-title'>User Management</h4>
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
          <i class='fa fa-plus-square'></i> Add User </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='1%'>ID.</th>
                <th class='text-nowrap'>FullName</th>
                <th class='text-nowrap'>Username</th>
                <th class='text-nowrap'>Email</th>
                <th class='text-nowrap'>Level</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $u)
                <tr>
                    <td width='1%'>{{ $u->id}}</td>
                    <td>{{ $u->name}}</td>
                    <td>{{ $u->username}}</td>
                    <td>{{ $u->email}}</td>
                    <td>{{ $u->level}}</td>
                    <td>{{ $u->created_at}}</td>
                    <td>{{ $u->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-user_name="{{$u->name}}" data-user_username="{{$u->username}}" data-user_password="{{$u->password}}" data-user_email="{{$u->email}}" data-user_level="{{$u->level}}" data-user_id="{{$u->id}}" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-user_id="{{$u->id}}" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
      <!-- end col-4 -->
      
    <!-- end row -->
 <!-- Modal Add Group -->
    <div class='modal fade' id='add-modal-dialog'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add User</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('user.store')}}" method="post">
                {{(csrf_field())}}
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Full Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='fullname' placeholder='Full Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>User Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='username' placeholder='User Name' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Email</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='email' name='email' placeholder='Email' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Password*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='password' name='password' placeholder='Password' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Level*</label>
                <div class='col-md-8 col-sm-8'>
                  <select class='form-control' name='level'>
                      <option>---Select Level----</option>
                      @foreach($level as $l)
                        <option value='{{ $l->nama_level }}'>{{ $l->nama_level }}</option>
                      @endforeach
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
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
     <form action="{{route('user.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      	<input type="hidden" name="id" id="id" value="">
			  <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Full Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='fullname' id='fullname' placeholder='Full Name' required />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>User Name*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='text' name='username' id='username' placeholder='Full Name' required readonly='readonly' />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Email</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='email' name='email' id='email' placeholder='Email' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Password*</label>
                <div class='col-md-8 col-sm-8'>
                  <input class='form-control' type='password' name='password' placeholder='' />
                </div>
              </div>
               <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Level*</label>
                <div class='col-md-8 col-sm-8'>
                  <select class='form-control' name='level' id='level'>
                      <option>---Select Level----</option>
                      @foreach($level as $l)
                        <option value='{{ $l->nama_level }}'>{{ $l->nama_level }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              </p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-yellow">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
    
<!-- end modal Edit Group -->

<!-- Modal -->
<div class="modal modal-danger fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      </div>
      <form action="{{route('user.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id" id="id" value="">

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