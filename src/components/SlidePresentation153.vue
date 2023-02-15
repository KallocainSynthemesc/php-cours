<template>
  <div class="slide">
    <div class="heading">Callback - usort()</div>
    <div class="content">
      <p>
        Nous pouvons avoir plus de contrôle sur la façon dont nous trions
        lorsque nous utilisons usort() et passons un callback dans la fonction.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>

            <span style="color: #996633">$fruits</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Banana&quot;</span>, <span style="background-color: #fff0f0">&quot;Apple&quot;</span>, <span style="background-color: #fff0f0">&quot;Ananas&quot;</span>, <span style="background-color: #fff0f0">&quot;Blueberry&quot;</span>, <span style="background-color: #fff0f0">&quot;Mango&quot;</span>);

            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">compare</span>(<span style="color: #996633">$a</span>, <span style="color: #996633">$b</span>) {
                <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">strcmp</span>(<span style="color: #996633">$b</span>, <span style="color: #996633">$a</span>);
            }

            <span style="color: #007020">usort</span>(<span style="color: #996633">$fruits</span>, <span style="background-color: #fff0f0">&#39;compare&#39;</span>);
            <span style="color: #007020">print_r</span>(<span style="color: #996633">$fruits</span>)
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
