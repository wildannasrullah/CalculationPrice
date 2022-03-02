
@extends('layouts.master') 

@section('content') 


<ol class='breadcrumb pull-right'>
  <li class='breadcrumb-item'>
    <a href='javascript:;'>Master</a>
  </li>
  <li class='breadcrumb-item active'>Paper Size</li>
</ol>
<h1 class='page-header'>
  <b>
    <i class='fa fa-users'></i> Master Paper Size</b>
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
    <h4 class='panel-title'>Paper Size</h4>
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
        <a href='#add-modal-size' class='btn btn-sm btn-yellow' data-toggle='modal' name='p1'>
          <i class='fa fa-plus-square'></i> Add Paper Size </a>
        <br>
        <br>
        <form data-parsley-validate='true'>
          <table id='data-table-default' class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th width='10%'>ID Size</th>
                <th class='text-nowrap'>Paper Name</th>
                <th class='text-nowrap'>Gramature</th>
                <th class='text-nowrap'>Length</th>
                <th class='text-nowrap'>Width</th>
                <th class='text-nowrap'>Price per Kg</th>
                <th class='text-nowrap'>Created At</th>
                <th class='text-nowrap'>Updated At</th>
                <th class='text-nowrap'>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($papersize as $psize)
                <tr>
                    <td width='10%'>{{ $psize->id_size}}</td>
                    <td>{{ $psize->pg2_name}}</td>
                    <td>{{ $psize->gramature}}</td>
                    <td>{{ $psize->length}}</td>
                    <td>{{ $psize->width}}</td>
                    <td>{{ $psize->price_per_kg}}</td>
                    <td>{{ $psize->created_at}}</td>
                    <td>{{ $psize->updated_at}}</td>
                    <td width='16%' align="center">
                      <button type="button" class="btn btn-xs btn-primary" data-papersize_size="{{$psize->id_size}}" data-papersize_id_pg2="{{$psize->id_pg2}}" data-papersize_id_gsm="{{$psize->id_gsm}}" data-papersize_length="{{$psize->length}}" data-papersize_width="{{$psize->width}}" data-papersize_price="{{$psize->price_per_kg}}" data-toggle="modal" data-target="#edit_papersize"><i class="fa fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-papersize_size="{{$psize->id_size}}" data-toggle="modal" data-target="#delete_papersize"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </form>
      </div>
      <!-- end col-4 -->
    
        <!-- Modal Add Group -->
    <div class='modal fade' id='add-modal-size'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h4 class='modal-title'>Add Paper Size</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
            <form action="{{route('size.store')}}" method="post">
              
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Group 2*</label>
                <div class='col-md-8 col-sm-8'>
                    <select name='id_pg2' id='id_pg2' class='form-control dynamic' data-dependent="id_gsm" required>
                        <option value=''>---Select Paper Group 2---</option>
                        @foreach($papergroup2 as $pg2)
                            <option value='{{ $pg2->id_pg2 }}'>{{ $pg2->pg2_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Gramature*</label>
                <div class='col-md-8 col-sm-8'>
                 <select name='id_gsm' id='id_gsm' class='form-control' required>
                        <option value=''></option>
                    </select>
                </div>
                {{ csrf_field() }}
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='length' placeholder='Paper Length' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='width' placeholder='Paper Width' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Price Per Kg</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='price_per_kg' placeholder='Paper Price per Kg' required /> 
                    <font color='red' size='1'>** Rupiah</font>
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
<div class="modal fade" id="edit_papersize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class='modal-header'>
            <h4 class="modal-title" id="myModalLabel">Edit Paper Size</h4>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
          </div>
          <div class='modal-body'>
            <p>
           <form action="{{route('size.update','test')}}" method="post">
      		{{method_field('patch')}}
              <div class='form-group row m-b-15'>
                <input type="hidden" name="id_size" id="id_size" value="">
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Paper Group 2*</label>
                <div class='col-md-8 col-sm-8'>
                     <select name='id_pg21' id='id_pg21' class='form-control' data-dependent="id_gsm2" required>
                        <option value=''>---Select Paper Group 2---</option>
                        @foreach($papergroup2 as $pg2)
                            <option value='{{ $pg2->id_pg2 }}'>{{ $pg2->pg2_name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='fullname'>Gramature*</label>
                <div class='col-md-8 col-sm-8'>
                 <select name='id_gsm2' id='id_gsm2' class='form-control' required>
                        <option value=''>---Select Paper Gramature---</option>
                        @foreach($papergsm as $pgsm)
                            <option value='{{ $pgsm->id_gsm }}'>{{ $pgsm->gramature }}</option>
                        @endforeach
                    </select>
                </div>
                {{ csrf_field() }}
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Length</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='length' id='length' placeholder='Paper Length' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Width</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='width' id='width' placeholder='Paper Width' required />
                </div>
              </div>
              <div class='form-group row m-b-15'>
                <label class='col-md-4 col-sm-4 col-form-label' for='message'>Price Per Kg</label>
                <div class='col-md-8 col-sm-8'>
                    <input class='form-control' type='text' name='price_per_kg' id='price_per_kg' placeholder='Paper Price per Kg' required /> 
                    <font color='red' size='1'>** Rupiah</font>
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

<!-- Untuk menampilkan drop down gramature kertas berdasarkan jenis kertas -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function () {
    $('.dynamic').change(function () {
        if($(this).val() != ''){
            var select = $(this).attr("id");
            //console.log("Halo "+ select);
            var value = $(this).val();
            //console.log("Halo2 "+ value);
            var dependent = $(this).data('dependent');
            //console.log("Halo3 "+ dependent);
            var _token = $('input[name="_token"]').val();
            //console.log("Halo4 "+ _token);
            $.ajax({
                url:"{{ route('size.fetch') }}", //Pemanggilan function fetch di PapersizeController.php
                method:"POST",
                data:{select:select, value:value, _token:_token, dependent:dependent},
                success:function(result){
                  console.log("halo33 "+result);
                    $('#'+dependent).html(result);
                }
            })
        }
    });
});
</script>

<script>
    $('#id_pg21').change(function () {
      var select = $(this).attr("id");  
      var gsmID = $(this).val();
      var dependent = $(this).data('dependent');
      var _token = $('input[name="_token"]').val();
          console.log("halo0 "+select);
          console.log("halo1 "+gsmID);
          console.log("halo2 "+dependent);
            $.ajax({
                url:"{{ route('size.getGsm') }}",
                method:"POST",
                data:{select:select, value:gsmID, _token:_token, dependent:dependent},
                success:function(result){
                  console.log("halo "+result);
                   $('#'+dependent).html(result);
                    // if (result) {
                    //     $('#id_gsm').empty();
                    //     $('#id_gsm').append('<option value="">Pilih GSM</option>');
                    //     $.each(result, function(key, value) {
                    //         $('#id_gsm').append('<option value="' + key + '">' + value + '</option>');
                    //     });
                    // } else {
                    //     $('#id_gsm').empty();
                    // }
                }
            });
    });
</script>

@endsection