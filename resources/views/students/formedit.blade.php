@extends('layout.main')
@section('content')
    <h3 class="mb-4">Form Edit Students</h3>
    <div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
            kembali
        </button>
    </div>
    <div class="card-body">
        <div class="alert alert-danger">
            <ul>
                {{--<li>The txid field is required.</li>
                <li>The txtfullname is required.</li>
                <li>The txtgender is required.</li>--}}
            </ul>
        </div>
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        <form method="POST" action="{{ url('students/update/' . $txtnis) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control-plaintext"
                        id="nis" name="nis" value="{{ $txtnis }}" readonly>
                </div>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control @error('txtfullname') is-invalid @enderror" name="fullname" value="{{ $txtfullname}}">
                @error('txtfullname')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Gender</label>
                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                    <option value="">-- Pilih salah satu --</option>
                    <option value="M">Laki-Laki</option>
                    <option value="F">Perempuan</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="txtemail" id="txtemail" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" value="{{ $txtemail }}">
                @error('txtemail')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="number" class="form-control @error('txtphone') is-invalid @enderror" name="phone" placeholder="Ex: 089xxxxxxxxx">
                @error('txtphone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Address</label>
                <textarea class="form-control @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10">{{ $txtaddress }}</textarea>
                @error('txtaddress')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </div>
        </form>
