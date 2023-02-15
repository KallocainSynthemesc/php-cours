<template>
  <div class="slide">
    <div class="heading">
      Strings revisités - str_starts_with
      <a href="https://www.jdoodle.com/php-online-editor/">(PHP version 8)</a>
    </div>
    <div class="content">
      <p>
        Vérifie si une chaîne de caractères commence par une sous-chaîne donnée.
      </p>
      <p>Syntax:</p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        >str_starts_with(string <span style="color: #996633">$haystack</span>, string <span style="color: #996633">$needle</span>)<span style="color: #333333">:</span> bool</pre>
      </div>
      <p>Exemple:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$string</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Le renard paresseux a sauté par-dessus la clôture&#39;</span> ;
            <span style="color: #008800; font-weight: bold">if</span> (str_starts_with(<span style="color: #996633">$string</span>, <span style="background-color: #fff0f0">&#39;Le&#39;</span>)) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne commence par &#39;Le&#39;&quot;</span> ;
            }
            <span style="color: #008800; font-weight: bold">if</span> (str_starts_with(<span style="color: #996633">$string</span>, <span style="background-color: #fff0f0">&#39;le&#39;</span>)) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne de caractères commence par &#39;le&#39;&quot;</span> ;
            } <span style="color: #008800; font-weight: bold">else</span> {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&#39;le&#39; n&#39;a pas été trouvé car la casse ne correspond pas&quot;</span> ;
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
