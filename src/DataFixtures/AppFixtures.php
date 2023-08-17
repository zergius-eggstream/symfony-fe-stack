<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Luchaninov\CsvFileLoader\CsvFileLoader;
use App\Entity\Client;

class AppFixtures extends Fixture
{
    public function __construct(
        private readonly string $fixtureFile,
    ) {

    }

    public function load(ObjectManager $manager): void
    {
        // using https://www.mockaroo.com/ export file format
        $loader = new CsvFileLoader($this->fixtureFile);
        foreach ($loader->getItems() as $item) {
            $client = new Client();
            $client
                ->setFirstName($item['first_name'])
                ->setLastName($item['last_name'])
                ->setEmail($item['email'])
                ->setAvatar($item['avatar'])
            ;
            $manager->persist($client);
        }

        $manager->flush();
    }
}
