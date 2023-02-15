<template>
  <div class="slide">
    <div class="heading">Data Types - String - parsing performance</div>
    <div class="content">
      <p>
        Les règles du style "performance maximale du code" sont les suivantes
      </p>
      <br />
      <p>
        <b>1:</b> Utilisez des chaînes de caractères à double
        <span style="color: #777bb3ff">guillemet</span> pour la concaténation.
      </p>
      <p>
        <b>2:</b> Mettez vos variables dans la notation "Ceci est une
        <span style="color: #777bb3ff">{$variable}</span>", car c'est la méthode
        la plus <span style="color: #777bb3ff">rapide</span> qui permet encore
        des expansions <span style="color: #777bb3ff">complexes</span>.
      </p>
      <p>
        <b>3:</b> N'hésitez pas à utiliser des chaînes entre
        <span style="color: #777bb3ff">guillemets</span> pour les chaînes
        <b><span style="color: #777bb3ff">TOTALEMENT</span></b> littérales.
        Exemple: 'This is a literal string'. Aucune variable n'est interprétée
        et injectée dans la chaîne.
      </p>
    </div>
  </div>
</template>

<style scoped></style>
