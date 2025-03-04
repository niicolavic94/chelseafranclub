<?php
/*ICI JE SUIS DANS LA VIEW
    - Je possède le HTML pour l'affichage au Client
*/

?>


    <main>
        <h1>Ajout d'Articles</h1>
        <form action="" method="post">
            <input type="text" name="nom_article" placeholder="nom de l'article">
            <input type="text" name="contenu_article" placeholder="contenu de l'article">
            <input type="submit" name="submit">
        </form>
        <p><?php echo $message ?></p>

        <section>
            <h1>Liste des Articles</h1>
            <?php echo $listArticle ?>
        </section>
    </main>
