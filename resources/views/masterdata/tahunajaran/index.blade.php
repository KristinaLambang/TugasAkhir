@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-body">
	<div class="box-harder">
      <h3>Tambah Data Jadwal</h3>
    </div>

		<div class="form-group">
	    <div class="row">
	      <div class="col-sm-2">
	        <label>Semester</label>
	      </div>
	            <div class="col-sm-10">
	              <select class="form-control">
	                <option>-Pilih Semester-</option>
	                <option>Genap</option>
	                <option>Ganjil</option>
	                </select>
		       </div>
	   		 </div>
	   	</div>

	   	<div class="form-group">
		    <div class="row">
		      <div class="col-sm-2">
		        <label>Tahun Ajaran</label>
		      </div>
		            <div class="col-sm-10">
		              <select class="form-control">
		                <option>-Pilih Semester-</option>
		                <option>2018/2019</option>
		                <option>2019/2020</option>
		                </select>
		       </div>
	   		 </div>
	   	</div>

	   	<div class="col-sm-11">
          <button type="submit" class="btn btn-info pull-right">Simpan</button>
        </div>

		</div>
	</div>
</div>
@endsection