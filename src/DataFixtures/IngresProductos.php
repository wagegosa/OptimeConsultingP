<?php

namespace App\DataFixtures;

//Ingresamos la clase
use App\Entity\Productos;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngresProductos extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Ciclo para insertar datos
        for ($i = 1; $i <= 10; $i++) {
            $Producto = new Productos();
            $Producto->setCodigo('abcd', $i);
            $Producto->setNombre('efgh', $i);
            $Producto->setDescripcion('ijkl', $i);
            $Producto->setMarca('abc', $i);
            $Producto->setCategoria(mt_rand(1, 10));
            $Producto->setPrecio(mt_rand(100, 1000));
            $manager->persist($Producto);
        }
        $manager->flush();
    }
}
