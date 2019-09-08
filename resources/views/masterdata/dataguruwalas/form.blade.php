@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Guru Wali Kelas</h3>
		</div>

		<div class="box-body">
		<div class="form-group">
			<div class="row">
         		<label for="inputEmail3" class="col-sm-2 control-label">Id Guru</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Id Guru">
            </div>
      	</div>
      	</div>

      <div class="form-group">
        	<div class="row">
        		<label for="" class="col-sm-2 control-label">Nama Guru</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" placeholder="Nama Guru">
        		</div>
        	</div>
        </div>

        <div class="form-group">
            <div class="row">
               	<label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
               	<div class="col-sm-10">
               	<div class="radio">
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
        		<label for="" class="col-sm-2 control-label">Tempat Lahir</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" placeholder="Tempat Lahir">
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
            <div class="col-sm-2">
                <label>Wali Kelas</label>
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
              <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Telepon">
            </div>
        </div>
        </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-danger">Batal</button>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-info pull-right">Simpan</button>
      </div>
      </div>


        </div>
    </div>
</div>
</div>
@endsection