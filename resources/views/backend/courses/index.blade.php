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
                    <h3 class="card-title">Daftar Mata Kuliah</h3>
                    <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Konsentrasi</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Dosen 1</th>
                                <th>Dosen 2</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->concentrations->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->sks }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>{{ $item->lecturers->name }}</td>
                                <td>{{ $item->lecturers->name }}</td>
                                <td>
                                    <button onclick="window.location='{{ url('courses/'.$item->id) }}'"
                                        type="button" class="btn btn-sm btn-info" title="Edit Data">
                                        <i class="bx bxs-edit"></i>
                                    </button>
                                    <form onsubmit="return deleteData('{{ $item->name }}')"
                                        style="display: inline" method="POST"
                                        action="{{ url('courses/'.$item->id) }}">
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
