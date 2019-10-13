@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder"></div>

    <!-- <form role="form" method="POST" action="{{ route('laporanleger.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
      <div class="box-body"> -->

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tahun Ajaran</label>
      </div>
            <div class="col-sm-10">
              <select id="tahun_ajaran" name="tahun_ajaran" class="form-control" requireds>
                <option value="">-Pilih Tahun Ajaran-</option>
                <option>2018/2019</option>
                <option>2019/2020</option>
              </select>
            </div>
    </div>
    </div>      

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Semester</label>
      </div>
            <div class="col-sm-10">
            <select id="semester" name="semester" class="form-control" requireds>
                <option value="">-Pilih Semester-</option>
                <option>Ganjil</option>
                <option>Genap</option>
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
<!-- <script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script> -->
@endsection