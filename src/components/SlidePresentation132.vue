<template>
  <div class="slide">
    <div class="heading">
      Strings revisités - substr
      <a href="https://www.jdoodle.com/php-online-editor/">(PHP version 7)</a>
    </div>
    <div class="content">
      <p>Même code que str_starts_with mais avec substr.</p>
      <p>Syntax:</p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        >substr(string <span style="color: #996633">$string</span>, int <span style="color: #996633">$offset</span>, <span style="color: #333333">?</span>int <span style="color: #996633">$length</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">null</span>)<span style="color: #333333">:</span> string</pre>
      </div>
      <p>Exemple:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$string</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Le renard paresseux a sauté par-dessus la clôture&#39;</span>;
            <span style="color: #008800; font-weight: bold">if</span> (substr(<span style="color: #996633">$string</span>, <span style="color: #0000DD; font-weight: bold">0</span>, <span style="color: #0000DD; font-weight: bold">2</span>) <span style="color: #333333">===</span> <span style="background-color: #fff0f0">&#39;Le&#39;</span>) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne commence par &#39;Le&#39;&quot;</span>;
            }
            <span style="color: #008800; font-weight: bold">if</span> (substr(<span style="color: #996633">$string</span>, <span style="color: #0000DD; font-weight: bold">0</span>, <span style="color: #0000DD; font-weight: bold">2</span>) <span style="color: #333333">===</span> <span style="background-color: #fff0f0">&#39;le&#39;</span>) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne de caractères commence par &#39;le&#39;&quot;</span>;
            } <span style="color: #008800; font-weight: bold">else</span> {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&#39;le&#39; n&#39;a pas été trouvé car la casse ne correspond pas&quot;</span>;
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
