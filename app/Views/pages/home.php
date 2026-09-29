<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero"><div class="hero-copy"><div class="eyebrow">CodeIgniter 4 · Customer and user records</div><h1><?= esc($heading) ?></h1><p>Manage customer and user accounts through validated forms. Give users a profile picture and see its prepared thumbnail in the account list.</p><a class="button" href="<?= site_url('customers') ?>">View customer accounts</a></div></section>
<section class="grid" aria-label="POS modules"><article class="feature"><h3>Customer Accounts</h3><p>Create customers with a valid email address, then edit their account details.</p></article><article class="feature"><h3>User Accounts</h3><p>Create unique usernames and update account names and profile pictures.</p></article><article class="feature"><h3>About the Lab</h3><p>See how routes, controllers, models, views, and validation work together.</p></article></section>
<?= $this->endSection() ?>
