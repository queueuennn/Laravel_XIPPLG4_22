@extends('layouts.admin')

@section('title', 'Tambah Siswa')

@section('content')

<div style="margin-bottom:2rem;">
    <h1 style="color:#2e5e57; font-weight:700; margin-bottom:0.3rem;">Tambah Data Siswa</h1>
</div>

<div style="background:#f0f7f6; padding:2rem; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.05); max-width:650px;">
    <form action="{{ route('admin.students.store') }}" method="POST">
        @csrf

        {{-- NIS --}}
        <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-weight:600; margin-bottom:0.4rem; color:#2e5e57;">NIS</label>
            <input 
                type="text" 
                name="nis" 
                required
                style="width:100%; padding:0.7rem; border:1px solid #cbd7d6; border-radius:6px; background:white;">
        </div>

        {{-- Nama Lengkap --}}
        <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-weight:600; margin-bottom:0.4rem; color:#2e5e57;">Nama Lengkap</label>
            <input 
                type="text" 
                name="nama_lengkap" 
                required
                style="width:100%; padding:0.7rem; border:1px solid #cbd7d6; border-radius:6px; background:white;">
        </div>

        {{-- Jenis Kelamin --}}
        <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-weight:600; margin-bottom:0.4rem; color:#2e5e57;">Jenis Kelamin</label>
            <select 
                name="jenis_kelamin" 
                required
                style="width:100%; padding:0.7rem; border:1px solid #cbd7d6; border-radius:6px; background:white; cursor:pointer;">
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        {{-- NISN --}}
        <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-weight:600; margin-bottom:0.4rem; color:#2e5e57;">NISN</label>
            <input 
                type="text" 
                name="nisn" 
                required
                style="width:100%; padding:0.7rem; border:1px solid #cbd7d6; border-radius:6px; background:white;">
        </div>

        <div style="background:#f0f7f6; padding:2rem; border-radius:10px; 
            box-shadow:0 2px 6px rgba(0,0,0,0.05); 
            max-width:650px; 
            margin-bottom:4rem;">
        

        <button 
            type="submit" 
            style="background:#2e5e57; color:white; padding:0.7rem 1.5rem; border-radius:6px; border:none; font-weight:600; cursor:pointer; transition:0.3s;">
            Simpan
        </button>
    </form>
</div>

@endsection
