<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br> <br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger rounded-pill float-end" onclick="return confirm('yakin');">hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success rounded-pill float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill float-end">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                </select>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
