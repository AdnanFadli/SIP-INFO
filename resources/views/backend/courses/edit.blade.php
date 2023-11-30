@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Edit Mata Kuliah</h3>
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-warning"
                        onclick="window.location='{{ url('courses') }}'">Kembali</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('courses/'.$courses->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="code" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm @error('code') is-invalid @enderror"
                                    id="code" name="code" value="{{ $courses->code }}">
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
                                    id="concentration_id" name="concentration_id" value="{{ $courses->concentration_id }}">
                                    @foreach ($concentration as $item)
                                        <option @if ($courses->concentration_id == $item->id) @endif value="{{ $item->id }}">{{ $item->name }}</option>
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
                            <label for="name" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $courses->name }}">
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
                                <input type="number" class="form-control form-control-sm @error('sks') is-invalid @enderror"
                                    id="sks" name="sks" value="{{ $courses->sks }}">
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
                                <input type="number" class="form-control form-control-sm @error('semester') is-invalid @enderror"
                                    id="semester" name="semester" value="{{ $courses->semester }}">
                                @error('semester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-mb-4">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
