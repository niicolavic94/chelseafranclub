<?php
/*DEMO MVC*/
/*ICI JE SUIS DANS LE CONTROLER
    - Je possède l'algorithme de la page
    - Je suis le fichier auquel le Client accède dans l'url
*/

//J'INCLUS / IMPORTE MES FICHIERS DE RESSOURCES (model, fonction utilitaire)
include './model/model_article.php';
include './utils/functions.php';

//Déclaration de ma varibale d'affichage
//Permet de dire à la View quelles sont les données à afficher
$message = "";
$listArticle = "";

//Fonction qui teste les données du formulaire
//Param : void
//Return : array["nom"=>string,"contenu"=>string,"erreur"=>string]
function formInscription(){
    //1er Etape de Sécurité : vérifier les champs vides
    if(empty($_POST["nom_article"]) || empty($_POST["contenu_article"])){
        return ["nom"=>"", "contenu"=>"", "erreur"=>"Veuillez remplir tous les champs !"];
    }

    //2nd Etape de sécurité : vérifier le format
    // -> on peut pas car ce ne sont que des strings

    //3eme Etape de sécurité : nettoyage des données
    $name = sanitize($_POST["nom_article"]);
    $content = sanitize($_POST["contenu_article"]);

    //Je retourne un tableau pour distinguer chaque données et les récupérer facilement
    return ["nom"=>$name, "contenu"=>$content, "erreur"=>""];
}


//Je vérifie que je reçois le formulaire
if(isset($_POST["submit"])){
    //Je lance ma fonction de teste du formualire
    $tab = formInscription();

    //Je teste si j'ai une erreur
    if($tab["erreur"] != ""){
        $message = $tab["erreur"];
    }else{
        $message = addUser($tab["nom"],$tab["contenu"]);
    }
}

//Je conserve les articles récupérés depuis la BDD dans $data
$data = readArticles();

//Je vérifie si $data est un tableau de donnée ou une string d'erreur
if(gettype($data) == "string"){
    //Ici je suis dans le cas où il y a eu une erreur (catch())
    $listArticle = $data;
}else{
    //Ici tout s'est bien passé, j'ai mon tableau de donné

    //Je mets en forme les articles récupérés en BDD
    //1er Etape : parcourir mon tableau de donnée $data
    foreach($data as $article){
        //Chaque $article est un tableau associatif dont les clés correspondent à mes colonnes de ma table articles dans la BDD
        $listArticle = $listArticle."<article style='border-bottom : 3px solid black'>
            <p>numéro de l'article : {$article['id_article']}</p>
            <p>nom de l'article : {$article['nom_article']}</p>
            <p>contenu de l'article : {$article['contenu_article']}</p>
        </article>";
    }
}

//Inclure ma Vue : view_accueil.php
include './view/view_header.php';
include './view/view_accueil.php';
include './view/view_footer.php';
?>