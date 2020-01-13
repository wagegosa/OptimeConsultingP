<?php

namespace App\DataFixtures;

//Agregamos la clase
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngreCategoria extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            //llamamos la clase
            $categoria = new Category();
            $categoria->setCode('abcd', $i);
            $categoria->setName('efgh', $i);
            $categoria->setDescription('ijkl', $i);
            $categoria->setActive(1, $i);
            $manager->persist($categoria);
        }

        $manager->flush();
    }
}
