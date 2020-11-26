<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>LOGIN USER</h1>
    <form>
        <label>Username</label><br>
        <input type="text"><br>
        <label>Password</label><br>
        <input type="password"><br>
        <a href="/pages/reset_password"> Forget your password? </a><br>
        <a href="/" class="btn btn-success"> Login </a><br>
        <a href="/pages/login_sipadu" class="btn btn-success"> Login with SIPADU </a><br>
        <a href="/pages/login_google" class="btn btn-success"> Login with Google </a>
    </form>
</div>

<?= $this->endSection(); ?>