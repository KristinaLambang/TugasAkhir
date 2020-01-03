@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Edit Absensi</h3>
        </div>
        
    <form role="form" method="POST" action="{{ route('absensi.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    
    <div class="form-group">
        <div class="row">
        <div class="col-sm-2">
            <label>NIS</label>
        </div>
            <div class="col-sm-10">
                <input type="text" name="nis" placeholder="NIS" class="form-control" id="nis" required>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
        <div class="col-sm-2">
            <label>Nama Siswa</label>
        </div>
            <div class="col-sm-10">
                <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="form-control" id="nama_siswa" required>
            </div>
        </div>
        </div>     

        <div class="form-group">
        <div class="row">
        <div class="col-sm-2">
            <label>Alpa</label>
        </div>
            <div class="col-sm-10">
                <input type="text" name="alpa" placeholder="Alpa" class="form-control" id="alpa" required>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
        <div class="col-sm-2">
            <label>Ijin</label>
        </div>
            <div class="col-sm-10">
                <input type="text" name="ijin" placeholder="Ijin" class="form-control" id="ijin" required>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
        <div class="col-sm-2">
            <label>Sakit</label>
        </div>
            <div class="col-sm-10">
                <input type="text" name="sakit" placeholder="Sakit" class="form-control" id="sakit" required>
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
    $('#sakit').val('{{$absensi->sakit}}');
    $('#ijin').val('{{$absensi->ijin}}');
    $('#alpa').val('{{$absensi->alpa}}');
    $('#nama_siswa').val('{{$absensi->siswa->nama_siswa}}');
    $('#nis').val('{{$absensi->siswa->nis}}');
	});
</script>
@endsection