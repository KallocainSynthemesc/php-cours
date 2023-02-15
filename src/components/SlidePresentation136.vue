<template>
  <div class="slide">
    <div class="heading">Array revisités - array_pop()</div>
    <div class="content">
      <p>
        La méthode array_pop() supprime (pop) le dernier élément d'un tableau.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$stack</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Orange&quot;</span>, <span style="background-color: #fff0f0">&quot;Banane&quot;</span>, <span style="background-color: #fff0f0">&quot;Apfel&quot;</span>, <span style="background-color: #fff0f0">&quot;Himbeere&quot;</span>);
            <span style="color: #996633">$fruit</span> <span style="color: #333333">=</span> <span style="color: #007020">array_pop</span>(<span style="color: #996633">$stack</span>);
            <span style="color: #007020">print_r</span>(<span style="color: #996633">$stack</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
