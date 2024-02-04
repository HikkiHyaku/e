<!-- resources/views/users/create.blade.php -->
<h1>Create New User</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="nama_lengkap" placeholder="Full Name">
    <input type="text" name="alamat" placeholder="Address">
    <select name="role">
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
        <option value="peminjam">Peminjam</option>
    </select>
    <button type="submit">Create</button>
</form>
