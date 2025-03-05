<!-- resources/views/admin/user.blade.php -->
@extends('ketua.admin')

@section('content')
<div class="container">
    <h3>Daftar Akun User</h3>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-bordered" border="10px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->email }}</td>
                    <td>********</td> <!-- Jangan tampilkan password asli -->
                    <td>
                        <form action="{{ route('user.toggle-status', $user->id) }}" method="POST" style="display: inline;"
                            onsubmit="return confirm('{{ $user->status === 'aktif' ? 'Apakah Anda yakin ingin mengnonaktifkan status ini?' : 'Apakah Anda yakin ingin mengaktifkan status ini?' }}')">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm {{ $user->status === 'aktif' ? 'btn-success' : 'btn-danger' }}">
                                {{ $user->status === 'aktif' ? 'Aktif' : 'Tidak Aktif' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
