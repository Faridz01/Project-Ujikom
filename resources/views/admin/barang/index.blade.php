 @extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @include('layouts/_flash') --}}
                <div class="card">
                    <div class="card-header">
                        Data Barang
                        <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Stok Barang</th>
                                        <th scope="col">Harga </th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($barangs as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$data->nama_barang}}</td>
                                            <td>{{$data->merk}}</td>
                                            <td>{{$data->stok_barang}}</td>
                                            <td>{{number_format($data->harga_barang,0,",",".")}}</td>
                                            <td>
                                                <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('barang.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('barang.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Show
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
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
    </div>
@endsection
