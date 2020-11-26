<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <form>
        <h2> Masukkan akun SIPADU </h2>
        <label>Username</label><br>
        <input type="text"><br>
        <label>Password</label><br>
        <input type="password"><br>
        <button> Login </button>
        <p> atau </p>
        <a href="/pages/login_google"> Login dengan Google </a>
    </form>
</div>

<?= $this->endSection(); ?>