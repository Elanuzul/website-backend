<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1> REGISTER GOOGLE </h1>
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
    </form>
</div>

<?= $this->endSection(); ?>