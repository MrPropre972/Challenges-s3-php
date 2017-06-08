# Challenge : Le calcul de l'IMC, quelle drôle d'idée !

L'indice de masse corporelle (IMC) est une formule qui revient souvent dans les magazines pour calculer son poids idéal. Nous ne traiterons pas ici de l'intérêt d'un tel calcul mais nous servirons de ce point de départ pour appliquer d'autres calculs de _"poids idéal"_ et **travailler avec les fonctions utilisateur**.

Ainsi, vous pourrez vous-même choisir votre poids idéal :D

**Instructions**

Dans un script PHP, pour chaque formule ci-dessous :

- Créer une fonction qui prend en paramètre les données nécessaires au calcul.
- Créer une valeur de retour qui correspond soit à l'indice soit au poids idéal lui-même.

Puis :

- Afficher à l'écran la liste de tous les paramètres utilisés pour tous les calculs (l'ensemble des variables d'une personne, même si elles ne sont utilisées que par certaines formules).
- Afficher à l'écran l'intitulé de chaque calcul (h1 ou h2), puis son résultat (p).

## IMC

`IMC = poids en kg / (taille en m)²`

Le résultat vous donnera un chiffre qu'il faudra analyser :

- Résultat < 18 = maigreur
- 18 <= Résultat < 25 = poids normal
- 25 <= Résultat < 30 = surpoids
- 30 >= Résultat = obésité

> On affichera en sortie, par exemple : "IMC = 23.52 (poids normal)"

## Indice de Broca

`Poids idéal = taille en cm – 100`

## Formule de Lorentz

Tiens compte du sexe de la personne.

- `Poids idéal féminin = taille en cm – (taille en cm / 2) – 25`
- `Poids idéal masculin = taille en cm – (taille en cm / 4) – 62,5`

## Formule de Creff

Introduit un indice de corpulence :

- Gracile (mince) = 0.9
- Normal = 1
- Trapu (rond) = 1.1

`Poids idéal = (taille en cm – 100 + (âge / 10)) * 0.9 * indice de corpulence`

## Formule de Monnerot-Dumaine

Introduit la circonférence du poignet (CP).

`Poids idéal = (taille en cm – 100 + (4 * CP)) / 2`

### Exemple de rendu

<kbd>![](imc.png)</kbd>

### Source

[Urban girl](urbangirl-beaute.fr)
