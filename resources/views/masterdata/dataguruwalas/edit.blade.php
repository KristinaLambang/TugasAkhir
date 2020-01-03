@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Edit Data Guru Wali Kelas</h3>
		</div>

    <form role="form" method="POST" action="{{ route('guruwalas.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    

    <div class="form-group">
      <div class="row">
            <label for="tempat_lahir" class="col-sm-2 control-label">Nama Guru Wali Kelas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_guru_walas" name="nama_guru_walas" placeholder="Nama Guru Wali Kelas" required>
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
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="TempatLahir" required>
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
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd/mm/yyyy" required>
          </div>
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
        <label>Agama</label>
      </div>
            <div class="col-sm-10">
              <select id="agama" name="agama" class="form-control" required>
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
          <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Alamat" required></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="telepon" class="col-sm-2 control-label">Telepon</label>
        <div class="col-sm-10">
          <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Telepon" required>
        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
          <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="text" id="password" name="password" class="form-control" placeholder="Password" required>
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
    $('#password').val('{{$guruwalas->password}}');
    $('#email').val('{{$guruwalas->email}}');
		$('#telepon').val('{{$guruwalas->telepon}}');
		$('#alamat').val('{{$guruwalas->alamat}}');
		$('#agama').val('{{$guruwalas->agama}}');
		$('#id_kelas').val('{{$guruwalas->id_kelas}}');
		$('#tanggal_lahir').val('{{$guruwalas->tanggal_lahir}}');
		$('#tempat_lahir').val('{{$guruwalas->tempat_lahir}}');
		$("input[name='jenis_kelamin'][value='{{$guruwalas->jenis_kelamin}}']").prop("checked",true);
		$('#nama_guru_walas').val('{{$guruwalas->nama_guru_walas}}');
	});
</script>
@endsection

@endsection