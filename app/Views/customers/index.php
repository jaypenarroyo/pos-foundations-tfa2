<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <p class="eyebrow">POS directory</p>
    <h1>Customer Accounts</h1>
    <p class="lead">Customer records retrieved from MySQL through the CustomerModel.</p>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th scope="col">Full name</th>
                <th scope="col">Email address</th>
                <th scope="col">Phone number</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($customers === []): ?>
                <tr>
                    <td colspan="3">No customer records were found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><a href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a></td>
                        <td><?= esc($customer['phone'] ?? '') ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
