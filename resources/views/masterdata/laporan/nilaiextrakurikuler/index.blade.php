@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
	<div class="box-header">
			<p><a href="{{ route('nilaiextrakurikuler.create') }}" class="btn btn-primary">Tambah Nilai Extrakuriler</a></p>
	</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Nama Extrakurikuler</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($siswa as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $loop->nis }}</td>
						<td>{{ $row->nama_siswa }}</td>
						<td>{{ $row->nama_extrakurikuler }}</td>
						<td>
							@if( $row->nama_extrakurikuler > 90 )
										A
								@elseif( $row->nama_extrakurikuler >= 80 && $row->nama_extrakurikuler <= 89)
									B
								@elseif( $row->nama_extrakurikuler >= 70 && $row->nama_extrakurikuler <= 79)
									C
								@elseif( $row->nama_extrakurikuler >= 60 && $row->nama_extrakurikuler <= 69)
									D
								@elseif( $row->nama_extrakurikuler >= 50 && $row->nama_extrakurikuler <= 59)
									E
							@endif
						</td>
						<td class="box-footer">
                			<a href="{{route('nilaiextrakurikuler.edit',$row->id_nilai)}}" class="btn btn-success btn-xs"> Edit</a>
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
