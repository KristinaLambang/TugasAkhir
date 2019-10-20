@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('gurukelas.create') }}" class="btn btn-primary">Tambah Data Guru Kelas</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>Nama Guru</th>
						<th>Mata Pelajaran</th>
						<th>Nama Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($dataguru as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->guru->nama_guru_mapel }}</td>
						<td>{{ $row->guru->guru_mapel }}</td>
						<td>{{ $row->kelas->nama_kelas }}</td>
							<a href="{{route('gurukelas.edit',$row->id_guru_kelas)}}" class="btn btn-success btn-xs"> Edit</a>
						</td>
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
