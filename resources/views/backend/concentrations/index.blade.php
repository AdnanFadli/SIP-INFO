@extends('backend.master')
@section('content')
{{-- <section class="section"> --}}
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil </strong>{{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <h3 class="card-title">Daftar Konsetrasi</h3>
                    <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Konsentrasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($concentration as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button onclick="window.location='{{ url('concentration/'.$item->id) }}'"
                                        type="button" class="btn btn-sm btn-info" title="Edit Data">
                                        <i class="bx bxs-edit"></i>
                                    </button>
                                    <form onsubmit="return deleteData('{{ $item->name }}')"
                                        style="display: inline" method="POST"
                                        action="{{ url('concentration/'.$item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
    <script>
        function deleteData(name) {
            pesan = confirm('Yakin mau menghapus data ini ?');
            if (pesan) return true;
            else return false;
        }
    </script>
</section>

@endsection
