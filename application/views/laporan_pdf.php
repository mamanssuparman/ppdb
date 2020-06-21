<html>
    <title>

    </title>
    <body>
        <table>
            <?php 
                foreach ($data_cetak->result_array() as $showcetak):
            ?>
            <tr>
                <td colspan="4"><h3> Panitia PPDB SMK Negeri 3 Banjar </h3></td>
            </tr>
            <tr>
                <td colspan="4"><h2>Bukti Kartu Pendaftaran Online PPDB SMK Negeri 3 Banjar</h2></td>
            </tr>
            <tr>
                <td>No Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['no_pendaftaran'] ?></td>
            </tr>
            <tr>
                <td>Waktu Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['tanggal_daftar'] ?></td>
            </tr>
            <tr>
                <td>Nama </td><td>:</td><td colspan="2"><?php echo $showcetak['nama_lengkap'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td><td>:</td><td colspan="2"><?php echo $showcetak['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah </td><td>:</td><td colspan="2"><?php echo $showcetak['asal_sekolah'] ?></td>
            </tr>
            <tr>
                <td>Tahun Lulus </td><td>:</td><td colspan="2"><?php echo $showcetak['tahun_lulus'] ?></td>
            </tr>
            <tr>
                <td>Jalur Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['judul'] ?></td>
            </tr>
            <tr>
                <td>Pilihan Jurusan 1 </td><td>:</td><td colspan="2"><?php echo $showcetak['nama_jurusan'] ?></td>
            </tr>
            <tr>
                <td colspan="4">Simpan Bukti Kartu Pendafataran ini dengan baik, sebagai bukti bahwa anda telah mendaftar di SMK Negeri 3 Banjar</td>
            </tr>
        </table>
        <table border="1" align="center">
            <tr>
                <td width="200">Tanggal </td><td width="200">Paraf Panitia</td>
            </tr>
            <tr>
                <td height="50"></td><td></td>
            </tr>
        </table>
        Disimpan oleh Peserta <br>
        <hr>
        <br>
        Untuk di berikan kepada panitia.
        <table>
        <tr>
                <td>No Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['no_pendaftaran'] ?></td>
            </tr>
            <tr>
                <td>Waktu Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['tanggal_daftar'] ?></td>
            </tr>
            <tr>
                <td>Nama </td><td>:</td><td colspan="2"><?php echo $showcetak['nama_lengkap'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td><td>:</td><td colspan="2"><?php echo $showcetak['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah </td><td>:</td><td colspan="2"><?php echo $showcetak['asal_sekolah'] ?></td>
            </tr>
            <tr>
                <td>Tahun Lulus </td><td>:</td><td colspan="2"><?php echo $showcetak['tahun_lulus'] ?></td>
            </tr>
            <tr>
                <td>Jalur Pendaftaran </td><td>:</td><td colspan="2"><?php echo $showcetak['judul'] ?></td>
            </tr>
            <tr>
                <td>Pilihan Jurusan 1 </td><td>:</td><td colspan="2"><?php echo $showcetak['nama_jurusan'] ?></td>
            </tr>
            <?php 
                endforeach;
            ?>
            <tr>
                <td valign="top">Bukti Kelengkapan Berkas</td>
                <td colspan="3"> 
                    <input type="checkbox"> Pas Photo 3 x 4 <br>
                    <input type="checkbox"> FC Ijazah <br>
                    <input type="checkbox"> FC SKHUN <br> 
                    <input type="checkbox"> FC KK <br>
                    <input type="checkbox"> FC Akta Kelahiran <br>
                    <input type="checkbox"> FC KTP Orang Tua <br>
                    <input type="checkbox"> FC KKS <br>
                    <input type="checkbox"> FC KIS <br>
                    <input type="checkbox"> FC KIP <br>
                    <input type="checkbox"> FC KKH <br>
                    <input type="checkbox"> SKKB <br>
                </td>
            </tr>
        </table>
    </body>
</html>