<template>
  <div class="slide">
    <div class="heading">Opérateurs arithmétiques</div>
    <div class="content">
      <p>Solution pour l'exo modulo:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
        <span style="color: #557799">&lt;?php</span>
          <span style="color: #996633">$hours</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">40</span>;
          <span style="color: #996633">$clock</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">12</span>;
          <span style="color: #996633">$time</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>;
          <span style="color: #996633">$time</span> <span style="color: #333333">=</span> <span style="color: #996633">$hours</span> <span style="color: #333333">%</span> <span style="color: #996633">$clock</span>;
          <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;it is &quot;</span> <span style="color: #333333">.</span> <span style="color: #996633">$time</span> <span style="color: #333333">.</span><span style="background-color: #fff0f0">&quot; o&#39;clock&quot;</span>;
        <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
