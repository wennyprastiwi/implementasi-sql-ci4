<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?> 
<div class="container">
<table class="table table-hover table-bordered mt-4">
        <thead>
            <tr>
                <th>Nomor Order</th>
                <th>Jumlah Item</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $row):?>
            <tr>
                <td><?= $row->ordernumber;?></td>
                <td><?= $row->itemsCount;?></td>
                <td><?= $row->total;?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>