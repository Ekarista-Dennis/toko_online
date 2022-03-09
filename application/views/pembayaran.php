<div class="container-fluid">
    <div class="row">
        <dix class="col-md-2">
        </dix>
        <dix class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                    $grand_total=0;
                    if($keranjang = $this->cart->contents())
                    {
                        foreach($keranjang as $item)
                        {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanja Anda Rp.".number_format($grand_total,0,',','.')."</h4>";
                    
                ?>
            </div><br><br>
            <h3>Input Data Pengiriman Dan Metode Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Masukan nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Masukan alamat Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" placeholder="Masukan nomor telepon Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select  class="form-control">
                            <option>Si Cepat</option>
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>POS Indonesia</option>
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select class="form-control">
                            <option>COD</option>
                            <option>Gopay</option>
                            <option>OVO</option>
                            <option>Dana</option>
                            <option>BCA</option>
                            <option>BNI</option>
                            <option>MANDIRI</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
        </form>
        
        <?php 
            }else{
                echo "Keranjang Belanja Anda Masih Kosong";
            }
        ?>
        </dix>

         
                        
        <dix class="col-md-2"> 
        </dix>
    </div>
</div>