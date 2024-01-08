<div class="container ">
    <div class="card p-5 mx-2 my-3 bg-light " style="height:600px;">
        <h3 class="history-head">Riwayat</h3>
        <p class="text-muted">Detail monitoring & pemasukan</p>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Waktu</th>
                        <th scope="col">Kuat arus</th>
                        <th scope="col">Daya</th>
                        <th scope="col">Tegangan</th>
                        <th scope="col">Sisa KWh</th>
                        <th scope="col">Pemasukan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($link as $row) : ?>
                        <tr>
                            <td><?= $row->date; ?></td>
                            <td><?= $row->kuatarus; ?></td>
                            <td><?= $row->daya; ?></td>
                            <td><?= $row->tegangan; ?></td>
                            <td><?= $row->sisakwh; ?></td>
                            <td><?= $row->coin; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="pagination my-3 mb-5">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
        <a class="mx-auto" href="<?= base_url('dashboard');?>"><button type="button" class="mt-3 mx-auto btn tombol text-light">Back to Dashboard</button></a>
    </div>
</div>
    <div class="container">
        <div class="card p-5 mx-2 my-3 bg-light">
            <h3 class="history-head">Rekap Mingguan</h3>
            <p class="text-muted">Detail pemasukkan dari 7 hari terakhir</p>
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Total Saldo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($saldo7HariTerakhir as $key => $saldo): ?>
                    <tr>
                      <td><?php echo $key + 1; ?></td>
                      <td><?php echo $saldo->tanggal; ?></td>
                      <td><?php echo $saldo->total_saldo; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
<hr>