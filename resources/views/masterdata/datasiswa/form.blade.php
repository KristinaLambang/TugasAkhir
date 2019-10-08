@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Siswa</h3>
		</div>

		<div class="box-body">
			<div class="form-group">
			<div class="row">
          <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="NIS">
            </div>
      </div>
      </div>

      <div class="form-group">
      <div class="row">
          <div class="col-sm-2">
          <label>Kelas</label>
          </div>
          <div class="col-sm-10">
            <select class="form-control">
              <option>-Pilih Kelas-</option>
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
                <label for="inputPassword3" class="col-sm-2 control-label">Nama Siswa</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Siswa">
             	</div>
          </div>
          </div>

          <div class="form-group">
          <div class="row">
             	<label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
             	<div class="radio">
              <div class="col-sm-10">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Laki-Laki
                  </label>
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Perempuan
                  </label>
              </div>
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
            <label for="inputEmail3" class="col-sm-2 control-label">Agama</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Agama">
          </div>
      </div>
      </div>
        
      <div class="form-group">
        <div class="row">
          <label for="" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label for="" class="col-sm-2 control-label">Nama Ayah</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Nama Ayah">
        </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label for="" class="col-sm-2 control-label">Pekerjaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Pekerjaan">
        </div>
        </div>
      </div>

     <div class="form-group">
        <div class="row">
          <label for="" class="col-sm-2 control-label">Telepon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Telepon">
        </div>
        </div>
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-danger">Batal</button>
      <div class="col-sm-2">
          <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
              Simpan
          </button>
      </div>
      </div>
      
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Data Siswa</h4>
            </div>
            <div class="modal-body">
              <p>Data Siswa berhasil ditambahkan</p>
            </div>
      </div>
      </div>
      </div>
      </div>
    	</div>
	</div>
  </div>
</div>
@endsection