<html>
<head>
  <title>Caesar Cipher</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div id="layoutAuthentication">
        <style type="text/css">
            #layoutAuthentication {
                background-image: url("r.jpg");
                background-size: cover;
            }
        </style>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">ENKRIPSI</h3>
                                </div>
                                <div class="box box-info">
                                  <?php
                                  if(isset($_POST['submit1'])){
                                    
                                    function Cipher($ch, $key)
                                    {
                                      if (!ctype_alpha($ch))
                                      return $ch;

                                      $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                                      return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                                    }

                                    function Encipher($input, $key)
                                    {
                                      $output = "";

                                      $inputArr = str_split($input);
                                      foreach ($inputArr as $ch)
                                      $output .= Cipher($ch, $key);

                                      return $output;
                                    }

                                    function Decipher($input, $key)
                                    {
                                      return Encipher($input, 26 - $key);
                                    }
                                    
                                  } else if(isset($_POST['submit2'])) {

                                    function Cipher($ch, $key)
                                    {
                                      if (!ctype_alpha($ch))
                                      return $ch;

                                      $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                                      return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                                    }

                                    function Encipher($input, $key)
                                    {
                                      $output = "";

                                      $inputArr = str_split($input);
                                      foreach ($inputArr as $ch)
                                      $output .= Cipher($ch, $key);

                                      return $output;
                                    }

                                    function Decipher($input, $key)
                                    {
                                      return Encipher($input, 26 - $key);
                                    }
                                  }

                                  ?>
                                <div class="card-body">
                                    <form name="enkripsi" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                                            oninput="setCustomValidity('')" type="text" class="form-control" rows="2" placeholder="Isikan teks disini"/>
                                                <label for="plain" class="form-label">Plaintext</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" title="Pilih Key." required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                                            oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Masukan Key"/>
                                                <label for="metode" class="form-label">Key</label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit" name="submit1" value="Enkrip">Enkrip</button>
                                            <button class="btn btn-primary" type="submit" name="submit2" value="Dekrip">Dekrip</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">HASIL ENKRIPSI</h3>
                                </div>
                                <div class="card-body">
                                  <label>Hasil Enkripsi</label>
                                    <table class="table table-bordered">
                                      <tr style="background-color:#6FACD5">
                                        <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                                            if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                                      </tr>
                                    </table>
                                  <label>Teks Asli</label>
                                    <table class="table table-bordered">
                                      <tr style="background-color:#6FACD5">
                                        <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Decipher(Encipher($_POST['plain'], $_POST['metode']),$_POST['metode']);} 
                                            if (isset($_POST['submit2'])){ echo Encipher(Decipher($_POST['plain'], $_POST['metode']),$_POST['metode']);}?></b></td>
                                      </tr>
                                    </table>
                                  <label>Key</label>
                                    <table class="table table-bordered">
                                      <tr style="background-color:#6FACD5">
                                        <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                                        if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
                                      </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
  </div>
</body>
</html>






