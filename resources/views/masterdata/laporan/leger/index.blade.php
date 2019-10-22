@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>  
						<th rowspan="2"><p style="top: -50px">No</p></th>
						<th rowspan="2"><p style="top: -50px">NIS</p></th>
						<th rowspan="2"><p style="top: -50px">Nama Siswa</p></th>
						<th rowspan="2"><p style="top: -50px">JK</p></th>
						<th colspan="8">Nilai Pengetahuan</th>

						<th colspan="8">Nilai Keterampilan</th>

						<th rowspan="2"><p style="top: -50px">Jumlah</p></th>
						<th rowspan="2"><p style="top: -50px">Jumlah Nilai</p></th>
						<th rowspan="2"><p style="top: -50px">Ranking</p></th>
					</tr>
					<tr>
						<td>Mtk</td>
						<td>Bindo</td>
						<td>Bing</td>
						<td>Agm</td>
						<td>Pkn</td>
						<td>Sjrh</td>
						<td>IPA</td>
						<td>IPS</td>
						<td>Mtk</td>
						<td>Bindo</td>
						<td>Bing</td>
						<td>Agm</td>
						<td>Pkn</td>
						<td>Sjrh</td>
						<td>IPA</td>
						<td>IPS</td>
					</tr>
				</thead>
				<tbody>
				@foreach ($laporanleger as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->nis }}</td>
						<td>{{ $row->nama_siswa }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>80</td>
						<td>90</td>
						<td>70</td>
						<td>78</td>
						<td>90</td>
						<td>76</td>
						<td>80</td>
						<td>70</td>
						<td>jumlah</td>
						<td>jumlah_nilai</td>
						<td>ranking</td>
						<td class="box-footer">
                			<a href="{{route('laporanleger.edit',$row->id_laporan_leger)}}" class="btn btn-success btn-xs"> Edit</a>
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
