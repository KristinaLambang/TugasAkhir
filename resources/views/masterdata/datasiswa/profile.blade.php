@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a>Profile Siswa</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead> 
					<td>
						<th>NIS</th>
						<th>Nama Kelas</th>
						<th>Nama Siswa</th>
						<th>JK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Nama Ayah</th>
						<th>Pekerjaan</th>
						<th>Telepon</th>
                        <th>Email</th>
                        <th>Password</th>
				    </td>
				</thead>
				<tbody>
				@foreach($siswa as $row)
					<tr>
						<td>{{ $siswa->nama_siswa}}</td>
						<td>{{ $row->nis }}</td>
						<td>{{ $row->kelas->nama_kelas }}</td>
						<td>{{ $row->nama_siswa }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>{{ $row->tempat_lahir }}</td>
						<td>{{ $row->tanggal_lahir }}</td>
						<td>{{ $row->agama }}</td>
						<td>{{ $row->alamat }}</td>
						<td>{{ $row->nama_ayah }}</td>
						<td>{{ $row->pekerjaan }}</td>
                        <td>{{ $row->telepon }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->password }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
            </div>
		</div>
	</div>
</div>
@endsection