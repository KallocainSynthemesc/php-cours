<template>
  <div class="slide">
    <div class="heading">Creating Arrays</div>
    <div class="content">
      <p>Il existe deux façons de créer des tableaux indexés :</p>
      <p>
        L'indice peut être attribué automatiquement (l'indice commence toujours
        à 0), comme ceci :
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$cars</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Volvo&quot;</span>, <span style="background-color: #fff0f0">&quot;BMW&quot;</span>, <span style="background-color: #fff0f0">&quot;Toyota&quot;</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <p>ou l'index peut être attribué manuellement :</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$cars</span>[<span style="color: #0000DD; font-weight: bold">0</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Volvo&quot;</span>;
            <span style="color: #996633">$cars</span>[<span style="color: #0000DD; font-weight: bold">1</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;BMW&quot;</span>;
            <span style="color: #996633">$cars</span>[<span style="color: #0000DD; font-weight: bold">2</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Toyota&quot;</span>; 
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <img
        src="../assets/illustrations/knitting.svg"
        class="html-css-logo"
        style="left: 50%; top: 55%; height: 40%; width: 40%"
      />
    </div>
  </div>
</template>

<style scoped></style>
