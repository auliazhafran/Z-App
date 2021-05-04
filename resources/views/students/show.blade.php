@extends('layout.base')
@section('title','Z-App : Informasi Mahasiswa')

@section('container')
<div class="container mt-5">
	<div class="" style="min-height: 85vh">
		<div class="col-md-5">
			<h6 class="display-3 text-info">Z-App</h6>
			<h2 class="text-info">Student's Information</h2>
			
		</div>
		<div class="col-md-7 mx-0 px-0">
			<div class="card-body "><hr class="">
				<h5 class="card-title">{{$student->nama}}</h5>
			    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6><br>
			    <dl class="row">
				  <dt class="col-sm-3">NIM</dt>
				  <dd class="col-sm-9">{{$student->nim}}</dd>

				  <dt class="col-sm-3">Program Studi</dt>
				  <dd class="col-sm-9">{{$student->prodi}}</dd>

				  <dt class="col-sm-3">Fakultas</dt>
				  <dd class="col-sm-9">{{$student->fakultas}}</dd>

				  <dt class="col-sm-3">Universitas</dt>
				  <dd class="col-sm-9">{{$student->universitas}}</dd>
				 </dl><hr>
				 <a href="https://akuonline.host/Z-App/public/" class="btn btn-secondary mr-5 btn-sm" style="border-radius: 15px"><i class="fas fa-chevron-left"></i> Back</a>
				 <a href="https://akuonline.host/Z-App/public/mahasiswa/{{$student->id}}/edit" class="btn btn-warning ml-5 btn-sm" style="border-radius: 15px" ><i class="fas fa-edit" ></i> Edit</a>
				 <form class="d-inline" action="https://akuonline.host/Z-App/public/mahasiswa/{{$student->id}}" method="post">
					@method('delete')
                    @csrf
					<button class="btn btn-danger btn-sm" style="border-radius: 15px"><i class="fas fa-trash" ></i> Delete</button>
				 </form>
			</div>
		</div>
	</div>
</div>
@endsection