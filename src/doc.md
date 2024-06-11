# Titre de niveau 1

## Titre de niveau 2

### Titre de niveau 3

#### Titre de niveau 4


## Liste

- élément 1
- élément 2
suite du 2
- élement 3
suite du 3
2eme suite du 3

Cette ligne ne fait pas partie de la liste.

## Tableaux

### Tableau 1

Ceci est le tableau 1 :

|Titre col1|Titre col2|Titre col3|
|-|-|-|
| 1 | Toto | toto@gmail.com |
| 2 | Lulu | lulu@hotmail.com |

Fin tableau 1


### Tableau 2

Ceci est le tableau 2 :

|id|nom|prenom|
|-|---|--|
|1|débutGras<b>Homer</b>finGras|Simpson|
|2|Moe|débutIta <i> Szyslak</i> finIta|
|3|Charles Montgomery|Burns|

Fin tableau 2

### Tableau 3

Ceci est le tableau 3 (sans en-tête) :

|--|----|-|
|3|t<em>ro</em>is (pas em)|three|
|4|q<i>ua</i>tre (pas ita)|four|(cellule en trop ignorée)|
|5|c<b>in</b>q (pas gras)|five|
|0|zéro (cellule suivante manquante)|
|8||eight (cellule précédente vide)|
|1|un|one|

Fin tableau 3

## Code

Commande linux : `rm -rf / -no-preserve-root`

Utilisez la commande `./gendoc` pour générer la documentation.

## Espaces blancs

Les espaces          consécutifs       sont       préservés                 .

                Quoi qu'il en coûte                                         !

## Bloc de code

Ceci est un bloc de code :
```
int main()
{
    printf("Hello World!\n");
    return EXIT_SUCCESS;
}
```fin bloc de code

Rendez-vous sur [example.com](https://www.example.com) demain à 16h.

Texte en <b>gras </b> (fin gras).

Texte en <i> italique</i> (fin italique).

<strong>tout autre tag HTML est ignoré. ceci ne doit pas s'afficher.</strong>

Texte quelconque dans un paragraphe.

Texte dans un autre paragraphe.
