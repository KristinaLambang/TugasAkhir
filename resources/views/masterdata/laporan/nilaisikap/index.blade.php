@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-body">
		<div class="box-header">
			<p><a href="{{ route('nilaisikap.create') }}" class="btn btn-primary">Tambah Nilai Sikap</a></p>
		</div>
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Spiritual</th>
						<th>Predikat</th>
						<th>Sosial</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($nilaisikap as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->siswa->nis }}</td>
						<td>{{ $row->siswa->nama_siswa }}</td>
						<td>{{ $row->nilai_spiritual }}</td>
						<td>
							
							@if( $row->nilai_spiritual >= 90 )
										A
								@elseif( $row->nilai_spiritual >= 80 && $row->nilai_spiritual <= 89)
									B
								@elseif( $row->nilai_spiritual >= 70 && $row->nilai_spiritual <= 79)
									C
								@elseif( $row->nilai_spiritual >= 60 && $row->nilai_spiritual <= 69)
									D
								@elseif( $row->nilai_spiritual >= 50 && $row->nilai_spiritual <= 59)
									E
							@endif
						
						</td>
						<td>{{ $row->nilai_sikap }}</td>
						<td>
							
							@if( $row->nilai_sikap >= 90 )
										A
								@elseif( $row->nilai_sikap >= 80 && $row->nilai_sikap <= 89)
									B
								@elseif( $row->nilai_sikap >= 70 && $row->nilai_sikap <= 79)
									C
								@elseif( $row->nilai_sikap >= 60 && $row->nilai_sikap <= 69)
									D
								@elseif( $row->nilai_sikap >= 50 && $row->nilai_sikap <= 59)
									E
							@endif
						
						</td>
						<td class="box-footer">
                			<a href="{{route('nilaisikap.edit',$row->id_nilai_sikap)}}" class="btn btn-success btn-xs"> Edit</a>
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
