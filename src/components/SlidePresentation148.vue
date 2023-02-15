<template>
  <div class="slide">
    <div class="heading">Array revisités - array_merge()</div>
    <div class="content">
      <p>
        La méthode array_merge() concatène deux tableaux ou plus. Elle renvoie
        un nouveau tableau, contenant les tableaux joints et ne modifie pas les
        tableaux existants.
      </p>
      <p>Exemple:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$arr1</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Cecilie&quot;</span>, <span style="background-color: #fff0f0">&quot;Lone&quot;</span>);
            <span style="color: #996633">$arr2</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Emil&quot;</span>, <span style="background-color: #fff0f0">&quot;Tobias&quot;</span>, <span style="background-color: #fff0f0">&quot;Linus&quot;</span>);
            <span style="color: #996633">$children</span> <span style="color: #333333">=</span> <span style="color: #007020">array_merge</span>(<span style="color: #996633">$arr1</span>, <span style="color: #996633">$arr2</span>);
            <span style="color: #007020">print_r</span>(<span style="color: #996633">$children</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
