@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Edit Data Siswa</h3>
		</div> 

    <form role="form" method="POST" action="{{ route('siswa.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">

    <div class="form-group">
      <div class="row">
            <label for="nis" class="col-sm-2 control-label">NIS</label>
            <div class="col-sm-10">
              <input type="integer" class="form-control" id="nis" name="nis" placeholder="NIS">
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
            <label for="nama_siswa" class="col-sm-2 control-label">Nama Siswa</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa">
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
            <label for="nama_ayah" class="col-sm-2 control-label">Nama Ayah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
            </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
            <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
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
@section('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    $('#password').val('{{$siswa->password}}');
    $('#email').val('{{$siswa->email}}');
    $('#telepon').val('{{$siswa->telepon}}');
    $('#pekerjaan').val('{{$siswa->pekerjaan}}');
    $('#nama_ayah').val('{{$siswa->nama_ayah}}');
    $('#alamat').val('{{$siswa->alamat}}');
    $('#agama').val('{{$siswa->agama}}');
    $('#tanggal_lahir').val('{{$siswa->tanggal_lahir}}');
    $('#tempat_lahir').val('{{$siswa->tempat_lahir}}');
    $("input[name='jenis_kelamin'][value='{{$siswa->jenis_kelamin}}']").prop("checked",true);
    $('#nama_siswa').val('{{$siswa->nama_siswa}}');
    $('#id_kelas').val('{{$siswa->nama_kelas}}');
    $('#nis').val('{{$siswa->nis}}');
  });
</script>
@endsection

@endsection