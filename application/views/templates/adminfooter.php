</div>
<footer class="py-3 bg-light mt-auto" style="border-top:5px solid #6F1AB6;">
    <div class="container-fluid px-4">
        <div class="d-flex flex-column align-items-center justify-content-between small">
            <div class="text-muted">&copy; 2023 Copyright (20040146) | This website is made with <i class="fa fa-heart"></i></div>
            <div>
                <a href="https://www.facebook.com/blong.z.54" class="text-decoration-none text-muted"><i class="fab fa-facebook me-1"></i>Email</a>
                <a href="https://www.instagram.com/adsmdr_/" class="text-decoration-none text-muted"><i class="fab fa-instagram ms-2 me-1"></i>Instagram</a>
            </div>
        </div>
    </div>
</footer>
</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="<?= base_url('assets/js/main.js'); ?>"></script>

<script>
    $(document).ready(function() {
            // Fungsi untuk memperbarui tampilan dengan data baru
            function updateView(data) {
                var s = $('#sisakwh');
                var t = $('#tegangan');
                var d = $('#daya');
                var k = $('#kuatarus');
                var c = $('#coin');
                var stat = $('#status');
                var statinfo = $('#statusinfo');
            
                if (data && data.length > 0) {
                    
                    var dataObject = data[0]; // Mengambil objek data pertama dari array
                
                    // Tampilkan data di dalam elemen dengan ID "data-container"
                    k.html(dataObject.kuatarus+'<h6 class="text-light mt-1">Ampere</h6>');
                    d.html(dataObject.daya+'<h6 class="text-light mt-1">Watt</h6>');
                    c.html(dataObject.coin +'<h6 class="text-light mt-1">Rupiah</h6>');
                    t.html(dataObject.tegangan +'<h6 class="text-light mt-1">Volt</h6>');
                    s.html(dataObject.sisakwh);
                    if(dataObject.coin==0){
                        stat.html('STAND BY');
                        statinfo.html('Tidak ada koin masuk.');
                    }else if(dataObject.coin!==0 && dataObject.kuatarus==0){
                        stat.html('SIAP DIGUNAKAN');
                        statinfo.html('Pembayaran diterima. Menunggu penggunaan.');
                    }else{
                        stat.html('SEDANG DIGUNAKAN');
                        statinfo.html('Stasiun pengisian daya sedang digunakan pengguna.');
                    }
                }
            }

            // Fungsi untuk mengambil data dari server dan memperbarui tampilan
            function fetchData() {
                $.ajax({
                    url: 'dashboard/get_data', // Ganti dengan URL endpoint Anda
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        updateView(response.data); // Panggil fungsi updateView dengan data baru
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }

            // Panggil fungsi fetchData secara berkala dengan interval 1 detik
            setInterval(fetchData, 2000);
        });
</script>
