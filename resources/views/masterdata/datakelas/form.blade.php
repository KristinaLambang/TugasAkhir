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
      <div class="col-sm-2">
        <label>Nama Kelas</label>
      </div>
            <div class="col-sm-10">
             <select id="nama_kelas" name="nama_kelas" class="form-control" requireds>
                <option value="">-Pilih Nama Kelas-</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
              </select>
            </div>
    </div>
    </div>      
    
    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Jurusan</label>
      </div>
            <div class="col-sm-10">
              <select id="jurusan" name="jurusan" class="form-control" requireds>
                <option value="">-Pilih Nama Kelas-</option>
                <option>IPA PA</option>
                <option>IPA PI</option>
                <option>IPS PA</option>
              </select>
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