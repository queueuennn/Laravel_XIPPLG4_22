@extends('layouts.admin')
@section('title', 'Detail Siswa')

@section('content')
<div class="container-fluid">
    
    <h1 style="color:#2e5e57; font-weight:700; margin-bottom:1.5rem;">
        Detail Siswa
    </h1>

    <div style="
        background:white; 
        border-radius:12px; 
        padding:1.5rem 2rem; 
        box-shadow:0 3px 10px rgba(0,0,0,0.05);
        margin-bottom:2rem;
    ">
        <table style="
            width:100%; 
            border-collapse:collapse; 
            margin-bottom:1.5rem;
            background:#f7fdfc;
            border-radius:8px;
            overflow:hidden;
        ">
            <tr>
                <th style="background:#2e5e57; color:white; padding:1rem; width:200px;">ID</th>
                <td style="padding:1rem;">{{ $student->id }}</td>
            </tr>

            <tr>
                <th style="background:#2e5e57; color:white; padding:1rem;">NIS</th>
                <td style="padding:1rem;">{{ $student->nis }}</td>
            </tr>

            <tr>
                <th style="background:#2e5e57; color:white; padding:1rem;">Nama Lengkap</th>
                <td style="padding:1rem;">{{ $student->nama_lengkap }}</td>
            </tr>

            <tr>
                <th style="background:#2e5e57; color:white; padding:1rem;">Jenis Kelamin</th>
                <td style="padding:1rem;">{{ $student->jenis_kelamin }}</td>
            </tr>

            <tr>
                <th style="background:#2e5e57; color:white; padding:1rem;">NISN</th>
                <td style="padding:1rem;">{{ $student->nisn }}</td>
            </tr>
        </table>

        <!-- Tombol -->
        <div style="display:flex; gap:10px;">
            <a href="{{ route('admin.students.index') }}" 
               style="background:#6c757d; color:white; padding:0.6rem 1.2rem; border-radius:8px; 
                      text-decoration:none; font-weight:600;">
                Kembali
            </a>

            <a href="{{ route('admin.students.edit', $student->id) }}" 
               style="background:#3a7f75; color:white; padding:0.6rem 1.2rem; border-radius:8px; 
                      text-decoration:none; font-weight:600;">
                Edit
            </a>
        </div>
    </div>

</div>
@endsection
