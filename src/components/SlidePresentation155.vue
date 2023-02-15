<template>
  <div class="slide">
    <div class="heading">Callback - array_filter()</div>
    <div class="content">
      <p>
        La méthode array_filter() crée un nouveau tableau rempli d'éléments qui
        passent un test fourni par une fonction.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$ages</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="color: #0000DD; font-weight: bold">32</span>, <span style="color: #0000DD; font-weight: bold">33</span>, <span style="color: #0000DD; font-weight: bold">16</span>, <span style="color: #0000DD; font-weight: bold">40</span>);
            <span style="color: #996633">$result</span> <span style="color: #333333">=</span> <span style="color: #007020">array_filter</span>(<span style="color: #996633">$ages</span>, <span style="background-color: #fff0f0">&#39;checkAdult&#39;</span>);

            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">checkAdult</span>(<span style="color: #996633">$age</span>) {
            <span style="color: #008800; font-weight: bold">return</span> <span style="color: #996633">$age</span> <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">18</span>;
            }

            <span style="color: #007020">print_r</span>(<span style="color: #996633">$result</span>);
          <span style="color: #557799">?&gt;</span> 
          </pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
