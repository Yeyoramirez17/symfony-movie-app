<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movie();
        $movie1->setTitle('The Shawshank Redemption');
        $movie1->setCountry($this->getReference('country1'));
        $movie1->setGenre($this->getReference('genre1'));
        $movie1->setBudget(2500000);
        $movie1->setReleaseDate(new \DateTime('1994-09-23'));
        $movie1->setDescription('Acusado del asesinato de su mujer, Andrew Dufresne, tras ser condenado a cadena perpetua, es enviado a la prisión de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros presidiarios, especialmente de Red, el jefe de la mafia de los sobornos.');
        $movie1->setRuntime(142);
        $movie1->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/dc1fX265fZIIY5Hab8I7CdETyJy.jpg');
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle('The Godfather');
        $movie2->setCountry($this->getReference('country1'));
        $movie2->setGenre($this->getReference('genre6'));
        $movie2->setBudget(6000000);
        $movie2->setReleaseDate(new \DateTime('1972-03-14'));
        $movie2->setDescription("Don Vito Corleone, conocido dentro de los círculos del hampa como 'El Padrino', es el patriarca de una de las cinco familias que ejercen el mando de la Cosa Nostra en Nueva York en los años cuarenta. Don Corleone tiene cuatro hijos: una chica, Connie, y tres varones; Sonny, Michael y Fredo. Cuando el Padrino reclina intervenir en el negocio de estupefacientes, empieza una cruenta lucha de violentos episodios entre las distintas familias del crimen organizado.");
        $movie2->setRuntime(175);
        $movie2->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ApiEfzSkrqS4m1L5a2GwWXzIiAs.jpg');
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('The Dark Knight');
        $movie3->setCountry($this->getReference('country1'));
        $movie3->setGenre($this->getReference('genre1'));
        $movie3->setBudget(185000000);
        $movie3->setReleaseDate(new \DateTime('2008-07-16'));
        $movie3->setDescription("Batman/Bruce Wayne regresa para continuar su guerra contra el crimen. Con la ayuda del teniente Jim Gordon y del Fiscal del Distrito Harvey Dent, Batman se propone destruir el crimen organizado en la ciudad de Gotham. El triunvirato demuestra su eficacia, pero, de repente, aparece Joker, un nuevo criminal que desencadena el caos y tiene aterrados a los ciudadanos.");
        $movie3->setRuntime(152);
        $movie3->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8QDQExnfNFOtabLDKqfDQuHDsIg.jpg');
        $manager->persist($movie3);

        $movie4 = new Movie();
        $movie4->setTitle('Whiplash');
        $movie4->setCountry($this->getReference('country1'));
        $movie4->setGenre($this->getReference('genre1'));
        $movie4->setBudget(3300000);
        $movie4->setReleaseDate(new \DateTime('2014-10-10'));
        $movie4->setDescription("El objetivo de Andrew Neiman, un joven y ambicioso baterista de jazz, es triunfar en el elitista Conservatorio de Música de la Costa Este en el que estudia. Marcado por el fracaso de la carrera literaria de su padre, Andrew alberga sueños de grandeza. Terence Fletcher, un profesor conocido tanto por su talento como por sus rigurosos métodos de enseñanza, dirige el mejor conjunto de jazz del Conservatorio. Cuando Fletcher elige a Andrew y para formar parte del conjunto musical que dirige, cambia para siempre la vida del joven. La pasión de Andrew por alcanzar la perfección se convierte en obsesión, al tiempo que su despiadado profesor lo lleva al límite de su capacidad y de su salud mental.");
        $movie4->setRuntime(107);
        $movie4->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/sL32IZkyjlF7otj5vcUxiKSKzg5.jpg');
        $manager->persist($movie4);

        $movie5 = new Movie();
        $movie5->setTitle('The Lord of the Rings: The Return of the King');
        $movie5->setCountry($this->getReference('country1'));
        $movie5->setGenre($this->getReference('genre2'));
        $movie5->setBudget(94000000);
        $movie5->setReleaseDate(new \DateTime('2003-12-01'));
        $movie5->setDescription("Las fuerzas de Saruman han sido destruidas, y su fortaleza sitiada. Ha llegado el momento de que se decida el destino de la Tierra Media, y por primera vez en mucho tiempo, parece que hay una pequeña esperanza. La atención del señor oscuro Sauron se centra ahora en Gondor, el último reducto de los hombres, y del cual Aragorn tendrá que reclamar el trono para ocupar su puesto de rey. Pero las fuerzas de Sauron ya se preparan para lanzar el último y definitivo ataque contra el reino de Gondor, la batalla que decidirá el destino de todos. Mientras tanto, Frodo y Sam continuan su camino hacia Mordor, a la espera de que Sauron no repare en que dos pequeños Hobbits se acercan cada día más al final de su camino, el Monte del Destino.");
        $movie5->setRuntime(201);
        $movie5->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/mWuFbQrXyLk2kMBKF9TUPtDwuPx.jpg');
        $manager->persist($movie5);

        $movie6 = new Movie();
        $movie6->setTitle('The Lord of the Rings: The Fellowship of the Ring');
        $movie6->setCountry($this->getReference('country1'));
        $movie6->setGenre($this->getReference('genre2'));
        $movie6->setBudget(93000000);
        $movie6->setReleaseDate(new \DateTime('2001-12-18'));
        $movie6->setDescription("En la Tierra Media, el Señor Oscuro Saurón creó los Grandes Anillos de Poder, forjados por los herreros Elfos. Tres para los reyes Elfos, siete para los Señores Enanos, y nueve para los Hombres Mortales. Secretamente, Saurón también forjó un anillo maestro, el Anillo Único, que contiene en sí el poder para esclavizar a toda la Tierra Media. Con la ayuda de un grupo de amigos y de valientes aliados, Frodo emprende un peligroso viaje con la misión de destruir el Anillo Único. Pero el Señor Oscuro Sauron, quien creara el Anillo, envía a sus servidores para perseguir al grupo. Si Sauron lograra recuperar el Anillo, sería el final de la Tierra Media.");
        $movie6->setRuntime(178);
        $movie6->setPoster('https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9xtH1RmAzQ0rrMBNUMXstb2s3er.jpg');
        $manager->persist($movie6);

        $manager->flush();
    }
}
