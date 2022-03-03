<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi DOKU</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style-2.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/admin.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Admin Form registrasi</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Username :</label>
                                <input type="text" name="username" id="username" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Password :</label>
                                <input type="password" name="password" id="password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <input type="text" name="email" id="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="job">Job :</label>
                            <input type="text" name="job" id="job" required/>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Profil:</label>
                            <input type="file" name="foto" id="foto" required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Registrasi" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>