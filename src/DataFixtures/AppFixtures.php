<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Plat;
use Faker\Generator;
use App\Entity\Users;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    /** 
     * @var Generator
    */
    private Generator $faker;

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->faker = Factory::create('fr_FR');
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {

        $cat1 = new Categorie();
        $cat1->setLibelle("Pizza");
        $cat1->setImage("pizza_cat.jpg");
        $cat1->setActive(true);
        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setLibelle("Burger");
        $cat2->setImage("burger_cat.jpg");
        $cat2->setActive(true);
        $manager->persist($cat2);

        $cat3 = new Categorie();
        $cat3->setLibelle("Burger");
        $cat3->setImage("burger_cat.jpg");
        $cat3->setActive(true);
        $manager->persist($cat3);

        $cat4 = new Categorie();
        $cat4->setLibelle("Salade");
        $cat4->setImage("salade_cat.jpg");
        $cat4->setActive(true);
        $manager->persist($cat4);

        $cat5 = new Categorie();
        $cat5->setLibelle("Plat1");
        $cat5->setImage("pasta_cat.jpg");
        $cat5->setActive(true);
        $manager->persist($cat5);

        $cat6 = new Categorie();
        $cat6->setLibelle("Plat2");
        $cat6->setImage("sandwich_cat.jpg");
        $cat6->setActive(true);
        $manager->persist($cat6);

        $cat7 = new Categorie();
        $cat7->setLibelle("Plat3");
        $cat7->setImage("wrap_cat.jpg");
        $cat7->setActive(true);
        $manager->persist($cat7);




        $plat1 = new Plat();
        $plat1->setLibelle("Pizza");
        $plat1->setImage("pizza-margherita.jpg");
        $plat1->setDescription("Délicieuse pizza cuite au feu de bois...");
        $plat1->setActive(true);
        $plat1->setPrix(12);
        $plat1->setCategorie($cat1);
        $manager->persist($plat1);

        $plat2 = new Plat();
        $plat2->setLibelle("Burger");
        $plat2->setImage("cheesburger.jpg");
        $plat2->setDescription("...");
        $plat2->setActive(true);
        $plat2->setPrix(12);
        $plat2->setCategorie($cat2);
        $manager->persist($plat2);

        $plat3 = new Plat();
        $plat3->setLibelle("Burger");
        $plat3->setImage("cheesburger.jpg");
        $plat3->setDescription("...");
        $plat3->setActive(true);
        $plat3->setPrix(12);
        $plat3->setCategorie($cat2);
        $manager->persist($plat3);

        $plat4 = new Plat();
        $plat4->setLibelle("Lasagnes-Viandes");
        $plat4->setImage("lasagnes_viande.jpg");
        $plat4->setDescription("...");
        $plat4->setActive(true);
        $plat4->setPrix(12);
        $plat4->setCategorie($cat4);
        $manager->persist($plat4);

        $plat5 = new Plat();
        $plat5->setLibelle("Plat1");
        $plat5->setImage("salad1.png");
        $plat5->setDescription("...");
        $plat5->setActive(true);
        $plat5->setPrix(12);
        $plat5->setCategorie($cat5);
        $manager->persist($plat5);

        $plat6 = new Plat();
        $plat6->setLibelle("Plat2");
        $plat6->setImage("hamburger.jpg");
        $plat6->setDescription("...");
        $plat6->setActive(true);
        $plat6->setPrix(12);
        $plat6->setCategorie($cat6);
        $manager->persist($plat6);

        $plat7 = new Plat();
        $plat7->setLibelle("Plat3");
        $plat7->setImage("pizza-salmon.png");
        $plat7->setDescription("...");
        $plat7->setActive(true);
        $plat7->setPrix(12);
        $plat7->setCategorie($cat7);
        $manager->persist($plat7);


        $plat8 = new Plat();
        $plat8->setLibelle("Burger");
        $plat8->setImage("cheesburger.jpg");
        $plat8->setDescription("...");
        $plat8->setActive(true);
        $plat8->setPrix(12);
        $plat8->setCategorie($cat2);
        $manager->persist($plat8);

        $plat9 = new Plat();
        $plat9->setLibelle("Burger");
        $plat9->setImage("cheesburger.jpg");
        $plat9->setDescription("...");
        $plat9->setActive(true);
        $plat9->setPrix(12);
        $plat9->setCategorie($cat2);
        $manager->persist($plat9);

        $plat10 = new Plat();
        $plat10->setLibelle("Pizza");
        $plat10->setImage("pizza-margherita.jpg");
        $plat10->setDescription("Délicieuse pizza cuite au feu de bois...");
        $plat10->setActive(true);
        $plat10->setPrix(12);
        $plat10->setCategorie($cat1);
        $manager->persist($plat10);

        $plat11 = new Plat();
        $plat11->setLibelle("Pizza");
        $plat11->setImage("pizza-margherita.jpg");
        $plat11->setDescription("Délicieuse pizza cuite au feu de bois...");
        $plat11->setActive(true);
        $plat11->setPrix(12);
        $plat11->setCategorie($cat1);
        $manager->persist($plat11);

        $plat12 = new Plat();
        $plat12->setLibelle("Pizza");
        $plat12->setImage("pizza-margherita.jpg");
        $plat12->setDescription("Délicieuse pizza cuite au feu de bois...");
        $plat12->setActive(true);
        $plat12->setPrix(12);
        $plat12->setCategorie($cat1);
        $manager->persist($plat12);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade");
        $plat13->setImage("salade_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat4);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade");
        $plat13->setImage("salade_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat4);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade");
        $plat13->setImage("salade_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat4);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade");
        $plat13->setImage("salade_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat4);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade");
        $plat13->setImage("salade_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat4);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat13 = new Plat();
        $plat13->setLibelle("Salade composées");
        $plat13->setImage("  pasta_cat.jpg");
        $plat13->setDescription("...");
        $plat13->setActive(true);
        $plat13->setPrix(12);
        $plat13->setCategorie($cat5);
        $manager->persist($plat13);

        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);

        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);


        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);


        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);


        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);


        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);

        $plat14 = new Plat();
        $plat14->setLibelle("Sandwich");
        $plat14->setImage("sandwich_cat.jpg");
        $plat14->setDescription("...");
        $plat14->setActive(true);
        $plat14->setPrix(12);
        $plat14->setCategorie($cat6);
        $manager->persist($plat14);

        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        $plat15 = new Plat();
        $plat15->setLibelle("Wrap");
        $plat15->setImage("wrap_cat.jpg");
        $plat15->setDescription("...");
        $plat15->setActive(true);
        $plat15->setPrix(12);
        $plat15->setCategorie($cat7);
        $manager->persist($plat15);


        //for ($i = 0; $i < 10; $i++) {

            $user = new Users();
            $user ->setNom("test")
              ->setPrenom("test")
              ->setTelephone("test")
              ->setAdresse("test")
              ->setCp("test")
              ->setVille("test")
              ->setEmail("test@test.com")
              ->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

              $hashPassword = $this->hasher->hashPassword(
                $user,
                '1234'
              );

              $user->setPassword($hashPassword);

            $manager->persist($user);
        //}

        $manager->flush();
    
    }
}