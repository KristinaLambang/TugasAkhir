@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder"> 
			<h3>Tambah Data Kelas</h3>
		</div>

    <form role="form" method="POST" action="{{ route('kelas.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
      <div class="box-body">

    <div class="form-group">
      <div class="row">
            <label for="nama_kelas" class="col-sm-2 control-label">Nama Kelas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas">
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
  console.log('yaha');
});
</script>
@endsection