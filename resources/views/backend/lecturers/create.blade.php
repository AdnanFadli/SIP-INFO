@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Tambah Data Pengguna</h3>
                <div class="card-body">
                    <form method="POST" action="{{ url('lecturers') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="code" class="col-sm-2 col-form-label">NIP/NIDN</label>
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
                            <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
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
                            <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-4">
                                <select class="form-control form-control-sm @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') }}">
                                    <option value="" selected>--Pilih--</option>
                                    <option value="Laki - Laki" >Laki - Laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone_number" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-4">
                                <input type="text"
                                    class="form-control form-control-sm @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="text"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="status" class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-4">
                            <select class="form-select form-select-sm @error('status') is-invalid @enderror" id="status" name="status"
                              value="{{ old('status') }}">
                              <option value="" selected>--Pilih--</option>
                              <option value="on">Aktif</option>
                              <option value="off">Tidak Aktif</option>
                          </select>
                            @error('status')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-4">
                              <select class="form-select form-select-sm @error('role') is-invalid @enderror" id="role" name="role"
                                value="{{ old('role') }}">
                                <option value="" selected>--Pilih Role--</option>
                                <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>{{ __('User') }}</option>
                                <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>{{ __('Admin') }}</option>
                            </select>
                              @error('status')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                          </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input placeholder="********" type="password" autocomplete="new-password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-4">
                                <input placeholder="********" type="password" autocomplete="new-password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" value="{{ old('password') }}">
                                @error('password-confirm')
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
