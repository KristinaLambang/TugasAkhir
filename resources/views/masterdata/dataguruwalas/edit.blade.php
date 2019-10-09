@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Guru Wali Kelas</h3>
		</div>

    <form role="form" method="POST" action="{{ route('guruwalas.update',$id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="box-body">
    

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Guru Walas</label>
      </div>
            <div class="col-sm-10">
             <select id="nama_guru_walas" name="nama_guru_walas" class="form-control" requireds>
                <option value="nama_guru_walas">-Pilih Nama Guru-</option>
                <option>Dina Kirana, S.Pd</option>
                <option>Dicky Pratama, S.Pd</option>
                <option>Puji Astuti, S.Pd</option>
              </select>
            </div>
    </div>
    </div>      

    <div class="form-group">
      <div class="row">
          <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="radio">
          <div class="col-sm-10">
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="jenis_kelamin" checked>
                Laki-Laki
              </label>
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="jenis_kelamin">
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
        <label>Wali Kelas</label>
      </div>
            <div class="col-sm-10">
              <select id="wali_kelas" name="wali_kelas" class="form-control" requireds>
                <option>-Pilih Wali Kelas-</option>
                <option>X IPA PA</option>
                <option>X IPA PI</option>
                <option>X IPS PA</option>
                <option>XI IPA PA</option>
                <option>XI IPA PI</option>
                <option>XI IPS PA</option>
                <option>XII IPA PA</option>
                <option>XII IPA PI</option>
                <option>XII IPS PA</option>
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
    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  
    
    </form>
	</div>
</div>
@section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('#telepon').val('{{$guruwalas->telepon}}');
		$('#alamat').val('{{$guruwalas->alamat}}');
		$('#agama').val('{{$guruwalas->agama}}');
		$('#wali_kelas').val('{{$guruwalas->wali_kelas}}');
		$('#tanggal_lahir').val('{{$guruwalas->tanggal_lahir}}');
		$('#tempat_lahir').val('{{$guruwalas->tempat_lahir}}');
		$('#jenis_kelamin').val('{{$guruwalas->jenis_kelamin}}');
		$('#nama_guru_walas').val('{{$guruwalas->nama_guru_walas}}');
	});
</script>
@endsection

@endsection