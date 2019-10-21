@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Guru Kelas</h3>
		</div> 

    <form role="form" method="POST" action="{{ route('gurukelas.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Guru</label>
      </div> 
            <div class="col-sm-10">
              <select name="id_guru" class="form-control" id="id_guru">
                  @if ($isEdit == FALSE)
                  @foreach($guru as $row)
                  <option value="{{ $row->id_guru_mapel }}">{{ $row->nama_guru_mapel }}</option>
                  @endforeach
                  @else
                  @foreach($guru as $row)
                    <option {{ $row->id == $guru->id_guru_mapel ? "selected" : "" }} value="{{ $row->id }}">{{ $row->nama_guru_mapel }}</option>
                  @endforeach
                  @endif
                </select>
            </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Kelas</label>
      </div>
            <div class="col-sm-10">
              <select name="id_kelas" class="form-control" id="id_kelas">
                  @if ($isEdit == FALSE)
                  @foreach($kelas as $row)
                  <option value="{{ $row->id_kelas }}">{{ $row->nama_kelas }}</option>
                  @endforeach
                  @else
                  @foreach($kelas as $row)
                    <option {{ $row->id == $kelas->id_kelas ? "selected" : "" }} value="{{ $row->id }}">{{ $row->nama_kelas }}</option>
                  @endforeach
                  @endif
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
                  @if ($isEdit == FALSE)
                  @foreach($mapel as $row)
                  <option value="{{ $row->id_mapel }}">{{ $row->nama_mapel }}</option>
                  @endforeach
                  @else
                  @foreach($mapel as $row)
                    <option {{ $row->id == $mapel->id_mapel ? "selected" : "" }} value="{{ $row->id }}">{{ $row->nama_mapel }}</option>
                  @endforeach
                  @endif
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
<!-- @section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('#date').val('{{$jadwal->date}}');
    $('#mata_pelajaran').val('{{$jadwal->mata_pelajaran}}');
    $('#nama_kelas').val('{{$jadwal->nama_kelas}}');
    $('#nama_pengajar').val('{{$jadwal->nama_pengajar}}');
	});
</script>
@endsection -->

@endsection