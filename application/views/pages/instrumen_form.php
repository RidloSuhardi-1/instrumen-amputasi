<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h1 style="color: white;">INSTRUMEN RISIKO AMPUTASI KAKI DIABETIK</h1>
            </div>
            <div class="login-form">
                <?= form_open(site_url('proses_hasil')); ?>
                <div class="form-group">
                    <label for="skor_usia">Usia</label>

                    <select name="usia" id="skor_usia" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="0">[ 0 ] <?= htmlspecialchars('< 30 Tahun'); ?></option>
                            <option value="1">[ 1 ] <?= htmlspecialchars('30-50 Tahun'); ?></option>
                            <option value="2">[ 2 ] <?= htmlspecialchars('> 50 Tahun'); ?></option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_lama_dm">Lama DM</label>

                    <select name="lama_dm" id="skor_lama_dm" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="1">[ 1 ] <?= htmlspecialchars('< 2 Tahun'); ?></option>
                            <option value="2">[ 2 ] <?= htmlspecialchars('2-5 Tahun'); ?></option>
                            <option value="3">[ 3 ] <?= htmlspecialchars('> 5 Tahun'); ?></option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_crt">CRT</label>

                    <select name="crt" id="skor_crt" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="0">[ 0 ] <?= htmlspecialchars('< 2 Detik'); ?></option>
                            <option value="1">[ 1 ] <?= htmlspecialchars('> 2 Detik'); ?></option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_abi">ABI</label>

                    <select name="abi" id="skor_abi" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="0">[ 0 ] <?= htmlspecialchars('> 1'); ?></option>
                            <option value="1">[ 1 ] 0,6-1</option>
                            <option value="2">[ 2 ] <?= htmlspecialchars('< 0,5'); ?></option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_sensasi">Sensasi</label>

                    <select name="sensasi" id="skor_sensasi" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="1">[ 1 ] Kesemutan</option>
                            <option value="2">[ 2 ] Baal/Kebas</option>
                            <option value="3">[ 3 ] Mati Rasa</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_kadar_gula">Kadar Gula</label>

                    <select name="kadar_gula" id="skor_kadar_gula" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="0">[ 0 ] <?= htmlspecialchars('< 140 gr/dl'); ?></option>
                            <option value="1">[ 1 ] 140-200 gr/dl</option>
                            <option value="2">[ 2 ] <?= htmlspecialchars('> 200 gr/dl'); ?></option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skor_kondisi_kaki">Kondisi Kaki</label>

                    <select name="kondisi_kaki" id="skor_kondisi_kaki" class="form-control">
                        <optgroup label="Pilih Skor">
                            <option value="0">[ 0 ] Tidak ada Lesi tetapi ada Perubahan Bentuk</option>
                            <option value="1">[ 1 ] Lesi Permukaan Kulit</option>
                            <option value="2">[ 2 ] Luka Sampai Otot / Tendon</option>
                            <option value="10">[ 10 ] Luka Sampai Tulang / Gangrein</option>
                        </optgroup>
                    </select>
                </div>

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

                <button type="submit" name="submit" value="lihat_hasil" class="btn btn-primary btn-lg btn-block">Lihat Hasil</button>

                <?= form_close(); ?>

            </div>
        </div>
    </div>
</div>