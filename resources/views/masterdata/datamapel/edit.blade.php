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
      <div class="col-sm-2">
        <label>Nama Mata Pelajaran</label>
      </div>
            <div class="col-sm-10">
              <select id="nama_mapel" name="nama_mapel" class="form-control" requireds>
                <option value="">-Pilih Nama Mata Pelajaran-</option>
                <option>Bahasa Indonesia</option>
                <option>Bahasa Inggris</option>
                <option>Matematika</option>
                <option>Fisika</option>
                <option>Kimia</option>
                <option>Sosiologi</option>
                <option>Geografi</option>
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
              <select id="nama_kelas" name="nama_kelas" class="form-control" requireds>
                <option value="">-Pilih Nama Kelas-</option>
                <option>IPA PA</option>
                <option>IPA PI</option>
                <option>IPS PA</option>
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
              <select id="nama_pengajar" name="nama_pengajar" class="form-control" requireds>
                <option value="">-Pilih Nama Pengajar-</option>
                <option>Dina Kirana, S.Pd</option>
                <option>Dicky Pratama, S.Pd</option>
                <option>Puji Astuti, S.Pd</option>
              </select>
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label class="col-sm-10">KKM</label>
          <input id="kkm" name="kkm" type="text" class="form-control" placeholder="KKM" requireds>
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
    $('#nama_pengajar').val('{{$mapel->nama_pengajar}}'); 
    $('#nama_kelas').val('{{$mapel->nama_kelas}}');
    $('#nama_mapel').val('{{$mapel->nama_mapel}}');		
	});
</script>
@endsection

@endsection