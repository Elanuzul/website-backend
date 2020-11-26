<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1> REGISTER SIPADU </h1>
    <form>
        <label> Nama: </label><br>
        <input type="text"><br>
        <label> Username: </label><br>
        <input type="text"><br>
        <label> Email: </label><br>
        <input type="text"><br>
        <label> Password </label><br>
        <input type="password"><br>
        <label> Konfirmasi Password </label><br>
        <input type="password"><br>
        <button> Register </button><br>
        <p> Or Register using </p>
        <a href="/pages/register_google" class="btn btn-success"> Google </a>
    </form>
</div>

<?= $this->endSection(); ?>