<template>
  <div class="slide">
    <div class="heading">Strings revisités - strpos</div>
    <div class="content">
      <p>
        Trouver la position de la première occurrence d'une sous-chaîne dans une
        chaîne de caractères. C'est utile pour savoir si une chaîne de
        caractères contient une autre chaîne de caractères.
      </p>
      <p><b>Syntax:</b></p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        ><span style="color: #007020">strpos</span>(string <span style="color: #996633">$haystack</span>, string <span style="color: #996633">$needle</span>, int <span style="color: #996633">$offset</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>)<span style="color: #333333">:</span> int<span style="color: #333333">|</span><span style="color: #008800; font-weight: bold">false</span></pre>
      </div>
      <br />
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$text</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Bonjour le monde, bienvenue dans l&#39;univers.&quot;</span>;
            <span style="color: #996633">$findme</span>   <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;monde&#39;</span>;
            <span style="color: #996633">$pos</span> <span style="color: #333333">=</span> <span style="color: #007020">strpos</span>(<span style="color: #996633">$text</span>, <span style="color: #996633">$findme</span>);
            <span style="color: #008800; font-weight: bold">if</span> (<span style="color: #996633">$pos</span> <span style="color: #333333">===</span> <span style="color: #008800; font-weight: bold">false</span>) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne &#39;</span><span style="background-color: #eeeeee">$findme</span><span style="background-color: #fff0f0">&#39; n&#39;a pas été trouvée dans la chaîne &#39;</span><span style="background-color: #eeeeee">$text</span><span style="background-color: #fff0f0">&#39;.&quot;</span>;
            } <span style="color: #008800; font-weight: bold">else</span> {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;La chaîne de caractères &#39;</span><span style="background-color: #eeeeee">$findme</span><span style="background-color: #fff0f0">&#39; a été trouvée dans la chaîne de caractères &#39;</span><span style="background-color: #eeeeee">$text</span><span style="background-color: #fff0f0">&#39;&quot;</span>;
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot; et existe à la position </span><span style="background-color: #eeeeee">$pos</span><span style="background-color: #fff0f0">&quot;</span>;
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
