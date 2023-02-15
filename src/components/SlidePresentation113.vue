<template>
  <div class="slide">
    <div class="heading">while Loops</div>
    <div class="content">
      <p>
        L'instruction while de PHP est la construction d'itération la plus
        générale du langage. En termes simples, elle exécute de manière répétée
        un bloc d'instructions (normalement indentées) tant qu'un test situé en
        haut de l'instruction continue d'être évalué à une valeur vraie. On
        l'appelle une "boucle" parce que le contrôle revient au début de
        l'instruction jusqu'à ce que le test devienne faux.
      </p>
      <div class="flex-container">
        <div style="width: 20%">
          <p><b>Format général</b></p>
        </div>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #008800; font-weight: bold">while</span> (test) { <span style="color: #888888">// Test en boucle</span>
              statements <span style="color: #888888">//Corps de la boucle</span>
            }</pre>
        </div>
      </div>
      <br />
      <div class="flex-container">
        <div style="width: 20%">
          <p><b>Exemple</b></p>
        </div>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">while</span>(<span style="color: #008800; font-weight: bold">True</span>){
              <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Here we are now </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\r\n</span><span style="background-color: #fff0f0">&quot;</span>;
            }
            <span style="color: #557799">?&gt;</span></pre>
        </div>
      </div>
      <img
        src="../assets/illustrations/kurtcobain.svg"
        class="html-css-logo"
        style="width: 40%; left: 57%; top: 62%; height: unset"
      />
    </div>
  </div>
</template>

<style scoped></style>
