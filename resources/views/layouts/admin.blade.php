<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
  <style>
    /* Tambahan style khusus admin */
    .admin-container {
      display: flex;
      min-height: 100vh;
      background-color: #f8f9f8;
    }

    .sidebar {
      width: 250px;
      background-color: #2e5e57;
      color: white;
      padding: 2rem 1rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar .brand {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 2rem;
      text-align: center;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 0.75rem 1rem;
      border-radius: 6px;
      margin-bottom: 0.5rem;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #3a7f75;
    }

    .main-content {
      flex: 1;
      padding: 2rem;
      background-color: #fff;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
    }

    .admin-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .admin-header h1 {
      color: #2e5e57;
      font-weight: 700;
    }

    .admin-table {
      width: 100%;
      border-collapse: collapse;
      background-color: #f0f7f6;
      border-radius: 8px;
      overflow: hidden;
    }

    .admin-table th, .admin-table td {
      padding: 1rem;
      border-bottom: 1px solid #cbd7d6;
      text-align: left;
    }

    .admin-table th {
      background-color: #2e5e57;
      color: white;
    }

    .admin-table tr:hover {
      background-color: #e0f2f1;
    }

    .btn-add {
      background-color: #2e5e57;
      color: white;
      padding: 0.6rem 1.2rem;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .btn-add:hover {
      background-color: #3a7f75;
    }
  </style>
</head>
<body>

<div class="admin-container">
  <aside class="sidebar">
    <div>
      <div class="brand">🌿 Admin Panel</div>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Data Laporan</a>
      <a href="#">Pengguna</a>
      <a href="#">Edukasi</a>
      <a href="#">Galeri</a>
    </div>
    <a href="#" style="margin-top:auto;">Logout</a>
  </aside>

  <main class="main-content">
    <div class="admin-header">
      <h1>Dashboard</h1>
      <button class="btn-add">+ Tambah Data</button>
    </div>

    <table class="admin-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Peran</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Queena Aisya</td>
          <td>queena@example.com</td>
          <td>Admin</td>
          <td>
            <button class="btn-add" style="background:#3a7f75;">Edit</button>
            <button class="btn-add" style="background:#d9534f;">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
</div>

</body>
</html>
