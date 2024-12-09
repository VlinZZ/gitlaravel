@extends('ketua.admin') <!-- Sesuaikan dengan layout admin Anda -->

@section('content')
<div class="container">
    <h3>Edit User</h3>
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menentukan metode PUT untuk pengeditan -->

        <!-- Form input untuk Nama -->
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" class="form-control" required>
        </div>

        <!-- Form input untuk Email -->
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <!-- Form input untuk Password (Opsional) -->
        <div class="form-group">
            <label>Password (kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control" placeholder="New Password">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
