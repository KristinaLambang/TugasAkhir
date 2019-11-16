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
						<th>Nilai Extrakurikuler</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($nilaiextrakurikuler as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->siswa->nis }}</td>
						<td>{{ $row->siswa->nama_siswa }}</td>
						<td>{{ $row->nama_extrakurikuler }}</td>
						<td>{{ $row->nilai_extrakurikuler }}</td>
						<td>
							@if( $row->nilai_extrakurikuler >= 90 )
										A
								@elseif( $row->nilai_extrakurikuler >= 80 && $row->nilai_extrakurikuler <= 89)
									B
								@elseif( $row->nilai_extrakurikuler >= 70 && $row->nilai_extrakurikuler <= 79)
									C
								@elseif( $row->nilai_extrakurikuler >= 60 && $row->nilai_extrakurikuler <= 69)
									D
								@elseif( $row->nilai_extrakurikuler >= 50 && $row->nilai_extrakurikuler <= 59)
									E
							@endif
						</td>
						<td class="box-footer">
                <a href="{{route('nilaiextrakurikuler.edit', $row->id_nilai_extrakurikuler)}}" class="btn btn-success btn-xs"> Edit</a>
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
