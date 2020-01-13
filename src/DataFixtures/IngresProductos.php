<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngresProductos extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Ciclo para insertar datos
        for ($i = 1; $i <= 10; $i++) {
            $Producto = new Products();
            $Producto->setCode('abcd', $i);
            $Producto->setName('efgh', $i);
            $Producto->setDecryption('ijkl', $i);
            $Producto->setBrand('abc', $i);
            $Producto->setCategory(mt_rand(1, 10));
            $Producto->setPrice(mt_rand(100, 1000));
            $manager->persist($Producto);
        }
        $manager->flush();

        $manager->flush();
    }
}
