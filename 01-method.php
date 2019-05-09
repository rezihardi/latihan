<form method="post" action="01-proses.php">
  <table border="1">
      <tr><td>NAMA</td><td> <input type="text" name="nama"> </td></tr>
      <tr><td>JENIS KELAMIN</td><td> <input type="radio" name="gender" value="PRIA">PRIA
                                     <input type="radio" name="gender" value="WANITA">WANITA
                           </td></tr>
      <tr><td>TANGGAL</td><td>
      <select name="tanggal_lahir">
      <?php
      for ($tanggal=1; $tanggal<=31  ; $tanggal++) {
        echo "<option value= '$tanggal'> TANGGAL $tanggal</option>";
      }
       ?>
      </select>
      <select name= "tahun_lahir">
      <?php
      for ($tahun=1945; $tahun <=2019 ; $tahun++) {
        echo "<option value= '$tahun'> $tahun</option>";
      }
       ?>
      </td></tr>
      <tr><td>AGAMA</td ><td>
              <select name="agama">
                      <option value="islam">ISLAM</option>
                      <option value="kristen">KRISTEN</option>
                      <option value="budha">BUDHA</option>
                      <option value="Hindu">HINDU</option>
              </select>
      </td></tr>
      <tr><td>HOBI</td><td><input type="checkbox" name="hobi[]" value="membaca">MEMBACA
                           <input type="checkbox" name="hobi[]" value="menulis">MENULIS
                  </td></tr>
      <tr><td>ALAMAT</td><td><textarea name="alamat"></textarea></td></tr>
      <tr><td colspan= "2"><button type="submit">DAFTAR</button></td></tr>
  </table>
</form>
