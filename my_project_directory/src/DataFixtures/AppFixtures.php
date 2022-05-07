<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use http\QueryString;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $question= new Question();
        $question->setHeading('Заголовок');
        $question->setContent("Как сделать сайт Когда у тебя 24 ч и не знаешь с чего начать");
        $question->setDate(new \DateTime());
        $question->setCategory('web');
        $manager->persist($question);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
