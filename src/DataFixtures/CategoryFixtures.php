<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
//use Faker;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',
        'Science-Fiction',
        'Drame',
        'Thriller',
    ];

    public function load(ObjectManager $manager)
    {
        //$faker  =  Faker\Factory::create('fr_FR');

        foreach (self::CATEGORIES as $key => $categoryName)
        //for ($i = 0; $i < 10; $i++)
        {
            $category = new Category();
            //$category->setName($faker->country);
            $category->setName($categoryName);
            $manager->persist($category);

            $this->addReference('categorie_' . $key, $category);
        }
        $manager->flush();
    }
}
