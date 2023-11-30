@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Edit Data Pengguna</h3>
                <div class="card-body">
                    <form method="POST" action="{{ url('lecturers/'.$lecturers->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="code" class="col-sm-4 col-form-label">NIP/NIDN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('code') is-invalid @enderror"
                                    id="code" name="code" value="{{ $lecturers->code }}">
                                @error('code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $lecturers->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="form-control form-control-sm @error('gender') is-invalid @enderror"
                                    id="gender" name="gender" value="{{ $lecturers->gender }}">
                                    <option>{{ $lecturers->gender }}</option>
                                <option value="Laki - laki" {{ old('gender') == 'Laki - laki' ? 'selected' : '' }}>Laki - Laki</option>
                                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone_number" class="col-sm-4 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number" value="{{ $lecturers->phone_number }}">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-4 col-form-label">E-mail</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $lecturers->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-4 col-form-label">Role</label>
                            <div class="col-sm-8">
                                <select id="role" class="custom-select form-control @error('role') is-invalid @enderror" name="role">
                                    <option>{{ $lecturers->role }}</option>
                                    <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>{{ __('User') }}</option>
                                    <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>{{ __('Admin') }}</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Update Password</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-updatePassword', $lecturers->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">New Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="********" autocomplete="new-password" >
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input id="password-confirm" name="password_confirmation" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="********" type="password" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-mb-4">
                                <button type="submit" class="btn btn-success">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
