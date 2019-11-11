@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('datanilai.create') }}" class="btn btn-primary">Tambah Data Nilai</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>Nama</th>
						<th>Nama Guru</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>UH 1</th>
						<th>UH 2</th>
						<th>UTS</th>
						<th>UAS</th>
						<th>Nilai Raport</th>
						<th>Predikat</th>
						<th>Nilai Keterampilan</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					@foreach($datanilai as $row)
						<td>{{$loop->iteration }}</td>
						<td>{{$row->siswa->nama_siswa}}</td>
						<td>{{$row->guru->nama_guru_mapel}}</td>
						<td>{{$row->tugas_1}}</td>
						<td>{{$row->tugas_2}}</td>
						<td>{{$row->ulangan_harian_1}}</td>
						<td>{{$row->ulangan_harian_2}}</td>
						<td>{{$row->uts}}</td>
						<td>{{$row->uas}}</td>
						<td>{{$row->nilai_raport}}</td>
						<td>
							
								@if( $row->nilai_raport > 90 )
										A
								@elseif( $row->nilai_raport >= 80 && $row->nilai_raport <= 89)
									B
								@elseif( $row->nilai_raport >= 70 && $row->nilai_raport <= 79)
									C
								@elseif( $row->nilai_raport >= 60 && $row->nilai_raport <= 69)
									D
								@elseif( $row->nilai_raport >= 50 && $row->nilai_raport <= 59)
									E
								@endif
						
						</td>
						<td>{{$row->nilai_keterampilan}}</td>
						<td>
							@if( $row->nilai_keterampilan > 90 )
										A
								@elseif( $row->nilai_keterampilan >= 80 && $row->nilai_keterampilan <= 89)
									B
								@elseif( $row->nilai_keterampilan >= 70 && $row->nilai_keterampilan <= 79)
									C
								@elseif( $row->nilai_keterampilan >= 60 && $row->nilai_keterampilan <= 69)
									D
								@elseif( $row->nilai_keterampilan >= 50 && $row->nilai_keterampilan <= 59)
									E
								@endif
						</td>
						<td class="box-footer">
                			<a href="/datanilai/{{$row->id_nilai}}/edit" class="btn btn-success btn-xs"> Edit </a>
             			</td>
					@endforeach
				</tbody>
			</table>
			</div>
            </div>
		</div>
	</div>
</div>
@endsection
