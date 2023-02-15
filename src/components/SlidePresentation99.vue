<template>
  <div class="slide">
    <div class="heading">if Tests - Format général</div>
    <div class="content">
      <p>
        Lorsque l'instruction if s'exécute, PHP exécute le bloc de code associé
        au premier test dont l'évaluation est vraie, ou le bloc else si tous les
        tests sont faux. La forme générale d'une instruction if ressemble à ceci
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">if</span> (test1) {
              <span style="color: #888888">// if test</span>
              statements1 <span style="color: #888888">// bloc associé</span>
            } <span style="color: #008800; font-weight: bold">elseif</span> (test2) {
              <span style="color: #888888">// Optionnel elifs</span>
              statements2;
            } <span style="color: #008800; font-weight: bold">else</span> {
              <span style="color: #888888">// Optionnel else</span>
              statements3;
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
