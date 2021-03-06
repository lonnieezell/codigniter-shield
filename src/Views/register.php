<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

    <div class="container d-flex justify-content-center p-5">
        <div class="card col-5 shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-5"><?= lang('Auth.register') ?></h5>

                <form action="<?= route_to('register') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Email -->
                    <div class="mb-2">
                        <input type="email" class="form-control" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                    </div>

                    <!-- Username -->
                    <div class="mb-4">
                        <input type="text" class="form-control" name="username" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                    </div>

                    <!-- Password -->
                    <div class="mb-2">
                        <input type="password" class="form-control" name="password" autocomplete="password" placeholder="<?= lang('Auth.password') ?>" required />
                    </div>

                    <!-- Password (Again) -->
                    <div class="mb-5">
                        <input type="password" class="form-control" name="password_confirm" autocomplete="password_confirm" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
                    </div>

                    <div class="d-grid col-8 mx-auto m-3">
                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                    </div>

                    <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.login') ?></a></p>

                </form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
