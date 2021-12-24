<html>

<head>
    <title>Affine Cipher</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php
    include('../navbar.php');

    ?>
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
                                    <h3 class="text-center font-weight-light my-4 text-white">AFFINE CHIPER</h3>
                                </div>
                                <div class="card-body">
                                    <form action="enkAffine.php" method="get">
                                        <div class="form-floating mb-3">
                                            <label for="Plaintext" class="form-label">Plaintext</label>
                                            <input placeholder="Masukkan Huruf Kapital" class="form-control" name="kata"
                                                id="kata" rows="5" type="text" />
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="key1" id="kunci" type="text" />
                                            <label for="Kunci" class="form-label">Kunci <b>a</b></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="key2" id="kunci" type="text" />
                                            <label for="Kunci" class="form-label">Kunci <b>b</b></label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit" value="kirim">Enkrip</button>
                                            <button class="btn btn-dark" type="reset" value="ulangi">Ulangi</button>
                                        </div>
                                    </form>
                                    <br> <br>
                                    <form action="dekAffine.php" method="get">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="key1" id="kunci" type="text" />
                                            <label for="Kunci" class="form-label">Kunci <b>a</b></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="key2" id="kunci" type="text" />
                                            <label for="Kunci" class="form-label">Kunci <b>b</b></label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit"
                                                value="dekripsi">Dekrip</button>
                                            <button class="btn btn-dark" type="reset" value="ulangi">Ulangi</button>
                                        </div>
                                    </form>
                                </div>
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