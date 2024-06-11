# gendoc-user.php

Objectif : traduire le Markdown saveur Quiniou de la documentation utilisateur en HTML.

## Principe de base

Utiliser les expressions réguilères.

Flags :

- m : multiline (^/$ match start/end of line)
- s : singleline (dot matches newline)

Titre 2 -> `/^## (.+)/m` -> `<h2>$1</h2>`

Espaces consécutifs -> `/(?<= ) /` -> `&nbsp;`

## Structures complexes

Listes :

1. liste vers ul -> `/((?:^- .*?)+)^\s+/ms` -> `<ul>$1</ul>`
2. élément de liste vers li -> `/^- ((?:.(?!^<\/ul>+|^-))*)/ms` -> `<li>$1</li>`
