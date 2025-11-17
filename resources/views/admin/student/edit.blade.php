@extends('layouts.admin')
@section('title', 'Edit Data Siswa')

@section('content')

<h2 style="color:#2e5e57; font-weight:700; margin-bottom:25px;">
    Edit Data Siswa
</h2>

<style>
    .btn-update {
        background: #2e5e57;
        color: white;
        padding: 10px 24px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-update:hover {
        background: #3a7f75;
    }

    .btn-back {
        background: #4b4f52;
        color: white;
        padding: 10px 24px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-back:hover {
        background: #3d4042;
    }
</style>


<div class="admin-form-card">
    <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- NIS -->
        <div class="form-group">
            <label class="admin-label">NIS</label>
            <input type="text" name="nis" value="{{ $student->nis }}" class="admin-input" required>
        </div>

        <!-- Nama Lengkap -->
        <div class="form-group">
            <label class="admin-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $student->nama_lengkap }}" class="admin-input" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group">
            <label class="admin-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="admin-input" required>
                <option value="L" {{ $student->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $student->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <!-- NISN -->
        <div class="form-group">
            <label class="admin-label">NISN</label>
            <input type="text" name="nisn" value="{{ $student->nisn }}" class="admin-input" required>
        </div>

        <!-- Tombol -->
        <div style="margin-top:25px; display:flex; gap:10px;">
    <button type="submit" class="btn-update">Update</button>
    <a href="{{ route('admin.students.index') }}" class="btn-back">Kembali</a>
</div>

    </form>
</div>

@endsection
