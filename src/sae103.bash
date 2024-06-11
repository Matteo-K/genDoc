#!/usr/bin/bash

# récupération des images
docker image pull clock

# création du volume
docker volume create sae103

# démarrage du conteneur d'aggrégation de volume
docker container run --rm -d -v sae103:/work / clock

# injection des fichiers de travail
# ...

# exécution du traitement : conversion de la doc technique
# ...

# exécution du traitement : conversion de la doc utilisateur
# ...

# exécution du traitement : démarrage du conteneur html2-pdf
docker container run --rm -ti -v sae103/work bigpapoo/work sae103-html2pdf

# récupération du résultat
# ...

echo "SAÉ 1.03 - Mission accomplie"
