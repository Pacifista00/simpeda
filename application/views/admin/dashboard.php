<?= $this->session->flashdata('message'); ?>
<div class="greeting bg-danger text-white-50 px-3 pb-5 pt-5">
    <div class="container px-3">
        <h3>Selamat Datang, <?= $user['username'] ;?>!</h3>
        <p>Have a nice day...</p>
    </div>
</div>
<?= $this->session->flashdata('messagelogin'); ?>
<div class="container-md">
    <div class="content-mid row ms-3">
        <div class="row">
            
            <div class="col-sm-12 rounded bg-light pb-4" style="">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="head-normal text-body-dark m-3 mt-4">
                            <h4>Detail</h4>
                            <p class="text-secondary">Hari ini</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row m-3">
                            <div class="saldo-left col-md-9 rounded bg-body-secondary p-2 mt-2">
                                <div class="head-normal">
                                    <h6 class="pt-1 ps-2 saldo-title text-dark">Saldo</h6>
                                    <h3 class="pb-1 ps-2 jml-saldo text-dark">Rp <span id="saldo">
                                        <?php 
                                    if($total_saldo){
                                        echo($total_saldo);
                                    }else{
                                        echo('0');
                                    } ;
                                    ?>
                                    </span></h3>
                                </div>
                            </div>
                            
                            <a href="<?= base_url('dashboard/ambil');?>" class="tombol text-decoration-none saldo-right border border-danger col-md-3 rounded p-2 mt-2" style="background-color:#FF0032; display: flex; justify-content: center; align-items: center;">
                                <div class="tarik head-normal">
                                        <i class="fs-2 fas fa-money-bill-wave text-white"></i>
                                        <p class="fs-2 text-white">Ambil Uang</p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="row m-2">
                    <div class="list-card col-sm-3">
                        <div class="card my-bg border-0 m-2 p-3" style="height:145px;">
                            <h5 class="text-light">Kuat Arus</h5>
                            <small id="kuatarus" class="number fs-2" ></small>
                        </div>
                    </div>
                    <div class="list-card col-sm-3">
                        <div class="card my-bg border-0 m-2 p-3" style="height:145px;">
                            <h5 class="text-light">Daya</h5>
                            <small class="number fs-2" id="daya"></small>
                            
                        </div>
                    </div>
                    <div class="list-card col-sm-3">
                        <div class="card my-bg border-0 m-2 p-3" style="height:145px;">
                            <h5 class="text-light">Tegangan</h5>
                            <small class="number fs-2" id="tegangan"></small>
                            
                        </div>
                    </div>
                    <div class="list-card col-sm-3">
                        <div class="card my-bg border-0 m-2 p-3" style="height:145px;">
                            <h5 class="text-light">Pemasukan</h5>
                            <small class="number fs-2" id="coin"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-md">
    <div class="card m-3 p-3 bg-light" style="">
        <h4 class="card-header text-center bg-transparent border-3 ">Status</h4>
          <div class="card-body text-dark">
            <h1 class="card-title text-center p-4 rounded-2 text-light" style="background-color:#FF0032;" id="status"></h1>
            <p class="card-text text-center" id="statusinfo"></p>
          </div>
          <h5 class="card-footer bg-transparent border-3 ">Sisa Kredit : <span id="sisakwh"></span> KWh</h5>
    </div>
</div>
    
