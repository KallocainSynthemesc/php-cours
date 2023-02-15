<template>
  <div class="slide">
    <div class="heading">Strings revisités - String as array</div>
    <div class="content">
      <p>
        Les chaînes de caractères peuvent être accédées et modifiées comme s'il
        s'agissait de tableaux.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #888888">// Obtenez le premier caractère d&#39;une chaîne de caractères</span>
            <span style="color: #996633">$str</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Ceci est un test.&#39;</span> ;
            <span style="color: #996633">$first</span> <span style="color: #333333">=</span> <span style="color: #996633">$str</span>[<span style="color: #0000DD; font-weight: bold">0</span>] ;

            <span style="color: #888888">// Récupère le troisième caractère d&#39;une chaîne de caractères</span>
            <span style="color: #996633">$third</span> <span style="color: #333333">=</span> <span style="color: #996633">$str</span>[<span style="color: #0000DD; font-weight: bold">2</span>] ;

            <span style="color: #888888">// Récupère le dernier caractère d&#39;une chaîne de caractères.</span>
            <span style="color: #996633">$str</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;This is still a test.&#39;</span> ;
            <span style="color: #996633">$last</span> <span style="color: #333333">=</span> <span style="color: #996633">$str</span>[<span style="color: #007020">strlen</span>(<span style="color: #996633">$str</span>)<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>] ;

            <span style="color: #888888">// Modifie le dernier caractère d&#39;une chaîne de caractères</span>
            <span style="color: #996633">$str</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Regarde la mer&#39;</span> ;
            <span style="color: #996633">$str</span>[<span style="color: #007020">strlen</span>(<span style="color: #996633">$str</span>)<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;e&#39;</span> ;
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
