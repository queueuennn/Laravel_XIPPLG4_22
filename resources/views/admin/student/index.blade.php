@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="admin-header" style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
    <h1 style="color:#2e5e57; font-weight:700;">Data Siswa</h1>
    <a href="{{ route('admin.students.create') }}" class="btn-add" 
        style="background-color:#2e5e57; color:white; padding:0.6rem 1.2rem; border-radius:6px; font-weight:600;">
        + Tambah Siswa
    </a>
</div>

<table class="admin-table" style="width:100%; border-collapse:collapse; background:#f0f7f6; border-radius:8px; overflow:hidden;">
    <thead>
        <tr>
            <th style="background:#2e5e57; color:white; padding:1rem;">ID</th>
            <th style="background:#2e5e57; color:white; padding:1rem;">NIS</th>
            <th style="background:#2e5e57; color:white; padding:1rem;">Nama Lengkap</th>
            <th style="background:#2e5e57; color:white; padding:1rem;">Jenis Kelamin</th>
            <th style="background:#2e5e57; color:white; padding:1rem;">NISN</th>
            <th style="background:#2e5e57; color:white; padding:1rem;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($students as $student)
        <tr style="border-bottom:1px solid #cbd7d6;">
            <td style="padding:1rem;">{{ $student->id }}</td>
            <td style="padding:1rem;">{{ $student->nis }}</td>
            <td style="padding:1rem;">{{ $student->nama_lengkap }}</td>
            <td style="padding:1rem;">{{ $student->jenis_kelamin }}</td>
            <td style="padding:1rem;">{{ $student->nisn }}</td>
            <td style="padding:1rem;">
                <a href="{{ route('admin.students.edit', $student->id) }}" 
                   class="btn-edit" 
                   style="background:#3a7f75; color:white; padding:0.4rem 0.8rem; border-radius:6px; margin-right:4px;">
                    Edit
                </a>

                <form action="{{ route('admin.students.destroy', $student->id) }}" 
                      method="POST" class="d-inline" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button 
                        class="btn-delete" 
                        style="background:#d9534f; color:white; padding:0.4rem 0.8rem; border-radius:6px; border:none;">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="padding:1.5rem; text-align:center; color:#6c757d;">
                Belum ada data siswa.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
