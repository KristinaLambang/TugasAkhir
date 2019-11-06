@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('mapel.create') }}" class="btn btn-primary">Tambah Data Mata Pelajaran</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Mata Pelajaran</th>
						<th>Nama Mapel</th>
						<th>Nama Kelas</th>
						<th>Nama Pengajar</th>
						<th>KKM</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mapel as $row)
					<tr> 
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->id_mapel }}</td>
						<td>{{ $row->nama_mapel }}</td>
						<td>{{ $row->id_kelas }}</td>
						<td>{{ $row->id_guru_mapel }}</td>
						<td>{{ $row->kkm }}</td>
						<td class="box-footer">
                			<a href="{{route('mapel.edit',$row->id_mapel)}}" class="btn btn-success btn-xs"> Edit </a>
             			</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection