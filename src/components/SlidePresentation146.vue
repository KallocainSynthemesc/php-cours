<template>
  <div class="slide">
    <div class="heading">Array revisités - in_array()</div>
    <div class="content">
      <p>
        La méthode in_array() renvoie un résultat positif si un tableau contient
        une valeur spécifiée. Elle renvoie false si la valeur n'est pas trouvée.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$fruits</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Banana&quot;</span>, <span style="background-color: #fff0f0">&quot;Orange&quot;</span>, <span style="background-color: #fff0f0">&quot;Apple&quot;</span>, <span style="background-color: #fff0f0">&quot;Mango&quot;</span>);
            <span style="color: #996633">$result</span> <span style="color: #333333">=</span> <span style="color: #007020">in_array</span>(<span style="background-color: #fff0f0">&quot;Mango&quot;</span>, <span style="color: #996633">$fruits</span>);
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$result</span>; <span style="color: #888888">//true</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <br />
      <p>
        Si le troisième paramètre, strict, vaut true, la fonction in_array()
        vérifiera également les types suivants
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$a</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&#39;1.10&#39;</span>, <span style="color: #6600EE; font-weight: bold">12.4</span>, <span style="color: #6600EE; font-weight: bold">1.13</span>);
            <span style="color: #008800; font-weight: bold">if</span> (<span style="color: #007020">in_array</span>(<span style="color: #6600EE; font-weight: bold">1.13</span>, <span style="color: #996633">$a</span>, <span style="color: #008800; font-weight: bold">true</span>)) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;1.13 found with strict check</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
