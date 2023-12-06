<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genre1 = new Genre();
        $genre1->setName("Action");
        $genre1->setDescription("Action film is a film genre in which the protagonist is thrust into a series of events that typically involve violence and physical feats. The genre tends to feature a mostly resourceful hero struggling against incredible odds, which include life-threatening situations, a dangerous villain, or a pursuit which usually concludes in victory for the hero.");
        $genre1->setEnable(true);
        $manager->persist($genre1);

        $genre2 = new Genre();
        $genre2->setName("Adventure");
        $genre2->setDescription("Adventure movies are a genre of movies. They contain many of the same features of action movies, but are usually set in exotic locations.[2] The main theme is adventure, with the characters often exploring places they have not been before or doing things they have not done before.");
        $genre2->setEnable(true);
        $manager->persist($genre1);

        $genre3 = new Genre();
        $genre3->setName("Animation");
        $genre3->setDescription("Animated Films are ones in which individual drawings, paintings, or illustrations are photographed frame by frame (stop-frame cinematography). Usually, each frame differs slightly from the one preceding it, giving the illusion of movement when frames are projected in rapid succession at 24 frames per second.");
        $genre3->setEnable(true);
        $manager->persist($genre3);

        $genre4 = new Genre();
        $genre4->setName("Horror");
        $genre4->setDescription("Horror Films are unsettling films designed to frighten and panic, cause dread and alarm, and to invoke our hidden worst fears, often in a terrifying, shocking finale, while captivating and entertaining us at the same time in a cathartic experience. Horror films effectively center on the dark side of life, the forbidden, and strange and alarming events. They deal with our most primal nature and its fears: our nightmares, our vulnerability, our alienation, our revulsions, our terror of the unknown, our fear of death and dismemberment, loss of identity, or fear of sexuality.");
        $genre4->setEnable(true);
        $manager->persist($genre4);

        $genre5 = new Genre();
        $genre5->setName("Comedy");
        $genre5->setDescription("A comedy film is a category of film which emphasizes humor. These films are designed to make the audience laugh through the amusement. Films in this style traditionally have a happy ending (black comedy being an exception). Comedy is one of the oldest genres in the film—and derived from the classical comedy in theatre.");
        $genre5->setEnable(true);
        $manager->persist($genre5);

        $genre6 = new Genre();
        $genre6->setName("Crime");
        $genre6->setDescription("Crime films, in the broadest sense, is a film genre inspired by and analogous to the crime fiction literary genre. Films of this genre generally involve various aspects of crime and its detection. Stylistically, the genre may overlap and combine with many other genres, such as drama or gangster film, but also include comedy, and, in turn, is divided into many sub-genres, such as mystery, suspense or noir.");
        $genre6->setEnable(true);
        $manager->persist($genre6);

        $manager->flush();

        $this->addReference('genre1', $genre1);
        $this->addReference('genre2', $genre2);
        $this->addReference('genre3', $genre3);
        $this->addReference('genre4', $genre4);
        $this->addReference('genre5', $genre5);
        $this->addReference('genre6', $genre6);
    }
}
