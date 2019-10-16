@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-haeder">

    <form role="form" method="POST" action="{{ route('laporanleger.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
      <div class="box-body">
        <div class="form-group">
        <div class="row"> 
        <div class="col-sm-2">
          <label>Nama Pengajar</label>
        </div> 
            <div class="col-sm-10">
             <select id="nama_pengajar" name="nama_pengajar" class="form-control" requireds>
                <option value="nama_pengajar">-Pilih Nama Pengajar-</option>
                <option>Dina Kirana, S.Pd</option>
                <option>Dicky Pratama, S.Pd</option>
                <option>Puji Astuti, S.Pd</option>
              </select>
            </div>
    </div>
    </div>
     

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Tampilkan</button>
    </div>  


    </form>
	</div>
  </div>
</div>
<!-- <script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script> -->
@endsection