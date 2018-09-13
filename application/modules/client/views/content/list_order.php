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
                                    	<th>Nama Paket</th>
                                    	<th>Harga Paket</th>
                                    	<th>Nama Tema</th>
                                        <th>Harga Tema</th>
                                        <th>Domain</th>
                                        <th>Harga Domain</th>
                                        <th>Harga Unik</th>
                                    	<th>Total</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($listOrder as $key) {
                                                ?>
                                                    <tr>
                                                        <td><?=$key['nama_paket']?></td>
                                                        <td>Rp. <?=number_format($key['price_paket'])?></td>
                                                        <td><?=$key['nama_tema']?></td>
                                                        <td>Rp. <?=number_format($key['price_tema'])?></td>
                                                        <td><?=$key['domain']?></td>
                                                        <td>Rp. <?=number_format($key['price_domain'])?></td>
                                                        <td>Rp. <?=number_format($key['price_unique'])?></td>
                                                        <td>Rp. <?=number_format($key['price_paket']+$key['price_tema']+$key['price_domain']+$key['price_unique'])?></td>
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