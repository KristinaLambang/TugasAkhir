@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Guru Mata Pelajaran</h3>
		</div>  
 
		<form role="form" method="POST" action="{{ route('gurumapel.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
    <div class="box-body">

    <div class="form-group">
      <div class="row">
            <label for="nama_guru_mapel" class="col-sm-2 control-label">Nama Guru Mata Pelajaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_guru_mapel" name="nama_guru_mapel" placeholder="Nama Guru Mata Pelajaran">
            </div>
      </div>
      </div>

    <div class="form-group">
      <div class="row">
          <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="radio">
          <div class="col-sm-10">
              <label>
                <input type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki" checked>
                Laki-Laki
              </label>
              <label>
                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                Perempuan
              </label>
          </div>
          </div>
    </div>
    </div>
    
    <div class="form-group">
      <div class="row">
            <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="TempatLahir">
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
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd/mm/yyyy">
          </div>
        </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Mata Pelajaran</label>
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
        <label>Agama</label>
      </div>
            <div class="col-sm-10">
              <select id="agama" name="agama" class="form-control" requireds>
                <option>-Pilih Agama-</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Chu</option>
              </select>
            </div>
    </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Alamat"></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="telepon" class="col-sm-2 control-label">Telepon</label>
        <div class="col-sm-10">
          <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Telepon">
        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="text" id="password" name="password" class="form-control" placeholder="Password">
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