<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <form>
        <h2> Masukkan alamat email dan password </h2>
        <label> Email </label><br>
        <input type="text"><br>
        <label> Password </label><br>
        <input type="password"><br>
        <button> Login </button>
        <p> atau </p>
        <a href="/pages/login_sipadu"> Login dengan SIPADU saja </a>
    </form>
</div>

<?= $this->endSection(); ?>