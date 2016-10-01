<?php
require_once('vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Models\User;

$paths = ['app/Models'];
$isDevMode = true;

// the connection configuration
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'password',
    'dbname'   => 'foobar',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);

/*
$user = new User();
$user->setUsername('cfrutos');
$user->setPassword('password');

$em->persist($user);
$em->flush();
*/

$userRepo = $em->getRepository(User::class);
$user = $userRepo->findOneByUsername('cfrutos');

var_dump($user);

