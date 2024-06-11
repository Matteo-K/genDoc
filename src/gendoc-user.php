#!/usr/bin/php
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Documentation utilisateur">
    <meta name="author" content="Mattéo Kervadec, Marius Chartier--Le Goff, Raphaël Bardini, Stanislas Rolland">
    <title>Chaine de production</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Documentation utilisateur (chaîne de production)</h1>
        <?php
            $config = [];
            foreach (file('config') as $line) {
                $entry = explode('=', $line);
                if (count($entry) != 2) {
                    fwrite(STDERR, 'Ligne invalide dans config : "' . $line . '". Abandon de la génération.' . PHP_EOL);
                    exit(1);
                }
                $config[$entry[0]] = $entry[1];
            }
        ?>
        <p><strong>Client</strong>&nbsp;: <?php echo $config['CLIENT']; ?></p>
        <p><strong>Produit</strong>&nbsp;: <?php echo $config['PRODUIT']; ?></p>
        <p><strong>Version</strong>&nbsp;: <?php echo $config['VERSION']; ?></p>
        <p><strong>Date de génération</strong>&nbsp;: <?php echo date('j/m/Y'); ?></p>
    </header>
    <main>
    <?php
        define('NOM_FICHIER_MD', 'doc.md');
        
        # Ouvrir le fichier
        $work = file_get_contents(NOM_FICHIER_MD);
        if ($work === false) { # Si le fichier ne peut être ouvert
            fwrite(STDERR, 'Impossible d\'ouvrir le fichier "' . NOM_FICHIER_MD . '". Abandon de la génération.' . PHP_EOL);
            exit(2);
        }

        # Appliquer les traitements

        ## Traitements simpples

        $work = preg_replace([
            '/^# (.+)/m', # Titre 1
            '/^## (.+)/m', # Titre 2
            '/^### (.+)/m', # Titre 3
            '/^#### (.+)/m', # Titre 4

            '/(?<= ) /', # Espaces consécutifs
        ], [
            '<h1>$1</h1>',
            '<h2>$1</h2>',
            '<h3>$1</h3>',
            '<h4>$1</h4>',

            '&nbsp;',
        ], $work);

        ## Traitements complexes

        ### Listes

        $work = preg_replace([
            '/((?:^- .*?)+)^\s+/ms', # Liste
            '/^- ((?:.(?!^<\/ul>+|^-))*)/ms', # Élément de liste
        ], [
            "<ul>\n$1</ul>",
            '<li>$1</li>'
        ], $work);

        ### Tableaux
        
        # Afficher le Markdown converti
        echo $work;
    ?>
    </main>
</body>