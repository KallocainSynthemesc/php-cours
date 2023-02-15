<template>
  <div class="slide">
    <div class="heading">Array count/length</div>
    <div class="content">
      <p>
        La function count() spécifie le nombre d'éléments du array. Sa valeur
        est supérieure d'une unité à l'indice le plus élevé du array
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$a</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(); <span style="color: #888888">// =&gt; 0 : la liste n&#39;a pas d&#39;éléments</span>
            <span style="color: #996633">$b</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;a&quot;</span>,<span style="background-color: #fff0f0">&quot;b&quot;</span>,<span style="background-color: #fff0f0">&quot;c&quot;</span>); <span style="color: #888888">// =&gt; 3 : l&#39;indice le plus élevé est 2, la longueur est 3</span>
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #007020">count</span>(<span style="color: #996633">$a</span>) <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\r\n</span><span style="background-color: #fff0f0">&quot;</span>; <span style="color: #888888">//0</span>
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #007020">count</span>(<span style="color: #996633">$b</span>); <span style="color: #888888">//3</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <img
        src="../assets/illustrations/ruler.svg"
        class="html-css-logo"
        style="left: 3%; top: 65%; height: 40%; width: 105%"
      />
    </div>
  </div>
</template>

<style scoped></style>
