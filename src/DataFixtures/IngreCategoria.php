<?php

namespace App\DataFixtures;
//Agregamos la clase
use App\Entity\Categorias;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngreCategoria extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Ciclo para insertar datos
        for($i=1; $i<=10; $i++){
            $categoria= new Categorias();
            $categoria->setCodigo('abcd', $i);
            $categoria->setNombre('efgh',$i);
            $categoria->setDescripcion('ijkl',$i);
            $categoria->setActivo(1, $i);
            $manager->persist($categoria);
        }
        $manager->flush();
    }
}
