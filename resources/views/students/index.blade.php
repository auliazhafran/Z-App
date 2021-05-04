@extends('layout.base')
@section('title','Z-App : Mahasiswa')

@section('container')
<div class="container mt-5">
	<div class="" style="min-height: 85vh">
		<div class="col-md-5">
			<h6 class="display-3 text-info">Z-App</h6>
			<h2 class="text-info">The Ultimate Students Data Management</h2>
			<hr>
			Built with Laravel v8.5.16
			<!-- <br><br><br><br><br><br><br><br><br><br><br><br> -->
		</div>
		<div class="col-md-7 mx-0 px-1">
				<div class="card-body mx-0 px-0"><hr class="mx-2">
					<table class="table table-borderless ">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Nama lengkap</th>
					      <th scope="col" class="text-right"><a href="https://akuonline.host/Z-App/public/mahasiswa/tambah" class="btn btn-sm btn-success" style="border-radius: 15px"><i class="fas fa-plus fa-fw"></i> Tambah Mahasiswa </a></th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($students as $key => $student)
					    <tr>
					      <th scope="row">{{$key+1}}</th>
					      <td>{{$student->nama}}</td>
					      <td class="text-right"><a href="https://akuonline.host/Z-App/public/mahasiswa/{{$student->id}}" class="btn btn-sm btn-primary" style="border-radius: 15px">Detail <i class="fas fa-info-circle fa-fw"></i></a></td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
		</div>
	</div>
</div>
@endsection