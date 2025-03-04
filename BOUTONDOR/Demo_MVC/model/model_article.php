<?php
/*ICI JE SUIS DANS LE MODEL
    - J'abrite les fonction qui communique avec la BDD (requête SQL)
*/
//Fonction qui enregistre les données du formulaire en BDD
//Param : string $name, string $content
//Return : string
function addUser($name,$content){
    //1er Etape : Instancie l'objet de connexion PDO
    $bdd = new PDO('mysql:host=localhost;dbname=articles2','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //Try... catch
    try{
        //2nd Etape : préparation de la requête
        $req = $bdd->prepare('INSERT INTO articles (nom_article, contenu_article) VALUES (?,?)');

        //3eme Etape : je relis les ? à leur données respectives grâce à bindParam()
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$content, PDO::PARAM_STR);

        //4eme Etape : exécution de la requête
        $req->execute();

        //Pour finir : retourne un message de confirmation
        return "$name a été enregistré avec succès !";

    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}

//Fonction pour récupérer la liste des articles en BDD
//Param : void
//Return : array | string
function readArticles(){
    //1er Etape : création de lobjet de connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=articles2','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //Try catch
    try{
        //2nd  Etape : preparation de la requête
        $req = $bdd->prepare('SELECT id_article, nom_article, contenu_article FROM articles');

        //3eme Etape : exécuter la requête
        $req->execute();

        //4eme Etape : récupération des données avec un simple fetch() et une boucle
        //Je crée un tableau vide qui sera renvoyer
        $result = [];
        //NOTE : on peut passer un paramètr à notre Fetch() pour lui dire sous quel format on veut récupérer nos enregistrement. Par défaut c'est un mélange de Tableau Associatif et Tableau Indexé (cf PDO::FETCH_BOTH). Ici avec PDO::FETCH_ASSOC, je demande uniquement des tableaux associatifs
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $result[] = $data;
        };

        //5eme Je renvoie mes données
        return $result;

    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}
?>