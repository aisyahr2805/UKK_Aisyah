
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK Kasir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: darkslateblue;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        
        .login-img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .form-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .form-container textarea {
            resize: vertical; /* Biarkan textarea dapat diubah tingginya secara vertikal */
        }

        .form-container button {
            width: 100%;
            background-color: darkblue ;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: darkblue;
        }

    </style>
</head>
<body>
<div class="form-container">
<img src="login.jpg" alt="Gambar Login" class="login-img">
<h2>Selamat Datang !</h2>
		<div class="content">
			<div class="card mt-5">
				<div class="row">
					<div class="col-6">
						<div class="card-body">
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
								}
							}
							?>
							<form method="post" action="cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="form-group mt-3">
									<button class="btn btn-primary form-control" type="submit">Login</button>
								</div>
							</form>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>

