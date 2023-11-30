@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Tambah Mata Kuliah</h3>
                <div class="card-body">
                    <form method="POST" action="{{ url('courses') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="code" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
                            <div class="col-sm-4">
                                <input type="text"
                                    class="form-control form-control-sm @error('code') is-invalid @enderror"
                                    id="code" name="code" value="{{ old('code') }}">
                                @error('code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="concentration_id" class="col-sm-2 col-form-label">Konsentrasi</label>
                            <div class="col-sm-4">
                                <select class="form-control form-control-sm @error('concentration_id') is-invalid @enderror"
                                    id="concentration_id" name="concentration_id" value="{{ old('concentration_id') }}">
                                    <option label="--Pilih Konsentrasi--"></option>
                                    @foreach ($concentration as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('concentration_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name Mata Kuliah</label>
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
                            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                            <div class="col-sm-4">
                                <input type="number"
                                    class="form-control form-control-sm @error('sks') is-invalid @enderror"
                                    id="sks" name="sks" value="{{ old('sks') }}">
                                @error('sks')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-4">
                                <input type="number"
                                    class="form-control form-control-sm @error('semester') is-invalid @enderror"
                                    id="semester" name="semester" value="{{ old('semester') }}">
                                @error('semester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lecturer_id" class="col-sm-2 col-form-label">Dosen 1</label>
                            <div class="col-sm-4">
                                <select class="form-control form-control-sm @error('lecturer_id') is-invalid @enderror"
                                    id="lecturer_id" name="lecturer_id" value="{{ old('lecturer_id') }}">
                                    <option label="--Pilih Dosen 1--"></option>
                                    @foreach ($lecturer as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('concentration_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lecturer_id" class="col-sm-2 col-form-label">Dosen 2</label>
                            <div class="col-sm-4">
                                <select class="form-control form-control-sm @error('lecturer_id') is-invalid @enderror"
                                    id="lecturer_id" name="lecturer_id" value="{{ old('lecturer_id') }}">
                                    <option label="--Pilih Dosen 2--"></option>
                                    @foreach ($lecturer as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('concentration_id')
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
