@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('gurumapel.create') }}" class="btn btn-primary">Tambah Data Guru Mata Pelajaran</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Guru Mata Pelajaran</th>
						<th>Nama Guru Mata Pelajaran</th>
						<th>JK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($gurumapel as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->id_guru_mapel }}</td>
						<td>{{ $row->nama_guru_mapel }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>{{ $row->tempat_lahir }}</td>
						<td>{{ $row->tanggal_lahir }}</td>
						<td>{{ $row->agama }}</td>
						<td>{{ $row->alamat }}</td>
						<td>{{ $row->telepon }}</td>
						<td class="box-footer">
                			<a href="{{route('gurumapel.edit',$row->id_guru_mapel)}}" class="btn btn-success btn-xs"> Edit</a>
        				</td>
					</tr>
				@endforeach
				</tbody>
			</table>
            </div>
		</div>
	</div>
</div>
@endsection