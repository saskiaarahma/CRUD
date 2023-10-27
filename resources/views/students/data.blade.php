@extends('layout.main')

@section('content')
<h3>Data Students</h3>
<div class="card">
    <div class="card-header">
        <a href="{{url('students/add')}}" class="btn btn-sm btn-primary">
            <i class="fas fa-plus-circle"></i> Add New Data
        </a>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $row) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nis}}</td>
                        <td>{{ $row->fullname}}</td>
                        <td>
                            @if ($row->gender == "f")
                                Female
                            @else
                                Male
                            @endif
                        </td>
                        <td>{{ $row->address}}</td>
                        <td>{{ $row->emailaddress}}</td>
                        <td>{{ $row->phone}}</td>
                        <td>
                            <a href="{{ url('/students/edit/' . $row->nis) }}"><i class="fas fa-edit"></i></a>
                            <form onsubmit="return deleteData('{{ $row->fullname }}')"style="display: inline" method="POST" action=" {{ url('students/'.
                            $row->idstudents) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(name){
            pesan = confirm(`yakin data students dengan nama ${name} ini dihapus ?`);
            if(pesan) return true;
            else return false;
        }
    </script>
@endsection
