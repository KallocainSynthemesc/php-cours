<template>
  <div class="slide">
    <div class="heading">Création de variables</div>
    <div class="content">
      <p>
        PHP n'a pas de commande pour déclarer une variable. Une variable est
        créée au moment où vous lui attribuez une valeur pour la première fois.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                  <span style="color: #0000ff">&lt;?php</span>
                  $x = 5;
                  $y = <span style="color: #a31515">&quot;John&quot;</span>;
                  <span style="color: #008000">// est la même chose que</span>
                  $y = <span style="color: #a31515">&#39;John&#39;</span>;
                  <span style="color: #0000ff">echo</span> $x;
                  <span style="color: #0000ff">echo</span> $y;
                  <span style="color: #0000ff">?&gt;</span></pre>
      </div>

      <p>Les noms de variables sont sensibles à la casse</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #0000ff">&lt;?php</span>
          $a = 4;
          $A = <span style="color: #a31515">&quot;Sally&quot;</span>;
          <span style="color: #008000">// A ne remplacera pas a </span>
          <span style="color: #0000ff">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
