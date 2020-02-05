@extends ('layout/main')

@section ('title','tambah data mahasiswa')

@section ('container')

         <div class="container">
             <div class="row">
             <div class="col-10">           
            <h1 class ="mt-4">form tambah mahasiswa </h1>
                
            <form methode="post" action="/mahasiswa">
            @csrf
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="nama">
  </div>
  <div class="form-group">
    <label for="nim">nim</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan nim" name="nim">
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="masukan jurusan" name="jurusan">
  </div> 
    <button type="submit" class="btn btn-primary">tambah data</button>
  </form>
        </div>
    </div>
</div>   
@endsection