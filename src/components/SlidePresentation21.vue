<template>
  <div class="slide">
    <div class="heading">Statement</div>
    <div class="content">
      <p>
        Une instruction (statement) est un ensemble de code PHP qui fait quelque
        chose
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #0000ff">&lt;?php</span>
          <span style="color: #0000ff">echo</span> <span style="color: #a31515">&quot;Hello, world&quot;</span>;
          myfunc(42, <span style="color: #a31515">&quot;Kilian&quot;</span>);
          $a = 1;
          $name = <span style="color: #a31515">&quot;Schropp&quot;</span>;
          $b = $a / 25.0;
          <span style="color: #0000ff">if</span> ($a == $b) { <span style="color: #0000ff">echo</span> <span style="color: #a31515">&quot;Rhyme? And Reason?&quot;</span>; } 
          <span style="color: #0000ff">?&gt;</span></pre>
      </div>
      <p>
        PHP utilise les
        <span style="color: #777bb3ff">points-virgules</span> pour séparer les
        déclarations simples.
      </p>
      <p>
        Une instruction composée qui utilise des
        <span style="color: #777bb3ff">accolades</span> pour marquer un bloc de
        code, tel qu'un test conditionnel ou une boucle, n'a pas besoin de
        point-virgule après l'accolade fermante.
      </p>
    </div>
  </div>
</template>

<style scoped></style>
