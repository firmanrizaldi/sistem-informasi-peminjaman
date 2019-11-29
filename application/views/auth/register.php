<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg  opacity rounded">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="text-center bg-danger p-1">
                                <h1 class="h4 text-white mb-2 mt-2">REGISTER</h1>
                            </div>
                            <div class="p-5">

                                <form class="user" method="post" action="<?= base_url(); ?>auth/registration">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name"
                                            placeholder="Full name" name="name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email"
                                            placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                    <div class=" form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1"
                                                placeholder="Password" name="password1"
                                                value="<?= set_value('password1'); ?>">
                                        </div>
                                        <div class=" col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2"
                                                placeholder="Repeat Password" name="password2"
                                                value="<?= set_value('password2'); ?>">

                                        </div>
                                        <?= form_error('password1', '<small class="text-danger pl-4 ml-1 mt-1">', '</small>'); ?>
                                    </div>
                                    <button type=" submit" class="btn btn-danger btn-user btn-block"><i
                                            class="fas fa-sign-in-alt"></i>
                                        Register Account
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>auth/">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>