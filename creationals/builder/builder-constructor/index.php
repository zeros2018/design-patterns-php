<?php
require_once 'UserBuilder.php';
require_once 'User.php';

// $user = UserBuilder::aUser('keyvan', 'pass')->build();

$user = UserBuilder::aUser('keyvan', 'pass2')
    ->withName('Keyvan Akbary')
    ->withEmail('keyvan@example.com')
    ->build();

echo $user->getPass();