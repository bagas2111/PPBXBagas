<?php
include "header.php";
?>
            <h1>Form Informasi</h1>
            <div class="form1">
                <form action="https://formsubmit.co/bagaskoro21.novian@gmail.com" method="POST">
                    Nama    :<input type="text" name="nama" id="nama" required><br><br>
                    Alamat  :<input type="text" name="alt" id="alt" required><br><br>
                    kota    : <select name="kota" id="kota">
                        <option value="banten">banten</option>
                        <option value="jakarta">jakarta</option>
                        <option value="balikpapan">balikpapan</option>
                        <option value="bandung">bandung</option>
                    </select><br><br>
                    email   :<input type="text" type="email" name="eml" id="eml"  required><br><br>
                    Komentar:<input type="text" name="kmtr" id="kmtr" required><br><br>
                    <input type="hidden" name="_next" value="http://localhost/tugas/contactus.html">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="submit" value="kirim">
                    <input type="reset" value="batal">
                </form>
            </div>
            
        </div>
    </div>
    <?php
    include "footer.php"
    ?>
</body>
</html>