<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <form>
        <label> Email Address: </label><br>
        <input type="text"><br>
        <button> Send Password Reset Link </button>
    </form>
</div>

<?= $this->endSection(); ?>