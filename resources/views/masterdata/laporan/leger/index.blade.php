@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
			<h3>Leger</h3>
	<div class="form-group">
	
	<div class="row">
	<div class="col-sm-2">
		<label>Tahun Ajaran</label>
	</div>
		<div class="col-sm-10">
			<select name="tahun_ajaran" class="form-control" id="tahun_ajaran">
				<option value="2018">2018/2019</option>
				<option value="2019">2019/2020</option>
			</select>
        </div>
    </div>
	</div>

	<div class="box-body">
			<table id="tabel-kelas" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Kelas</th>
						<th>Nama Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
            </div>
		</div>

	</div>
	</div>
	</div>
</div>
 @section('javascript')
    <script type="text/javascript">
    $(document).ready(function() {
        var a= 0;
        var arrKelas = JSON.parse('{!!$kelas!!}');

        let optionValue = $('#tahun_ajaran').val();

        let filteredTahunAjaran = arrKelas.filter((kelas) => {
			console.log(kelas.created_at.substring(0, 4), optionValue)
            return kelas.created_at.substring(0, 4) === optionValue
        });

		console.log(filteredTahunAjaran)

        filteredTahunAjaran.forEach((kelas, i) => {
            $('#tabel-kelas tbody').append(`<tr>
                <td>${i+1}</td>
                <td>${kelas.id_kelas}</td>
                <td>${kelas.nama_kelas}</td>
                <td>
					<a href="/preview_leger/${kelas.id_kelas}" class="btn btn-success btn-xs" target="blank"> Cetak</a>
                </td>
            </tr>`);
        });


        $('#tahun_ajaran').change(function() {
            optionValue = $('#tahun_ajaran').val();
            $('#tabel-kelas tbody').empty();

			filteredTahunAjaran = arrKelas.filter((kelas) => {
				console.log(kelas.created_at.substring(0, 4), optionValue)
				return kelas.created_at.substring(0, 4) === optionValue
			});

			filteredTahunAjaran.forEach((kelas, i) => {
				$('#tabel-kelas tbody').append(`<tr>
					<td>${i+1}</td>
					<td>${kelas.id_kelas}</td>
					<td>${kelas.nama_kelas}</td>
					<td>
						<a href="/preview_leger/${kelas.id_kelas}" class="btn btn-success btn-xs" target="blank"> Cetak</a>
					</td>
				</tr>`);
			});
        });
    });
    </script>
@endsection
@endsection
