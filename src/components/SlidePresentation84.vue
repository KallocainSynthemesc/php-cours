<template>
  <div class="slide">
    <div class="heading">Functions - Calls/Appelle</div>
    <div class="content">
      <p>
        L'instruction <b>function</b> crée une fonction mais ne l'appelle pas.
        Après l'exécution de l'instruction <b>function</b>, vous pouvez appeler
        (exécuter) la fonction dans votre programme en ajoutant des parenthèses
        après le nom de la fonction
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">times</span>(<span style="color: #996633">$x</span>, <span style="color: #996633">$y</span>){ <span style="color: #888888">// Créer et attribuer une fonction</span>
            <span style="color: #008800; font-weight: bold">return</span> <span style="color: #996633">$x</span> <span style="color: #333333">*</span> <span style="color: #996633">$y</span>; 
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <br />
      <p>
        Les parenthèses peuvent éventuellement contenir un ou plusieurs
        arguments d'objet, qui seront passés (assignés) aux noms de l'en-tête de
        la fonction
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          times(2, 4) <span style="color: #008000">// Arguments in parentheses</span>
          <span style="color: #008000">//La fonction renvoie 8</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
