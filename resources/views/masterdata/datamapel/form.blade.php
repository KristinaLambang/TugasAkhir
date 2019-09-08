@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="harder">
			<h3>Tambah Data Mata Pelajaran</h3>
		</div>


		<div class="box-body">
			<div class="form-group">
				<div class="row">
					<label for="inputEmail3" class="col-sm-2 control-label">Id Mata Pelajaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Id Mata Pelajaran" disabled>
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
				<label for="inputEmail3" class="col-sm-2 control-label">KKM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="KKM">
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
@endsection