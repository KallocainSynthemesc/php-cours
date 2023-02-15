<template>
  <div class="slide">
    <div class="heading">Array revisités - array_reverse()</div>
    <div class="content">
      <p>
        La méthode array_reverse() inverse l'ordre des éléments d'un tableau.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$fruits</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Banana&quot;</span>, <span style="background-color: #fff0f0">&quot;Orange&quot;</span>, <span style="background-color: #fff0f0">&quot;Apple&quot;</span>, <span style="background-color: #fff0f0">&quot;Mango&quot;</span>);
            <span style="color: #996633">$fruits</span> <span style="color: #333333">=</span> <span style="color: #007020">array_reverse</span>(<span style="color: #996633">$fruits</span>);
            <span style="color: #007020">print_r</span>(<span style="color: #996633">$fruits</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
