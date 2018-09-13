        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <button class="btn btn-primary btn-lg">TAMBAH ORDER</button>
                            <div class="header">
                                <h4 class="title">List Order</h4>
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="listOrdeTable">
                                    <thead>
                                    	<th>ID ORDER</th>
                                    	<th>TOTAL HARGA</th>
                                    	<th>STATUS PEMBAYARAN</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($listPayments as $key) {
                                                ?>
                                                    <tr>
                                                        <td><?=$key['id_order']?></td>
                                                        <td>Rp. <?=number_format($key['price_paket']+$key['price_tema']+$key['price_domain']+$key['price_unique'])?></td>
                                                        <td><?=$key['verifikasi']==0?'Belum Terbayar':'Terbayar'?></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>