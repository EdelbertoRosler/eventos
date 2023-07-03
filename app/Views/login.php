
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1>Login</h1>
                <form action="<?=base_url().'authenticate' ?>" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" maxlength="6" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form><br>
                <p>
                    <a href="<?=base_url().'register'?>">Register</a>
                </p>
            </div>
        </div>
    </div>
