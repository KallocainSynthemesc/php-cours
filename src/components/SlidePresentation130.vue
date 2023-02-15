<template>
  <div class="slide">
    <div class="heading">Strings revisités - explode()</div>
    <div class="content">
      <p>
        La méthode explode() divise une chaîne de caractères en un tableau de
        sous-chaînes.
      </p>
      <br />
      <p>Syntax:</p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        ><span style="color: #007020">explode</span>(separator,string,limit) </pre>
      </div>
      <br />
      <p>Exemple:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$text</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Comment ça va aujourd&#39;hui ?&quot;</span>;
            <span style="color: #996633">$words</span> <span style="color: #333333">=</span> <span style="color: #007020">explode</span>(<span style="background-color: #fff0f0">&quot; &quot;</span>,<span style="color: #996633">$text</span>);
            <span style="color: #996633">$word</span> <span style="color: #333333">=</span> <span style="color: #996633">$words</span>[<span style="color: #0000DD; font-weight: bold">1</span>];
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$word</span>;
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
