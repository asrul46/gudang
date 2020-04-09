@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Gudang Sembako</div>
                <div> <a href="{{route('gudang.create') }}" class="btn btn-danger">Tambah Data</a></div>

                <div class="card-body">
                        <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Jumlah Barang</th>
                            <th>Supplier</th>
                            <th>Harga</th>
                            <th>Aksi</th>

                        </tr>
                        <?php  $no=1; ?>
                        @foreach ($gudang as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->merk}}</td>
                            <td>{{$item->jumlah_barang}}</td>
                            <td>{{$item->supplier}}</td>
                            <td>{{$item->harga}}</td> 
                            <td>
                                <a href="{{ route('gudang.edit',$item->id) }}" class="btn btn-info btn-sm">EDIT </a>
                                <form method="POST" action="{{ route('gudang.destroy',$item->id) }}">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm">DELETE </button>
                                </form>

                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach

                      
                        </table>
                </div>
            </div>
                {{$gudang->links()}}
        </div>
    </div>
</div>
@endsection
