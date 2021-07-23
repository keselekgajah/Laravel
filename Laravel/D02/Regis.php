
<h2>FORM REGISTRASI </h2>
<form action="simpan.php" method="POST">
<form action="upload.php" method="POST" enctype="multipart/form-data">
Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>
    <table>
        <tr>
                <td width="100">Nama</td>
                <td><input name="nama"></td>
        </tr>
        <tr>
                <td width="100">Email</td>
                <td><input name="email"></td>
        </tr>
        <tr>
                <td width="100">No.Telp</td>
                <td><input name="notelp"></td>
        </tr>
        <tr>
                <td width="100">Profile Picture</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                
        </tr>
        <tr>
                <td width="100">Dokumen</td>
                <td><input type="file" name="submit" value="Upload Image"></td>

        </tr>
    </table>

  <button>Submit</button>
</form>
<?php

// upload.php
print_r($_FILES['image']);
print_r($_POST['name']);


