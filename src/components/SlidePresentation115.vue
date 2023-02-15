<template>
  <div class="slide">
    <div class="heading">break, continue</div>
    <div class="content">
      <p>
        <b>break: </b>Saute hors de la boucle la plus proche (au-delà de
        l'énoncé de la boucle).
      </p>

      <p>
        <b>continue: </b>Saut au sommet de la boucle la plus proche (à la ligne
        d'en-tête de la boucle).
      </p>

      <p>
        En tenant compte des instructions break et continue, le format général
        de la boucle while se présente comme suit ressemble à ceci :
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">while</span>(test){
              declarations
              <span style="color: #008800; font-weight: bold">if</span>( test){
                  <span style="color: #008800; font-weight: bold">break</span>; <span style="color: #888888">// Quitter la boucle maintenant, ignorer else si présent</span>
              }
              <span style="color: #008800; font-weight: bold">if</span> (test){
                  <span style="color: #008800; font-weight: bold">continue</span>; <span style="color: #888888">// Aller au début de la boucle maintenant, à test1</span>
              }
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
