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
                       Menampilkan Data-Data Barang Keluar
                   </div>
                   <hr>
                   <div class="text-end mb-3">
                       <a class="btn btn-sm btn-primary" href="{{route('barangkeluar.api')}}">API Barang Keluar</a>
                       <a class="btn btn-sm btn-dark" href="{{route('barangkeluar.create')}}">Create Barang Keluar</a>
                   </div>
                   <div class="table-responsive">
                       <table class="table">
                           <thead class="table-dark">
                               <th>ID</th>
                               <th>ID Vendor</th>
                               <th>Nama Produk</th>
                               <th>Deskripsi</th>
                               <th>Harga</th>
                               <th>Jumlah</th>
                               <th>Action</th>
                           </thead>
                           <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($tampils as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->id_vendor}}</td>
                                <td>{{$data->nama_produk}}</td>
                                <td>{{$data->deskripsi}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->jumlah}}</td>
                                <td>
                                    <a href="{{route('barangkeluar.edit',$data->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                                    <form action="{{route('barangkeluar.delete',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tbody>
                            @endforeach
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
