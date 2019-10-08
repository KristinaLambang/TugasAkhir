@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Data Kelas</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Kelas</th>
						<th>Nama Kelas</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($kelas as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->id_kelas }}</td>
						<td>{{ $row->nama_kelas }}</td>
						<td>{{ $row->jurusan }}</td>
						<td class="box-footer">
                			<a href="{{route('kelas.edit',$row->id_kelas)}}" class="btn btn-success btn-xs"> Edit</a>
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
