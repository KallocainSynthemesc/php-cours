<template>
  <div class="slide">
    <div class="heading">if/else Ternary Expression</div>
    <div class="content">
      <p>
        Parfois, les éléments d'une déclaration sont si simples qu'il semble
        exagéré de les répartir sur plusieurs lignes.
      </p>
      <p>
        PHP nous offre un format d'expression qui nous permet de faire des
        if/else dans une seule expression.
      </p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        >(Condition) <span style="color: #333333">?</span> (Statement1) <span style="color: #333333">:</span> (Statement2);</pre>
      </div>
      <p>Navigation exemple</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$direction</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Toulouse&quot;</span>;
            <span style="color: #996633">$result</span> <span style="color: #333333">=</span> <span style="color: #996633">$direction</span> <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&quot;Toulouse&quot;</span> <span style="color: #333333">?</span> <span style="background-color: #fff0f0">&quot;aller à gauche&quot;</span> <span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;aller à droite&quot;</span>;
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$result</span>;
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
