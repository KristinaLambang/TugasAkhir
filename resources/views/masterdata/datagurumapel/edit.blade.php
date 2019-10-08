@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Guru Mata Pelajaran</h3>
		</div>

    <form role="form" method="POST" action="{{ route('gurumapel.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Guru Mata Pelajaran</label>
      </div>
            <div class="col-sm-10">
              <select id="nama_gurumapel" name="nama_gurumapel" class="form-control" requireds>
                <option value="">-Pilih Nama Guru Mata Pelajaran-</option>
                <option>Dina Kirana, S.Pd</option>
                <option>Dicky Pratama, S.Pd</option>
                <option>Puji Astuti, S.Pd</option>
              </select>
            </div>
    </div>
    </div>    

    <div class="form-group">
    <div class="row">
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Laki-Laki
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Perempuan
        </label>
      </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
          <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="TempatLahir">
          </div>
          </div>
          </div>

    <div class="form-group">
    <div class="row">
       <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" placeholder="dd/mm/yyyy">
              </div>
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
@section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('#jurusan').val('{{$gurumapel->jurusan}}');		
		$('#nama_kelas').val('{{$gurumapel->nama_kelas}}');		
	});
</script>
@endsection

@endsection