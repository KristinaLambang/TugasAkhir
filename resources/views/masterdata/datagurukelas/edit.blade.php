@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Jadwal</h3>
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
            <label>Guru Mata Pelajaran</label>
            </div>
            <div class="col-sm-10">
              <select id="mata_pelajaran" name="mata_pelajaran" class="form-control" requireds>
                <option>-Pilih Mata Pelajaran-</option>
                <option>Bahasa Inggris</option>
                <option>Matematika</option>
                <option>Fisika</option>
                <option>Geografi</option>
                <option>Sosiolagi</option>
              </select>
    </div>
    </div>
    </div>

    <div class="form-group">
      <label>Date and time range:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
          <input type="text" class="form-control pull-right" id="reservationtime" name="date">
        </div>
      </div>
      
      <div class="form-group">
        <label>Date range button:</label>

        <div class="input-group">
          <button type="button" class="btn btn-default pull-right" id="daterange-btn" name="date">
            <span>
              <i class="fa fa-calendar"></i> Date range picker
            </span>
            <i class="fa fa-caret-down"></i>
          </button>
        </div>
      </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  
    
    </form>
	</div>
</div>
@section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('#date').val('{{$jadwal->date}}');
    $('#mata_pelajaran').val('{{$jadwal->mata_pelajaran}}');
    $('#nama_kelas').val('{{$jadwal->nama_kelas}}');
    $('#nama_pengajar').val('{{$jadwal->nama_pengajar}}');
	});
</script>
@endsection

@endsection