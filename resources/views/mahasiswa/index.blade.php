@extends ('layout/main')

@section ('title','mahasiswa')

@section ('container')

         <div class="container">
             <div class="row">
             <div class="col-10">           
            <h1 class ="mt-4">daftar mahasiswa </h1>
                <a href="/mahasiswa/create" class="btn btn-primary">Tambah data</a>

            <table class="table table-dark">
    <table class="table">
    <thead class ="thead-dark">
        <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Jurusan</th>
                <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <th scope="row">{{ $loop->iteration}}</th>
            <td>{{ $mhs->nama}}</td> 
            <td>{{ $mhs->nim}}</td> 
            <td>{{ $mhs->jurusan}}</td> 
            <td>
                <a href="" class ="badge badge-success">EDIT</a>
                <a href="" class ="badge badge-danger">DELETE</a>
                </td> 
        </tr>
        @endforeach
     </tbody>
        </div>
    </div>
</div>   
@endsection