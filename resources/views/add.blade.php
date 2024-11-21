    @include('templates.header', ['title' => "HALO INI PAGES"])


    <b>ini halaman tambah</b>

    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title"></h3>
        <div class="main-content login-panel">
            <div class="login-body">
                <div class="top d-flex justify-content-between align-items-center">
                    <!-- <div class="logo">
                </div> -->
                    <!-- <a href="views/home.php"><i class="fa-duotone fa-house-chimney"></i></a> -->
                </div>
                <div class="bottom">
                    <h3 class="panel-title"><b>tambah activity</b></h3>

                    <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success text-center">
                        <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                    </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger text-center">
                        <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                    </div>
                    <?php endif ?>

                    <form method="POST" action="{{ Route ('add')}}">
                        @csrf

                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-car"></i></span>
                            <input type="text" class="form-control" placeholder="activity" name="activity_name"
                                value="{{ @old('activity_name')}}">
                        </div>
                        @error('activity_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <button class="btn btn-primary w-100 login-btn">Sign in</button>
                        <div class="mt-2">Don't have an account?
                            <a href="/" class="text-white fs-14">Click Here!</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer">
                <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                    </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
            </div>
        </div>

        @include('templates.footer')