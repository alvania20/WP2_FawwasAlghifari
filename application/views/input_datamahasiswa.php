<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('datamahasiswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                    <?= form_error('nama','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Nim</th>
                <td>:</td>
                <td>
                    <input type="text" name="nim" id="nim">
                    <?= form_error('nim','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
                    <?= form_error('kelas','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Tgl Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tgllahir" id="tgllahir">
                    <?= form_error('tgllahir','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Tmpt Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tmptlahir" id="tmptlahir">
                    <?= form_error('tmptlahir','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                    <?= form_error('alamat','<br> <span style="color :red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" id="pria" name="jnskelamin" value="Pria">
                    <label for="html">Pria</label>
                    <input type="radio" id="wanita" name="jnskelamin" value="Wanita">
                    <label for="html">Wanita</label>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="Pilih Agama...">Pilih Agama...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </td>
            </tr>
        </table>
        </form>
    </center>
    
</body>
</html>