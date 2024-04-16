<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordHash
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $userAdmin = new User();

        $userAdmin
            ->setUsername("admin")
            ->setRoles(["ROLE_ADMIN"]);

        $userAdmin->setPassword(
            $this->passwordHash->hashPassword(
                $userAdmin,
                "adminadmin"
            )
        );

        $manager->persist($userAdmin);

        $user = new User;

        $user->setUsername("test");
        $user->setPassword(
            $this->passwordHash->hashPassword(
                $user,
                "testtest"
            )
        );

        $manager->persist($user);

        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);
    }
}
