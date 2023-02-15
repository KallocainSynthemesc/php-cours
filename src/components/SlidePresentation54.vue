<template>
  <div class="slide">
    <div class="heading">Lecture et écriture des éléments d'une array</div>
    <div class="content">
      <p>
        Vous accédez à un élément d'une liste en utilisant l'opérateur
        <b>[ ]</b>. Une référence au array doit apparaître à gauche des
        crochets. Une expression arbitraire dont la valeur est un nombre
        <b>entier non négatif</b> doit se trouver à l'intérieur des parenthèses.
        Vous pouvez utiliser cette syntaxe pour lire et écrire la valeur d'un
        élément d'une liste
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
        <span style="color: #557799">&lt;?php</span>
          <span style="color: #996633">$a</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;monde&quot;</span>, <span style="background-color: #fff0f0">&quot;bonjour&quot;</span>, <span style="background-color: #fff0f0">&quot;mec&quot;</span>); <span style="color: #888888">// Commencez par créer une liste</span>
          <span style="color: #996633">$value</span> <span style="color: #333333">=</span> <span style="color: #996633">$a</span>[<span style="color: #0000DD; font-weight: bold">0</span>];  <span style="color: #888888">// Lecture de l&#39;élément index 0</span>
          <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$value</span> <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\r\n</span><span style="background-color: #fff0f0">&quot;</span>;

          <span style="color: #996633">$i</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>;
          <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$a</span>[<span style="color: #996633">$i</span>] <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\r\n</span><span style="background-color: #fff0f0">&quot;</span>; <span style="color: #888888">//bonjour</span>
          <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$a</span>[<span style="color: #996633">$i</span> <span style="color: #333333">+</span> <span style="color: #0000DD; font-weight: bold">1</span>] <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\r\n</span><span style="background-color: #fff0f0">&quot;</span>; <span style="color: #888888">//mec</span>
          
          <span style="color: #996633">$a</span>[<span style="color: #0000DD; font-weight: bold">2</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;changement&quot;</span>;
          <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$a</span>[<span style="color: #0000DD; font-weight: bold">2</span>]; <span style="color: #888888">//changement</span>
        <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
