<div id="layoutSidenav_content">
    <main>
        <!-- <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
        </div> -->

        <div class="container-fluid px-4" style="margin: 80px 10px 400px 10px;">
            <h1 class="h3 mb-4 text-gray-800">
                <?= $judul; ?>
            </h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $user['nama']; ?>
                            </h5>
                            <p class="card-text">
                                <?= $user['email']; ?>
                            </p>
                            <p class="card-text"><small class="text-muted">Anggota Sejak
                                    <?= date('d F Y', $user['date_created']); ?>
                                </small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
</div>


