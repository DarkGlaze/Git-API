<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Create Data Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
   <div class="container py-4">
       <div class="row">
           <div class="card w-100 shadow">
               <div class="card-body">
                   <div class="card-title text-center fw-bold">
                       Tambah Barang Keluar
                   </div>
                   <hr>
                   <div class="text-end">
                    <a class="btn btn-sm btn-dark" href="{{route('barangkeluar.index')}}">List Barang Keluar</a>
                    </div>
                   <form action="{{route('barangkeluar.post')}}" method="POST">
                    @csrf
                       <div class="form-group ">
                           <label for="nama" class="block">ID Vendor :</label>
                           <input type="text" id="id_vendor" name="id_vendor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tipe" class="block">Nama Produk :</label>
                            <input type="text" id="nama_produk" name="nama_produk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="block">Deskripsi :</label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="block">Harga :</label>
                            <input type="text" id="harga" name="harga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="block">Jumlah :</label>
                            <input type="text" id="jumlah" name="jumlah" class="form-control">
                        </div>
                        <div class="text-end py-3">
                            <button type="submit" class="btn btn-sm btn-success">Create</button>
                        </div>
                    </form>
               </div>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
