<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $brands = [
            ["Ferrari", new \DateTimeImmutable("1947-01-01")],
            ["Lamborghini", new \DateTimeImmutable("1963-01-01")],
            ["Porsche", new \DateTimeImmutable("1931-01-01")],
            ["Aston Martin", new \DateTimeImmutable("1913-01-01")],
            ["Bugatti", new \DateTimeImmutable("1909-01-01")],
            ["McLaren", new \DateTimeImmutable("1981-01-01")]
        ];

        $ferrari = [
            ["Enzo", 660,"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Enzo._%285099396422%29.jpg/560px-Enzo._%285099396422%29.jpg"],
            ["LaFerrari", 963,"https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/2013-03-05_Geneva_Motor_Show_8267.JPG/560px-2013-03-05_Geneva_Motor_Show_8267.JPG"],
            ["F40", 478,"https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/F40_Ferrari_20090509.jpg/560px-F40_Ferrari_20090509.jpg"]
        ];

        $lamborghini = [
            ["Aventador", 700,"https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/aventador/gallery/aven_gate_05_m.jpg"],
            ["Huracán", 610,"https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/model_chooser/mobile/Huracan_Evo_cc-arancio_xanto-Aesir_20_Diamond_Cut-black_caliper-sceneplate_env.png"]
        ];

        $porsche = [
            ["Panamera", 550,"https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Porsche_Panamera_4S.jpg/560px-Porsche_Panamera_4S.jpg"]
        ];

        // Insertion des marques
        foreach ($brands as $brand) {
            $newBrand = new Brand();
            $newBrand->setName($brand[0]);
            $newBrand->setCreatedAt($brand[1]);
            $manager->persist($newBrand);
        }

        //flush pour enregistrer les marques
        $manager->flush();

        // Insertion des voitures
        foreach ($ferrari as $car) {
            $newCar = new Car();
            $newCar->setName($car[0]);
            $newCar->setHorsePower($car[1]);
            $newCar->setImageUrl($car[2]);
            $newCar->setBrand($manager->getRepository(Brand::class)->findOneBy(["name" => "Ferrari"]));
            $manager->persist($newCar);
        }

        foreach ($lamborghini as $car) {
            $newCar = new Car();
            $newCar->setName($car[0]);
            $newCar->setHorsePower($car[1]);
            $newCar->setImageUrl($car[2]);
            $newCar->setBrand($manager->getRepository(Brand::class)->findOneBy(["name" => "Lamborghini"]));
            $manager->persist($newCar);
        }

        foreach ($porsche as $car) {
            $newCar = new Car();
            $newCar->setName($car[0]);
            $newCar->setHorsePower($car[1]);
            $newCar->setImageUrl($car[2]);
            $newCar->setBrand($manager->getRepository(Brand::class)->findOneBy(["name" => "Porsche"]));
            $manager->persist($newCar);
        }

        $manager->flush();
    }
}
