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
                    <h3 class="card-title">Daftar Pengguna</h3>
                    <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP/NIDN</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Validasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lecturer as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->status == 'off')
                                        <span class="badge rounded-pill bg-warning text-dark">{{ $item->status }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-info text-dark">{{ $item->status }}</span>
                                    @endif
                                        {{-- {{ $item->status }} --}}
                                </td>
                                <td>
                                    @if ($item->status == 'off')
                                        <form action="{{ route('user-updateStatus',$item->id) }}" method="POST">
                                        @csrf
                                        @method("PUT")
                                        <input type="hidden" name="status" value="on">
                                        <button type="submit" class="btn btn-info rounded-circle">On</button>
                                        </form>
                                    @else
                                        <form action="{{ route('user-updateStatus',$item->id) }}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <input type="hidden" name="status" value="off">
                                            <button type="submit" class="btn btn-danger rounded-circle">Off</button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <button onclick="window.location='{{ url('lecturers/'.$item->id) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                      <i class="bx bxs-edit"></i>
                                    </button>
                                    <form onsubmit="return deleteData('{{ $item->name }}')" style="display: inline" method="POST" action="{{ url('lecturers/'.$item->id) }}">
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
