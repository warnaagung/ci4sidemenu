<!-- 

> layout/base.php
> layout/admin.php
> lslessons.php 
Design Pattern , perlu basic OOP yg sangat kuat
Design Pattern seni memprogram, 3 pola utama creational, behavior
-->

<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
    <table class="table">
        <thead>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>SKS</th>
        </thead>
        <tbody></tbody>
    </table>
<?= $this->endSection() ?>