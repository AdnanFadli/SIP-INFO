@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Tambah Konsentrasi</h3>
                <div class="card-body">
                    <form method="POST" action="{{ url('concentration') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Konsentrasi</label>
                            <div class="col-sm-4">
                                <input type="text"
                                    class="form-control form-control-sm @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-mb-4">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
