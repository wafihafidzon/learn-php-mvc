<div class="container mt-5">
    <div class="row">
        <h3>Menu</h3>
        <table class="table">
            <thead class="table-primary text-center">
                <tr>
                    <td scope="col">No</td>
                    <td scope="col">Menu</td>
                    <td scope="col">Jumlah</td>
                    <td scope="col">Harga</td>
                </tr>
            </thead>
            <?php 
            $nomor = 1;
            foreach ($data['mhs'] as $mhs) : ?>
                <tr class="text-center">
                    <td scope="col"><?= @$nomor++ ?></td>
                    <td scope="col"><?= @$mhs['menu'] ?></td>
                    <td scope="col"><?= @$mhs['kategori'] ?></td>
                    <td scope="col">Rp. <?= @$mhs['harga'] ?> / Porsi</td>
                </tr>
                <?php endforeach ?>
                
            </table>
    </div>
</div>