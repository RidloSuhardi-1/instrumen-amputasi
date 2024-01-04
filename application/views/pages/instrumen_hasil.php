<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h1 style="color: white;">INSTRUMEN RISIKO AMPUTASI KAKI DIABETIK</h1>
            </div>
            <div class="login-form">

                <!-- Bagian Level Risiko -->
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Level Risiko</strong>
                    </div>
                    <div class="card-body">
                        <h2 class="text-center mb-2"><?= ucwords((($keterangan === NULL) ? 'undefined' : $keterangan)); ?></h2>

                        <p class="card-text text-center">Total Skor : <?= ($total_skor === NULL) ? 'undefined' : $total_skor; ?></p>
                    </div>
                </div>

                <!-- Bagian Perhitungan Skor Risiko -->
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Perhitungan Skor Risiko</strong>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?= htmlspecialchars('Skor < 3 = Risiko Ringan'); ?> <br>
                            Skor 3-9 = Risiko Sedang <br>
                            <?= htmlspecialchars('Skor > 10 = Risiko Berat'); ?>
                        </p>
                    </div>
                </div>

                <!-- Bagian Informasi Detail Poin -->
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Detail Skor</strong>
                    </div>
                    <div class="card-body">
                        <ul class="mx-4">
                            <li>
                                <div class="row">
                                    <div class="col">
                                        USIA
                                    </div>
                                    <div class="col">
                                        <?= (($skor_usia === NULL) ? 'undefined' : $skor_usia . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        LAMA DM
                                    </div>
                                    <div class="col">
                                        <?= (($skor_lama_dm === NULL) ? 'undefined' : $skor_lama_dm . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        CRT
                                    </div>
                                    <div class="col">
                                        <?= (($skor_crt === NULL) ? 'undefined' : $skor_crt . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        ABI
                                    </div>
                                    <div class="col">
                                        <?= (($skor_abi === NULL) ? 'undefined' : $skor_abi . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        SENSASI
                                    </div>
                                    <div class="col">
                                        <?= (($skor_sensasi === NULL) ? 'undefined' : $skor_sensasi . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        KADAR GULA
                                    </div>
                                    <div class="col">
                                        <?= (($skor_kadar_gula === NULL) ? 'undefined' : $skor_kadar_gula . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col">
                                        KONDISI KAKI
                                    </div>
                                    <div class="col">
                                        <?= (($skor_kondisi_kaki === NULL) ? 'undefined' : $skor_kondisi_kaki . ' Poin'); ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <a href="<?= site_url(); ?>" class="btn btn-primary btn-lg btn-block">Print</a> -->
                <a href="<?= site_url(); ?>" class="btn btn-secondary btn-lg btn-block">Kembali</a>

            </div>
        </div>
    </div>
</div>