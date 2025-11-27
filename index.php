<?php
// data.php berisi array data lengkap
include 'data.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Pendidikan UNESA - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <h1>RS Pendidikan UNESA</h1>
                <p>Rumah Sakit Universitas Negeri Surabaya</p>
            </div>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#layanan">Layanan Ringkas</a></li>
                <li><a href="#rawat-inap-detail">Rawat Inap</a></li>
                <li><a href="#rawat-jalan-detail">Rawat Jalan</a></li>
                <li><a href="#jadwal">Jadwal Praktik</a></li>
                <li><a href="#kebijakan">Tata Tertib</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero" id="beranda">
        <div class="hero-image-container">
             <img src="https://www.unesa.ac.id/images/foto-19-06-2024-09-20-30-2766.png" alt="Gedung RS Pendidikan UNESA" class="rs-image">
        </div>
       
        <div class="hero-text-overlay">
            <h2>Selamat Datang di RS Pendidikan UNESA</h2>
            <p>Rumah Sakit Universitas Negeri Surabaya (RS Unesa) merupakan salah satu fasilitas kesehatan yang terletak di lingkungan akademis, menyediakan layanan medis yang berkualitas untuk masyarakat umum dan civitas akademika. Rumah sakit ini dirancang untuk mendukung pendidikan dan penelitian di bidang kesehatan dengan teknologi medis terkini dan tenaga medis profesional.</p>
        </div>
    </section>
    
    <hr>

    <div class="container">
        <section class="section vision-mission" id="visi-misi">
            <h2>Visi & Misi</h2>
            <div>
                <h3>Visi</h3>
                <p>"Menjadi **Rumah Sakit Pendidikan yang unggul** dalam pelayanan kesehatan, pendidikan, dan penelitian **berbasis teknologi** serta **berintegritas tinggi**."</p>
                
                <h3 style="margin-top: 2rem;">Misi</h3>
                <ul>
                    <li>Menyelenggarakan pelayanan kesehatan yang profesional, bermutu, aman, dan berorientasi pada **keselamatan pasien**.</li>
                    <li>Mengembangkan rumah sakit sebagai wahana **pendidikan dan penelitian** bagi mahasiswa dan tenaga kesehatan secara berkesinambungan.</li>
                    <li>Meningkatkan kompetensi sumber daya manusia melalui pelatihan, sertifikasi, dan pengembangan profesional berkelanjutan.</li>
                    <li>Mengoptimalkan pemanfaatan **teknologi kesehatan dan sistem informasi** untuk mendukung efektivitas dan efisiensi layanan.</li>
                    <li>Menerapkan **tata kelola rumah sakit yang transparan, akuntabel, dan berintegritas** sesuai standar nasional maupun internasional.</li>
                    <li>Memperkuat kolaborasi dengan institusi pemerintah, akademik, dan masyarakat dalam rangka peningkatan mutu layanan kesehatan.</li>
                </ul>
            </div>
        </section>

        <hr>

        <div class="emergency">
            <h3>IGD 24 Jam</h3>
            <p>📞 (021) 2525257</p>
            <p style="font-size: 1rem; margin-top: 1rem;">Layanan Gawat Darurat dengan dokter bersertifikat ATLS/ACLS/PTC dan perawat bersertifikat GELS.</p>
        </div>

        <hr>

        <section class="section" id="layanan">
            <h2>Layanan Utama RSP UNESA</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>🏥 Instalasi Rawat Inap</h3>
                    <p>Fasilitas rawat inap dengan berbagai kelas: VIP, Presidential Suite, President, Kelas 1, 2, dan 3 dengan fasilitas lengkap dan nyaman.</p>
                    <a href="#rawat-inap-detail">Lihat Kelas & Fasilitas →</a>
                </div>

                <div class="service-card">
                    <h3>👨‍⚕️ Instalasi Rawat Jalan</h3>
                    <p>Poliklinik lengkap: Poli Umum, Gigi, KIA, Gizi, Fisioterapi, Penyakit Dalam, THT, Mata, Kulit, dan Psikologi.</p>
                    <a href="#rawat-jalan-detail">Lihat Jenis Poli →</a>
                </div>

                <div class="service-card">
                    <h3>🔬 Laboratorium Sentral</h3>
                    <p>Pemeriksaan lengkap: Hematologi, Kimia Klinik, Urinalisis, Imunologi, Mikrobiologi, dan Bank Darah dengan peralatan modern.</p>
                    <a href="#laboratorium-detail">Selengkapnya →</a>
                </div>

                <div class="service-card">
                    <h3>🩺 Layanan Medical Check Up (MCU)</h3>
                    <p>MCU umum, mahasiswa baru, pegawai, pra-kerja, dan pemeriksaan kesehatan tahunan dengan paket lengkap.</p>
                </div>
            </div>
        </section>

        <hr>

        <section class="section" id="rawat-inap-detail">
            <h2>Rincian Instalasi Rawat Inap</h2>
            <?php foreach ($rawat_inap_details as $kelas => $data): ?>
                <div class="rawat-inap-card">
                    <h3>Kelas **<?php echo $kelas; ?>** (<?php echo $data['tempat_tidur']; ?> Tempat Tidur)</h3>
                    <div class="rawat-inap-content">
                        <div class="rawat-inap-col">
                            <h4>Sarana Fisik</h4>
                            <ul>
                                <li>Ruangan berukuran: <?php echo $data['sarana']['ukuran']; ?></li>
                                <li>Kamar Mandi: <?php echo $data['sarana']['kamar_mandi']; ?></li>
                                <li>Ventilasi dan pencahayaan optimal.</li>
                            </ul>
                        </div>
                        <div class="rawat-inap-col">
                            <h4>Fasilitas Utama</h4>
                            <ul>
                                <?php foreach ($data['fasilitas'] as $fasilitas): ?>
                                    <li><?php echo $fasilitas; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="rawat-inap-col">
                            <h4>Layanan (Service)</h4>
                            <ul>
                                <?php foreach ($data['service'] as $service): ?>
                                    <li><?php echo $service; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        
        <hr>

        <section class="section" id="rawat-jalan-detail">
            <h2>Jenis Pelayanan Poliklinik (Rawat Jalan)</h2>
            <div class="layanan-detail-grid">
                <?php foreach ($poli_details as $poli => $layanan): ?>
                    <div class="layanan-card">
                        <h3><?php echo $poli; ?></h3>
                        <ul>
                            <?php foreach ($layanan as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <h3 style="margin-top: 3rem; color: #1e3c72; border-bottom: 2px solid #ccc; padding-bottom: 5px;">Fasilitas Penunjang Rawat Jalan</h3>
            <ul class="fasilitas-penunjang-list">
                <li>**Laboratorium Klinik:** Hematologi, Kimia darah, Urinalisis, Pemeriksaan NAPZA.</li>
                <li>**Radiologi:** X-Ray (Foto Rontgen), USG (Jika tersedia).</li>
                <li>**Farmasi Rawat Jalan:** Peracikan obat, Konseling obat, Obat generik & bermerek.</li>
                <li>**Rekam Medis:** Sistem manual/elektronik, Penyimpanan data standar.</li>
            </ul>
        </section>

        <hr>
        
        <section class="section" id="laboratorium-detail">
            <h2>Layanan Laboratorium Sentral RSP UNESA</h2>
            <p>Semua pemeriksaan dilakukan oleh tenaga analis kesehatan yang kompeten dengan standar mutu rumah sakit pendidikan.</p>
            <div class="layanan-detail-grid">
                <?php foreach ($lab_services as $kategori => $tes): ?>
                    <div class="layanan-card">
                        <h3><?php echo $kategori; ?></h3>
                        <ul>
                            <?php foreach ($tes as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <hr>

        <section class="section" id="pendaftaran">
            <h2>Alur Pendaftaran Pasien Baru</h2>
            <div class="alur-pendaftaran">
                <h3 style="color: #1e3c72; margin-bottom: 1rem;">Proses Pendaftaran Online</h3>
                <ol>
                    <li>**Isi Pendaftaran** - Klik tombol "Mulai Daftar".</li>
                    <li>**Data Diri** - Lengkapi formulir (Nama, NIK/Paspor, Alamat, Status Pasien: Umum/BPJS/Asuransi lain).</li>
                    <li>**Riwayat Medis Singkat** - Isi Keluhan Utama, Riwayat Penyakit, Alergi Obat, dan Obat yang sedang dikonsumsi.</li>
                    <li>**Pemilihan Layanan** - Pilih Poli atau layanan yang dibutuhkan.</li>
                    <li>**Pilih Dokter & Jadwal** - Tentukan Nama Dokter, Spesialisasi, Tanggal & Jam kunjungan.</li>
                    <li>**Verifikasi & Upload Dokumen** - Unggah Foto KTP, Kartu BPJS/Asuransi lainnya, dan Surat Rujukan (jika diperlukan).</li>
                    <li>**Konfirmasi** - Dapatkan Nomor Antrian, QR Code Pendaftaran, dan Waktu Kedatangan.</li>
                </ol>
                <a href="pendaftaran.php" class="cta-button" style="margin-top: 1rem;">Mulai Daftar (Simulasi)</a>
            </div>
        </section>

        <hr>

        <section class="section" id="jadwal">
            <h2>Jadwal Praktik Dokter & Tenaga Kesehatan</h2>

            <h3>Jadwal Praktik Dokter RSP UNESA</h3>
            <div class="table-container">
                <table class="jadwal-tabel">
                    <thead>
                        <tr>
                            <th>Nama Dokter</th>
                            <th>Spesialisasi</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($jadwal_dokter as $dokter): ?>
                            <tr>
                                <td><?php echo $dokter['nama']; ?></td>
                                <td><?php echo $dokter['spesialisasi']; ?></td>
                                <td><?php echo $dokter['senin']; ?></td>
                                <td><?php echo $dokter['selasa']; ?></td>
                                <td><?php echo $dokter['rabu']; ?></td>
                                <td><?php echo $dokter['kamis']; ?></td>
                                <td><?php echo $dokter['jumat']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <h3 style="margin-top: 3rem;">Daftar Perawat Penanggung Jawab Ruangan</h3>
             <div class="table-container">
                <table class="jadwal-tabel">
                    <thead>
                        <tr>
                            <th>Nama Perawat</th>
                            <th>Shift</th>
                            <th>Penanggung Jawab Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                         foreach ($perawat_jaga as $perawat): ?>
                            <tr>
                                <td><?php echo $perawat['nama']; ?></td>
                                <td><?php echo $perawat['shift']; ?></td>
                                <td><?php echo $perawat['ruangan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <hr>

        <section class="section" id="kebijakan">
            <h2>Kebijakan dan Tata Tertib RSP UNESA</h2>
            <div class="kebijakan-grid">
                <div class="kebijakan-card">
                    <h3>A. Kebersihan dan Kenyamanan</h3>
                    <ul>
                        <li>Pasien, keluarga, dan pengunjung wajib menjaga kebersihan lingkungan rumah sakit.</li>
                        <li>Anak usia di bawah **13 tahun tidak diperbolehkan masuk** ruang rawat inap demi keamanan dan pencegahan infeksi.</li>
                        <li>Dilarang membawa hewan peliharaan ke area rumah sakit.</li>
                        <li>Dilarang makan atau minum di koridor ruang rawat inap.</li>
                    </ul>
                </div>
                <div class="kebijakan-card">
                    <h3>C. Penunggu dan Pengunjung</h3>
                    <ul>
                        <li>Di luar jam kunjung, pasien hanya boleh ditunggu oleh **satu orang penunggu** menggunakan kartu penunggu.</li>
                        <li>**Jam Kunjung Resmi**: 11.00-13.00 WIB dan 17.00-19.00 WIB.</li>
                        <li>Pengunjung wajib memakai masker disposable saat memasuki area rawat inap.</li>
                        <li>Tidak diperbolehkan membawa balon, bunga beraroma kuat, atau barang yang berpotensi memicu alergi pasien lain.</li>
                    </ul>
                </div>
                <div class="kebijakan-card">
                    <h3>D. Makanan dan Gizi</h3>
                    <ul>
                        <li>Makanan pasien diberikan **tiga kali sehari** (06.00 WIB, 11.00 WIB, 16.00 WIB).</li>
                        <li>Dilarang membawa makanan dari luar **tanpa persetujuan perawat/dokter**.</li>
                        <li>Keluarga tidak diperbolehkan menyimpan makanan di kamar pasien.</li>
                    </ul>
                </div>
                <div class="kebijakan-card">
                    <h3>F. Komunikasi dan Informasi</h3>
                    <ul>
                        <li>Untuk informasi terkait kondisi pasien atau keperluan lainnya, keluarga dapat menghubungi nomor bangsal: **(021) 2525257**.</li>
                        <li>Seluruh pengunjung wajib mengikuti arahan petugas keamanan, perawat, dan seluruh staf rumah sakit.</li>
                    </ul>
                </div>
            </div>
        </section>

        <hr>

        <section class="section" id="kontak">
            <h2>Kontak Kami</h2>
            <div class="kontak-info">
                <div>
                    <h3>📍 Alamat</h3>
                    <p>Rumah Sakit Pendidikan Universitas Negeri Surabaya</p>
                    <p>Jl. Ketintang, Surabaya</p>
                </div>
                <div>
                    <h3>📞 Telepon Darurat</h3>
                    <p>IGD 24 Jam: **(021) 2525257**</p>
                    <p>Informasi Bangsal: (021) 2525257</p>
                </div>
                <div>
                    <h3>⏰ Jam Kunjung</h3>
                    <p>Pagi: **11.00 - 13.00 WIB**</p>
                    <p>Sore: **17.00 - 19.00 WIB**</p>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <h3>RS Pendidikan UNESA</h3>
            <p>Rumah Sakit Universitas Negeri Surabaya</p>
            <p style="margin-top: 1rem;">© 2025 RS Pendidikan UNESA. All rights reserved.</p>
            <div class="social-media">
                <a href="#">Facebook</a> |
                <a href="#">Instagram</a> |
                <a href="#">Twitter</a>
            </div>
            <p class="footer-note">Kontak Darurat & Hotline | Pendaftaran Online | Tim Medis</p>
        </div>
    </footer>
</body>
</html>