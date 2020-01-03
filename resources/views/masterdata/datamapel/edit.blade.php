@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Mata Pelajaran</h3>
		</div>

    <form role="form" method="POST" action="{{ route('mapel.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    

    <div class="form-group">
        <div class="row">
          <label for="nam_mapel" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
        <div class="col-sm-10">
          <input type="text" id="nama_mapel" name="nama_mapel" class="form-control" placeholder="Nama Mata Pelajaran" required>
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
             <select name="nama_guru_mapel" class="form-control" id="id_guru_mapel">
                  @foreach($gurumapel as $row)
                  <option value="{{ $row->id_guru_mapel }}">{{ $row->nama_guru_mapel }}</option>
                  @endforeach
                </select> 
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label class="col-sm-10">KKM</label>
          <input id="kkm" name="kkm" type="text" class="form-control" placeholder="KKM" required>
      </div>
        </div>
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
		$('#kkm').val('{{$mapel->kkm}}');
    $('#id_guru_mapel').val('{{$mapel->id_guru_mapel}}'); 
    $('#id_kelas').val('{{$mapel->id_kelas}}');
    $('#nama_mapel').val('{{$mapel->nama_mapel}}');		
	});
</script>
@endsection

@endsection