@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
      <h3>Tambah Absensi</h3>
    </div>
    
    <form role="form" method="POST" action="{{ route('absensi.store') }}">
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
            <label>Alpa</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="alpa" placeholder="Alpa" required="" class="form-control" id="alpa">
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Ijin</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="ijin" placeholder="Ijin" required="" class="form-control" id="ijin">
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Sakit</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="sakit" placeholder="Sakit" required="" class="form-control" id="sakit">
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

