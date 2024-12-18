<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- CUSTOM JS -->
    <script src="./js/app.js" defer></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Menu -->
        <div class="menu-dashboard open">
            <div class="top-menu">
                <div class="logo">
                    <img src="logo.jpg" alt="Logo" style="width: 50px; border-radius: 50%;">
                    <span>DASHBOARD</span>
                </div>
                <div class="toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
            <div class="menu">
                <div class="enlace">
                    <i class="bx bx-user"></i>
                    <span>Hai, User</span>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Go To
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="message.php">Message Cryptography</a></li>
                            <li><a class="dropdown-item" href="#">Image Steganography</a></li>
                            <li><a class="dropdown-item" href="#">File Encrypt</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Konten Utama -->

        <form action="functions/super_encryption/super_encryption.php" method="post">
            <div class="main-content">
                <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Mode
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="message.php">Encrypt</a></li>
                                        <li><a class="dropdown-item" href="messageDecrypt.php">Decrypt</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="form-container">
                    <div class="mb-3">
                        <label for="msg" class="form-label text-dark">Input Plain text</label>
                        <textarea class="form-control" id="msg" rows="3" name="message"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="key" class="form-label text-dark">Input Key</label>
                        <input type="text" class="form-control" id="key" placeholder="Vigenere Key" name="key">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Encrypt</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>



</html>