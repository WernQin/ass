<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'Untitled' ?></title>
    <link rel="shortcut icon" href="/images/animate_international.png">
    <link rel="stylesheet" href="/css/ass.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/ass.js"></script>
</head>
<body>

    <header>
      <h1><a href="/"></a></h1>
        <?php if ($_user): ?>
            <div>
                <?= $_user->name ?><br>
                <?= $_user->role ?>
            </div>
            <img src="/photos/<?= $_user->photo ?>">
        <?php endif ?>
    </header>


    <nav>
    <a href="/"></a>

        <?php if ($_user): ?>
            <a href="/demo1.php">Demo 12</a>
        <?php endif ?>

        <?php if ($_user?->role == 'Admin'): ?>
            <a href="/demo2.php">Demo 2</a>
        <?php endif ?>

        <?php if ($_user?->role == 'Member'): ?>
            <a href="/demo3.php">Demo 3</a>
        <?php endif ?>

        <div></div>

        <?php if ($_user): ?>
            <a href="/user/profile.php">Profile</a>
            <a href="/user/password.php">Password</a>
            <a href="/logout.php">Logout</a>
        <?php else: ?>
            <a href="/user/register.php">Register</a>
            <a href="/login.php">Login</a>
        <?php endif ?>
    </nav>

    <main>
        <h1><?= $_title ?? 'Untitled' ?></h1>