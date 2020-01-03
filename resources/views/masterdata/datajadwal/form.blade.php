@extends('layouts.admin-lte')
@section('content')
<div class="section">
  <div class="box box-primary">
    <div class="box-harder">
      <h3>Tambah Data Jadwal</h3>
    </div>

    <form role="form" method="POST" action="{{ route('jadwal.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
    <div class="box-body">

    <div class="form-group">
    <div class="row"> 
      <div class="col-sm-2">
        <label>Nama Pengajar</label>
      </div> 
            <div class="col-sm-10">
             <select name="nama_pengajar" class="form-control" id="id_guru_mapel" required>
                  @foreach($guru as $row)
                  <option value="{{ $row->id_guru_mapel }}">{{ $row->nama_guru_mapel }}</option>
                  @endforeach
                </select> 
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Kelas</label>
      </div>
            <div class="col-sm-10">
             <select name="nama_kelas" class="form-control" id="id_kelas">
                  @foreach($kelas as $row)
                  <option value="{{ $row->id_kelas }}">{{ $row->nama_kelas }}</option>
                  @endforeach
                </select> 
            </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Nama Mata Pelajaran</label>
            </div>
            <div class="col-sm-10">
             <select name="nama_mapel" class="form-control" id="id_mapel">
                  @foreach($mapel as $row)
                  <option value="{{ $row->id_mapel }}">{{ $row->nama_mapel }}</option>
                  @endforeach
                </select> 
            </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Hari</label>
            </div>
            <div class="col-sm-10">
              <select id="hari" name="hari" class="form-control" required>
                <option>-Pilih Hari-</option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
              </select>
       </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Dari Jam</label>
            </div>
            <div class="col-sm-10">
              <input id="dari_jam" value="dari_jam" name="dari_jam" type="time" required>
       </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Sampai Jam</label>
            </div>
            <div class="col-sm-10">
              <input id="sampai_jam" value="sampai_jam" name="sampai_jam" type="time" required>
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