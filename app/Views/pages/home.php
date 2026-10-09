<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="hero">
    <p class="eyebrow">CodeIgniter 4 Point of Sale</p>
    <h1>Your first POS application</h1>
    <p class="lead">
        Explore a simple four-page website built with routes, controllers, views,
        CodeIgniter Models, Query Builder, and a MySQL database.
    </p>
    <div class="actions">
        <a class="button" href="<?= base_url('customers') ?>">View customers</a>
        <a class="button button-secondary" href="<?= base_url('users') ?>">View users</a>
    </div>
</section>

<section class="feature-grid" aria-label="Application features">
    <article>
        <h2>Four working routes</h2>
        <p>Home, About, Customer Accounts, and User Accounts are connected through the navigation.</p>
    </article>
    <article>
        <h2>MVC structure</h2>
        <p>Routes send requests to controllers, and controllers provide data to reusable views.</p>
    </article>
    <article>
        <h2>Persistent data</h2>
        <p>Customer and user records now come from MySQL through dedicated CodeIgniter models.</p>
    </article>
</section>
<?= $this->endSection() ?>
