<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A four-page CodeIgniter POS foundations application">
    <title><?= esc($title) ?> | POS Foundations</title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="<?= base_url('/') ?>">POS Foundations</a>
            <nav aria-label="Main navigation">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('about') ?>">About</a>
                <a href="<?= base_url('customers') ?>">Customer Accounts</a>
                <a href="<?= base_url('users') ?>">User Accounts</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> POS Foundations</p>
    </footer>
</body>
</html>
