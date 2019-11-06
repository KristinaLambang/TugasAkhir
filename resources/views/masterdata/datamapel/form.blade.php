@extends('layouts.admin-lte')
@section('content')
<div class="section">
  <div class="box box-primary">
    <div class="box-harder">
      <h3>Tambah Data Mata Pelajaran</h3>
    </div>

    <form role="form" method="POST" action="{{ route('mapel.store') }}">
            {{ csrf_field() }} {{ method_field('POST') }}
    <div class="box-body">
    
    <div class="form-group">
        <div class="row">
          <label for="nama_mapel" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
        <div class="col-sm-10">
          <input type="text" id="nama_mapel" name="nama_mapel" class="form-control" placeholder="Nama Mata Pelajaran">
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
        <label>Nama Pengajar</label>
      </div>
           <div class="col-sm-10">
             <select name="nama_pengajar" class="form-control" id="id_guru_mapel">
                  @foreach($gurumapel as $row)
                  <option value="{{ $row->nama_pengajar }}">{{ $row->nama_guru_mapel }}</option>
                  @endforeach
                </select> 
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
        <label class="col-sm-2 control-label">KKM</label>
            <div class="col-sm-10">
              <input type="text" id="kkm" name="kkm" class="form-control" placeholder="KKM" requireds>
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