<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\Routing\Attribute\Route;
class AuthorController extends AbstractController {


#[Route(path:"author/{name}",name:"home")]
public function showAuthor(string $name):Response{
   
    return $this->render('show.html.twig',['name' =>$name,
]);

}
#[Route("author",name:"h")]
public function listAuthors():Response
{
$authors=array(array('id' => 1,'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo','email' => 'victorhugo@gmail.com','nb_books' => '100'),
array('id' => 2,'picture' => '/images/william-shakespeare.jpg', 'username' => 'shakespeare','email' => 'william.shakespeare@gmail.com','nb_books' => '200'),
array('id' => 3,'picture' => '/images/Taha_Hussein.jpg', 'username' => 'taha hussein','email' => 'taha.hussein@gmail.com','nb_books' => '300'),
);
return $this->render('list.html.twig',['h' =>$authors]);
}
#[Route("number",name:"nbre")]
public function nbreAuthors():Response
{
 $nb=0;
 $i;
 $authors=array(array('id' => 1,'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo','email' => 'victorhugo@gmail.com','nb_books' => '100'),
array('id' => 2,'picture' => '/images/william-shakespeare.jpg', 'username' => 'shakespeare','email' => 'william.shakespeare@gmail.com','nb_books' => '200'),
array('id' => 3,'picture' => '/images/Taha_Hussein.jpg', 'username' => 'taha hussein','email' => 'taha.hussein@gmail.com','nb_books' => '300'),
);
for ($i = 0; $i < count($authors); $i++) {

    $nb++;
}

return $this->render('list.html.twig',['h' => $authors, 'nbre' => $nb]);
}
#[Route("livre",name:"l")]
public function nbreLivres():Response
{
 $nbl=0;

 $authors=array(array('id' => 1,'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo','email' => 'victorhugo@gmail.com','nb_books' => '100'),
array('id' => 2,'picture' => '/images/william-shakespeare.jpg', 'username' => 'shakespeare','email' => 'william.shakespeare@gmail.com','nb_books' => '200'),
array('id' => 3,'picture' => '/images/Taha_Hussein.jpg', 'username' => 'taha hussein','email' => 'taha.hussein@gmail.com','nb_books' => '300'),
);
foreach ($authors as $author) {
    $nbl += $author['nb_books'];}
    $nb = count($authors);

return $this->render('list.html.twig',['h' => $authors, 'l' => $nbl, 'nbre' => $nb]);
}
#[Route("details/{id}",name:"d")]
public function authorDetails(int $id):Response
{
$authors=array(array('id' => 1,'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo','email' => 'victorhugo@gmail.com','nb_books' => '100'),
array('id' => 2,'picture' => '/images/william-shakespeare.jpg', 'username' => 'shakespeare','email' => 'william.shakespeare@gmail.com','nb_books' => '200'),
array('id' => 3,'picture' => '/images/Taha_Hussein.jpg', 'username' => 'taha hussein','email' => 'taha.hussein@gmail.com','nb_books' => '300'),
);
$author = null;
foreach ($authors as $a) {
    if ($a['id'] == $id) {
        $author = $a;
        break;
    }
}

return $this->render('showAuthor.html.twig', ['author' => $author]);
}
}
