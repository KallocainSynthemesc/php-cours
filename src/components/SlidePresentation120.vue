<template>
  <div class="slide">
    <div class="heading">For Loop</div>
    <div class="content">
      <p>L'instruction for crée une boucle avec 3 expressions facultatives</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #000080; font-weight: bold">for</span> (expression <span style="color: #0000FF">1</span>; expression <span style="color: #0000FF">2</span>; expression <span style="color: #0000FF">3</span>) {
            <span style="color: #008800; font-style: italic">// code block to be executed</span>
          }</pre>
      </div>
      <p>
        <b>L'expression 1</b> est exécutée (une fois) avant l'exécution du bloc
        de code.
      </p>
      <p>
        <b>L'expression 2</b> définit la condition d'exécution du bloc de code.
      </p>
      <p>
        <b>L'expression 3</b> est exécutée (à chaque fois) après l'exécution du
        bloc de code.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
          <span style="color: #008800; font-weight: bold">for</span> (<span style="color: #996633">$counter</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>; <span style="color: #996633">$counter</span> <span style="color: #333333">&lt;</span> <span style="color: #0000DD; font-weight: bold">10</span>; <span style="color: #996633">$counter</span><span style="color: #333333">++</span>) {
            <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Counter is </span><span style="background-color: #eeeeee">$counter</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
          }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
