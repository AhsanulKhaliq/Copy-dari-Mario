
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
            <h2 class="text-center">Ahlan Wa Sahlan</h2>       
                <form action="/login" method="post">
                <div class="form-group">
                <label for="email">Username</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="username">
                </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                <button type="button" class="btn btn-primary btn-block" onclick="kembaliHome">Kembali</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function kembaliHome() {
            window.location.href = "home.php";        }
    </script>





