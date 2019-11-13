@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Nilai Sikap</h3>
		</div>

    <form role="form" method="POST" action="{{ route('nilaisikap.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    
<div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>NIS</label>
      </div>
          <div class="col-sm-10">
             <input type="text" name="nis" placeholder="NIS" required="" class="form-control" id="nis">
          </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Siswa</label>
      </div>
          <div class="col-sm-10">
             <input type="text" name="nama_siswa" placeholder="Nama Siswa" required="" class="form-control" id="nama_siswa">
          </div>
    </div>
    </div>     

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Spiritual</label>
      </div>
          <div class="col-sm-10">
             <input type="text" name="spiritual" placeholder="Spiritual" required="" class="form-control" id="spiritual">
          </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Sikap</label>
      </div>
          <div class="col-sm-10">
             <input type="text" name="sikap" placeholder="Sikap" required="" class="form-control" id="sikap">
          </div>
    </div>
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  
    
    </form>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#sikap').val('{{$nilaisikap->sikap}}');
    $('#spiritual').val('{{$nilaisikap->spiritual}}');
    $('#nama_siswa').val('{{$nilaisikap->nama_siswa}}');
    $('#nis').val('{{$nilaisikap->nis}}');
	});
</script>
@endsection