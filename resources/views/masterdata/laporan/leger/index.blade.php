@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
			<h3>Leger</h3>
	<div class="form-group">
	
	<div class="row">
	<div class="col-sm-2">
		<label>Tahun Ajaran</label>
	</div>
		<div class="col-sm-10">
			<select name="tahun_ajaran" class="form-control" id="tahun_ajaran">
				<option>2018/2019</option>
				<option>2019/2020</option>
			</select>
        </div>
    </div>
	</div>
	<div class="box-header">
		<p><a href="{{ route('absensi.create') }}" class="btn btn-success">Cetak</a></p>
	</div>

	<div class="box-body">
		<table id="example1" class="table table-bordered">
			<thead>
				<tr> 
					<th>No</th>
					<th>Nama Kelas</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

	</div>
	</div>
	</div>
</div>
@endsection
