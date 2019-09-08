@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
			<h3>Tambah Data Jadwal</h3>
		</div>

		<div class="box-body">
		<div class="form-group">
			<div class="row">
				<label for="inputEmail3" class="col-sm-2 control-label">Id Jadwal</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Id Jadwal" disabled>
            </div>
		</div>
		</div>
		
		<div class="form-group">
		    <div class="row">
		      <div class="col-sm-2">
		        <label>Nama Pengajar</label>
		      </div>
		            <div class="col-sm-10">
		              <select class="form-control">
		                <option>-Pilih Nama Pengajar-</option>
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
				<label>Nama Kelas</label>
			</div>
            <div class="col-sm-10">
              <select class="form-control">
              	<option>-Pilih Nama Kelas-</option>
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
                <label>Nama Mata Pelajaran</label>
                </div>
                <div class="col-sm-10">
                  <select class="form-control">
                    <option>-Pilih Nama Mata Pelajaran-</option>
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
            <div class="row">
              <label class="col-sm-2 control-label">Hari/ Tanggal</label>
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
				<label for="inputEmail3" class="col-sm-2 control-label">Jam</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Jam">
            </div>
		</div>
		</div>

        <div class="box-footer">
          <button type="submit" class="btn btn-danger">Batal</button>
        <div class="col-sm-11">
          <button type="submit" class="btn btn-info pull-right">Simpan</button>
        </div>
        
        </div>
        </div>
        </div>
        </div>
	</div>
</div>
@endsection