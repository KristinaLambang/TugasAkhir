@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('guruwalas.create') }}" class="btn btn-primary">Tambah Data Guru Wali Kelas</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Guru Walas</th>
						<th>Nama Guru</th>
						<th>JK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Nama Kelas</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Telepon</th>
					</tr>
				</thead> 
				<tbody>
				@foreach($guruwalas as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->id_guru_walas }}</td>
						<td>{{ $row->nama_guru_walas }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>{{ $row->tempat_lahir }}</td>
						<td>{{ $row->tanggal_lahir }}</td>
						<td>{{ $row->id_kelas }}</td>
						<td>{{ $row->agama }}</td>
						<td>{{ $row->telepon }}</td>
						<td class="box-footer">
                			<a href="{{route('guruwalas.edit',$row->id_guru_walas)}}" class="btn btn-success btn-xs"> Edit</a>
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