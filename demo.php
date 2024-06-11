<?php
$name = 'Sebastian';
$name .=  ' Peralta';
$isDev = true;
$age = 24;
define(
    'LOGO_URL',
    'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg'
);
$output = "Hello, my name is $name and I am $age years old.";
$outputAge = match (true) {
    $age < 2    => 'You are a baby',
    $age < 10   => 'You are a child',
    $age < 18   => 'You are a teenager',
    $age === 18 => 'You are free to go',
    $age < 40   => 'You are an adult',
    $age >= 40  => 'You are an old adult',
    default     => "You are $age years old"
};
$bestLanguges = ['PHP', 'JavaScript', 'Python',  1, 2];
$bestLanguges[3] = 'Java';
$bestLanguges[] = 'TypeScript';
?>

<div>
    <ul>
        <?php foreach ($bestLanguges as $key => $language) : ?>
            <li><?= $key . " " . $language ?></li>
        <?php endforeach; ?>
    </ul>
    <h2> <?= $outputAge ?> </h2>
    <img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200" />
    <h1>
        <?= $output ?>
    </h1>
</div>

<style>
    :root {
        color-scheme: light dark;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body {
        background-color: white;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    @media (prefers-color-scheme: dark) {
        body {
            background-color: black;
            color: white;
        }
    }
</style>