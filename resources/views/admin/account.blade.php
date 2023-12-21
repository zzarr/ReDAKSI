@extends('admin.layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Akun</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('DashboardAdmin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Akun</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">

                    <a href="{{ route('add_account') }}" class="btn btn-outline-primary"><i class="fa-solid fa-user-plus"></i></a>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Arsip
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>level user</th>
                                <th>jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>level user</th>
                                <th>jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($akun as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ str_repeat('*', strlen($item->password)) }}</td>
                                    <td>{{ $item->leveluser }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
<<<<<<< HEAD

                                            <button type="button" class="btn btn-outline-primary"><i
                                                    class="fa-solid fa-user-pen"></i></button>
                                            <button type="button" class="btn btn-outline-danger"><i
                                                    class="fa-solid fa-trash"></i></button>
=======
                                            <a href="{{ route('update_account',['iduser'=>$item->id]) }}">
                                                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-user-pen"></i></button></a>
                                            <form action="{{ route('delete_account', ['iduser' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                                
>>>>>>> 5d2d0daf63a82c4d9ba07fda67d6b0b1d3824fb9
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
