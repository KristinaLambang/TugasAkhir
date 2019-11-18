@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<h3>Raport</h3>
	<div class="form-group">
	
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
	
	<div class="box-header">
		<p><a href="{{ route('absensi.create') }}" class="btn btn-success">Cetak</a></p>
	</div>

	<div class="box-body">
		<table id="example1" class="table table-bordered">
			<thead>
				<tr> 
					<th>No</th>
					<th>NIS</th>
					<th>Nama Siswa</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($siswa as $row)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $row->siswa->nis }}</td>
					<td>{{ $row->siswa->nama_siswa }}</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	</div>
	</div>
	</div>
</div>
@endsection
