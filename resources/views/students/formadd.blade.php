@extends('layout.main')
@section('content')
    <h3 class="mb-4">Form New Data Students</h3>
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

            <form method="POST" action="{{ url ('students/save') }}">
            @csrf
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control @error('txtfullname') invalid @enderror" name="fullname" placeholder="Ex: John Doe">
                @error('txtfullname')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Gender</label>
                <select class="form-control @error('txtgender') invalid @enderror" name="gender">
                    <option value="">-- Pilih salah satu --</option>
                    <option value="M">Laki-Laki</option>
                    <option value="F">Perempuan</option>
                </select>
                @error('txtgender')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control @error('txtemail') invalid @enderror" name="email" placeholder="Ex: johndoe@mail.com">
                @error('txtemail')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="number" class="form-control @error('txtphone') invalid @enderror" name="phone" placeholder="Ex: 089xxxxxxxxx">
                @error('txtphone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Address</label>
                <textarea class="form-control @error('txtemail') invalid @enderror" name="address"  rows="10"></textarea>
                @error('txtemail')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </div>
            </form>
        </div>
    </div>
@endsection
