@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header"></div>

    <form role="form" method="POST" action="{{ route('gurukelas.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
      
     <div class="box-body">

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Guru Kelas</label>
      </div>
            <div class="col-sm-10">
              <select name="id_guru_mapel" class="form-control" id="id_guru_mapel">
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
        <label>Kelas</label>
      </div>
            <div class="col-sm-10">
              <select name="id_kelas" class="form-control" id="id_kelas">
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
            <label>Guru Mata Pelajaran</label>
        </div>
           <div class="col-sm-10">
              <select name="id_mapel" class="form-control" id="id_mapel">
                 @foreach($mapel as $row)
                  <option value="{{ $row->id_mapel }}">{{ $row->nama_mapel }}</option>
                  @endforeach
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
<!-- <script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script> -->
@endsection