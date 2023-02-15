<template>
  <div class="slide">
    <div class="heading">Associative Arrays</div>
    <div class="content">
      <div style="width: 100%">
        <p>
          Les Associative Arrays sont utilisés pour stocker des valeurs de
          données dans des paires clé:valeur. Un Associative Array est une
          collection qui est ordonnée, modifiable et qui ne permet pas les
          doublons.
        </p>
        <p>Il existe deux façons de créer un tableau associatif :</p>
      </div>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                    <span style="color: #557799">&lt;?php</span>
                      <span style="color: #996633">$car</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;brand&quot;</span><span style="color: #333333">=&gt;</span><span style="background-color: #fff0f0">&quot;Ford&quot;</span>, <span style="background-color: #fff0f0">&quot;model&quot;</span><span style="color: #333333">=&gt;</span><span style="background-color: #fff0f0">&quot;Mustang&quot;</span>, <span style="background-color: #fff0f0">&quot;year&quot;</span><span style="color: #333333">=&gt;</span><span style="background-color: #fff0f0">&quot;2001&quot;</span>);
                    <span style="color: #557799">?&gt;</span></pre>
      </div>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$car</span>[<span style="background-color: #fff0f0">&#39;brand&#39;</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Ford&quot;</span>;
            <span style="color: #996633">$car</span>[<span style="background-color: #fff0f0">&#39;model&#39;</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Mustang&quot;</span>;
            <span style="color: #996633">$car</span>[<span style="background-color: #fff0f0">&#39;year&#39;</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;2001&quot;</span>; 
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <img
        src="../assets/illustrations/ford.svg"
        class="html-css-logo"
        style="left: 60%; top: 51%"
      />
      <img
        src="../assets/illustrations/Ford_Mustang.svg"
        class="html-css-logo"
        style="left: 50%; top: 72%; width: 40%"
      />
    </div>
  </div>
</template>

<style scoped></style>
