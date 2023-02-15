<template>
  <div class="slide">
    <div class="heading">Pourquoi PHP</div>
    <div class="content">
      <p>
        Lorsque PHP analyse un fichier, il recherche les balises ouvrantes et
        fermantes, c'est-à-dire &lt;?php et ?&gt;, qui indiquent à PHP de
        commencer ou d'arrêter d'interpréter le code intermédiaire.
      </p>
      <div class="flex-container">
        <div style="width: 70%">
          <img src="../assets/illustrations/parser.svg" style="width: 100%" />
        </div>
        <div style="width: 25%">
          <p>&lt;? ... ?&gt;:</p>
          <p style="color: red">Non conseillé</p>
          <br />
          <p>&lt;?php ... ?&gt; :</p>
          <p style="color: green">conseillé</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
