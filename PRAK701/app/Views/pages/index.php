<!DOCTYPE html>
<html>

<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .notif {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
        }
    </style>

    <script>
        <?php if ($loginError) : ?>
            $(document).ready(function() {
                $('#loginModal').modal('show');
            });
        <?php endif; ?>
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand text-white" href="#">Daftar Buku</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php if ($loggedIn) : ?>
                        <button type="button" class="btn btn-danger" id="logoutButton">
                            Logout
                        </button>
                    <?php else : ?>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">
                            Login
                        </button>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <center>Selamat Datang <?= session()->get('username') ?></center>
                    </h1>
                    <?php if ($loggedIn) : ?>
                        <center><button type="button" class="btn align-items-end btn-primary" data-toggle="modal" data-target="#tambahBukuModal">Tambah Data</button></center>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div id="notification" class="mt-3 notification"></div>
                    <?php endif; ?>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <?php if ($loggedIn) : ?>
                                    <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($buku)) : ?>
                                <?php foreach ($buku as $index => $item) : ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo $item->judul; ?></td>
                                        <td><?php echo $item->penulis; ?></td>
                                        <td><?php echo $item->penerbit; ?></td>
                                        <td><?php echo $item->tahun_terbit; ?></td>
                                        <?php if ($loggedIn) : ?>
                                            <td>
                                                <button class="btn btn-primary edit-button" style="width: 30%;" data-id="<?php echo $item->id; ?>" data-toggle="modal" data-target="#editBukuModal">Edit</button>
                                                <button class="btn btn-danger delete-button" style="width: 30%;" data-id="<?php echo $item->id; ?>">Hapus</button>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada<?php if (!$loggedIn) : ?><br>Login untuk menambahkan data<?php endif; ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <footer class="bg-info text-center text-lg-start mt-auto">
        <div class="text-center p-3 text-white">
            Henny Kartika
        </div>
    </footer>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login/proses" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            <div class="invalid-feedback">Username harus diisi.</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="invalid-feedback">Password harus diisi.</div>
                        </div>
                        <?php if ($loginError) : ?>
                            <div class="alert alert-danger" role="alert">
                                Username atau password salah.
                            </div>
                        <?php endif; ?>
                        <button type="submit" class="btn w-100 btn-primary">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data Buku -->
    <div class="modal fade" id="tambahBukuModal" tabindex="-1" role="dialog" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahBukuModalLabel">Tambah Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/buku/tambah" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="tahunTerbit">Tahun Terbit</label>
                            <input type="number" class="form-control" id="tahunTerbit" name="tahunTerbit" required min="1800" max="2023">
                            <small class="form-text text-muted">Tahun Terbit harus di antara 1800 dan 2023.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data Buku -->
    <div class="modal fade" id="editBukuModal" tabindex="-1" role="dialog" aria-labelledby="editBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBukuModalLabel">Edit Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editBukuForm" action="" method="POST">
                        <div class="form-group">
                            <label for="editJudul">Judul</label>
                            <input type="text" class="form-control" id="editJudul" name="editJudul" required>
                        </div>
                        <div class="form-group">
                            <label for="editPenulis">Penulis</label>
                            <input type="text" class="form-control" id="editPenulis" name="editPenulis" required>
                        </div>
                        <div class="form-group">
                            <label for="editPenerbit">Penerbit</label>
                            <input type="text" class="form-control" id="editPenerbit" name="editPenerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="editTahunTerbit">Tahun Terbit</label>
                            <input type="number" class="form-control" id="editTahunTerbit" name="editTahunTerbit" required min="1800" max="2023">
                            <small class="form-text text-muted">Tahun Terbit harus di antara 1800 dan 2023.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#logoutButton').click(function() {
                window.location.href = '/logout';
            });

            $('.edit-button').click(function() {
                var id = $(this).data('id');
                var url = '/buku/edit/' + id;

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: "JSON",
                    success: function(data) {
                        $('#editJudul').val(data.judul);
                        $('#editPenulis').val(data.penulis);
                        $('#editPenerbit').val(data.penerbit);
                        $('#editTahunTerbit').val(data.tahun_terbit);
                        $('#editBukuForm').attr('action', '/buku/update/' + data.id);
                    },
                    error: function(xhr, status, error) {
                        alert('Terjadi kesalahan. Mohon coba lagi.');
                    }
                });
            });

            $('.delete-button').click(function() {
                var id = $(this).data('id');
                var url = '/buku/hapus/' + id;
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    window.location.href = url;
                }
            });

            <?php if (session()->getFlashdata('success')) : ?>
                showNotification('<?php echo session()->getFlashdata('success'); ?>', 'success');
            <?php endif; ?>
        });

        function showNotification(message, type) {
            $('#notification').html('<div class="notification notif"><center>' + message + '</center></div>');
            setTimeout(function() {
                $('#notification').html('');
            }, 3000);
        }
    </script>

</body>

</html>