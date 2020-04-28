<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Coding house</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link id="cssTheme" rel="stylesheet" href="css/themes/default.css" title="defaultStyle"/>
    <link rel="stylesheet" href="css/app.scss"/>
    <link rel="stylesheet" href="css/pages/houses.scss"/>
</head>

<body>

@include("header")

<div class="container">

  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <div class="card" id="Crackend_card">
    <div class="cardContent">
      <h3 class="title">Crack'End</h3>
      <div class="bar">
        <div class="emptybar"></div>
        <div class="filledbar"></div>
      </div>
      <div class="houseInfos">
        <section class="houseStory">
          <p>
            <img class="houseIconStory" src="img/logoCrackend.png" alt="logo de la maison">
          </p>
          <h2 class="secretTitle">Histoire</h2>
          <p class="story secret">
              Passez entre les mailles du filet, c'est leur spécialité, et les bons plans, c'est leur passion.
              Besoin d'un code promo ? Pas de problème, ils en ont tout un répertoire !
              Envie d'optimiser votre machine ? Un Crackend sera forcément vous éclairer.
              Des rumeurs disent qu'ils arrivent à avoir gratuitement certains logiciel payants :O
          </p>
        </section>
        <section class="houseMembers secret">
          <h2>Membres</h2>

          <form class="houseRankForm">
            <select>
              <option>Ordre alphabétique</option>
              <option>Nombre de points</option>
              <option>Nombre de défis gagnés</option>
            </select>
            <button>Valider</button>
          </form>

          <div class="listMembers">
            <p>
              <br/> 1. blibli
              <br/> 2. blublu
              <br> 3. blibli
              <br> 4. blublu
              <br> 5. blibli
              <br/> 6. blublu
              <br/> 7. blibli
              <br/> 8. blublu
              <br/> 9. blibli
              <br/> 10. Anticonstitut
            </p>
            <p>
              <br/> 1. blibli
              <br/> 2. blublu
              <br> 3. blibli
              <br> 4. blublu
              <br> 5. blibli
              <br/> 6. blublu
              <br/> 7. blibli
              <br/> 8. blublu
              <br/> 9. blibli
              <br/> 10. Anticonstitutio
            </p>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div class="card" id="Gitsune_card">
    <h3 class="title">Gitsune</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="houseInfos">
      <section class="houseStory">
        <p>
          <img class="houseIconStory" src="img/logoGitsune.png" alt="logo de la maison">
        </p>
        <h2 class="secretTitle">Histoire</h2>
        <p class="story secret">
            L'organiation, ça c'est important !
            Avec les Gitsune tout est toujours plus simple.
            Certains disent qu'ils ont le pouvoir de retourner dans le temps...
        </p>
      </section>
      <section class="houseMembers secret">
        <h2>Membres</h2>

        <form class="houseRankForm">
          <select>
            <option>Ordre alphabétique</option>
            <option>Nombre de points</option>
            <option>Nombre de défis gagnés</option>
          </select>
          <button>Valider</button>
        </form>

        <div class="listMembers">
          <p>
            <br/> 1. blibli
            <br/> 2. blublu
            <br> 3. blibli
            <br> 4. blublu
            <br> 5. blibli
            <br/> 6. blublu
            <br/> 7. blibli
            <br/> 8. blublu
            <br/> 9. blibli
            <br/> 10. Anticonstitut
          </p>
          <p>
            <br/> 1. blibli
            <br/> 2. blublu
            <br> 3. blibli
            <br> 4. blublu
            <br> 5. blibli
            <br/> 6. blublu
            <br/> 7. blibli
            <br/> 8. blublu
            <br/> 9. blibli
            <br/> 10. Anticonstitutio
          </p>
        </div>
      </section>
    </div>
  </div>
  <div class="card" id="PhoeniXMl_Card">
    <h3 class="title">PhoeniXML</h3>
    <div class="bar">
      <div class="filledbar"></div>
      <div class="emptybar"></div>
    </div>
    <section class="houseInfos">
      <section class="houseStory">
        <p>
          <img class="houseIconStory" src="img/logoPhoenixml.png" alt="logo de la maison">
        </p>
        <h2 class="secretTitle">Histoire</h2>
        <p class="story secret">
            Le web c'est leur spécialité.
            Ils leur arrive parfois de passer des journées à survoler des pages webs.
            Ils ont soit disant la capacité de controller les pages web et changer leurs apparances selon leurs volontés.
        </p>
      </section>
      <section class="houseMembers secret">

        <h2>Membres</h2>

        <form class="houseRankForm">
          <select>
            <option>Ordre alphabétique</option>
            <option>Nombre de points</option>
            <option>Nombre de défis gagnés</option>
          </select>
          <button>Valider</button>
        </form>

        <div class="listMembers">
          <p>
            <br/> 1. blibli
            <br/> 2. blublu
            <br> 3. blibli
            <br> 4. blublu
            <br> 5. blibli
            <br/> 6. blublu
            <br/> 7. blibli
            <br/> 8. blublu
            <br/> 9. blibli
            <br/> 10. Anticonstitut
          </p>
          <p>
            <br/> 1. blibli
            <br/> 2. blublu
            <br> 3. blibli
            <br> 4. blublu
            <br> 5. blibli
            <br/> 6. blublu
            <br/> 7. blibli
            <br/> 8. blublu
            <br/> 9. blibli
            <br/> 10. Anticonstitutio
          </p>
        </div>
      </section>
    </section>
  </div>
</div>

@include("footer")

</body>

</html>
