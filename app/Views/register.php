
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1>Register</h1>
                <form action="<?=base_url().'register' ?>" method="post">
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" />
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="instituicao">Instituição</label>
                    <input type="text" id="instituicao" name="instituicao" class="form-control" />
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="confirm-password">Repeat password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="form-control" />
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                </form>
            </div>
        </div>
    </div>
