@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
    <div class="box-harder">
          <h3>Tambah Nilai Extrakurikuler</h3>
    </div>

    <form role="form" method="POST" action="{{ route('laporanleger.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
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
            <label>Nama Extrakurikuler</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="nama_extrakurikuler" placeholder="Spiritual" required="" class="form-control" id="nama_extrakurikuler">
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Predikat</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="predikat" placeholder="Predikat" required="" class="form-control" id="predikat">
              </div>
        </div>
        </div> 
    

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  

    </form>
	</div>
</div>
<!-- <script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script> -->
@endsection