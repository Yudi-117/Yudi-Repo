<!doctype html>
<html>
    <head>
        <title>Yudi Hermawan - TIP20.2 - Siliwangi</title>
    </head>
    <body>
        <h2 style="text-align: center; color:#666666;">Free Registration</h2>
        <br>
        <form action="YudiProcess.php" method="POST" name="input">
            <table align="center">
                <tr>
                    <td>Nama</td>
                    <td width="7px">: </td>
                    <td><input type="text" name="nama" size="30" maxlength="30"></td>
                </tr>
                
                <tr>
                    <td>Tanggal lahir</td>
                    <td width="7px">: </td>
                    <td>
                    <input type="number" min="1" max="31" name="tgl"> / 
                    <input type="text" name="bln" size="4" maxlength="9" minlength="3"> / 
                    <input type="text" name="thn" size="3" maxlength="4" min="1970" max="2025"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td width="7px"></td>
                    <td><textarea name="alamat" cols="20" rows="2"></textarea></td>
                </tr>

                <tr>
                    <td>Kota</td>
                    <td width="7px">:</td>
                    <td>
                        <input type="text" name="kota" size="30" maxlength="30">
                    </td>
                </tr>

                <tr>
                    <td>Pekerjaan</td>
                    <td width="7px">: </td>
                    <td>
                        <select name="kerja">
                            <option value="Siswa">Siswa</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Partime">Partime</option>
                            <option value="Fulltime">Fulltime</option>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td width="7px">: </td>
                    <td>
                    <input type="radio" name="status" value="Laki laki" checked> Laki laki &nbsp;
                    <input type="radio" name="status" value="Perempuan"> Perempuan
                    </tr>

                <tr>
                    <td style="text-align:top;">Hobby<br><br><br><br>
                </td>
                <td width="7px">: <br><br><br><br></td>
                <td>
                    <input type="checkbox" name="h1" value="Reading" > Reading<br>
                    <input type="checkbox" name="h2" value="Sport"> Sport<br>
                    <input type="checkbox" name="h3" value="Singing"> Singing<br>
                    <input type="checkbox" name="h4" value="Traveling"> Traveling</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td width="7px"></td>
                    <td>&nbsp;&nbsp;<input type="submit" name="input" value="Kirim">&nbsp;
                    <input type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    <br>
    </body>
</html>