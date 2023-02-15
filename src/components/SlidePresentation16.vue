<template>
  <div class="slide">
    <div class="heading">Comments</div>
    <div class="content">
      <p>
        Les commentaires de double-slash (//) sont le moyen le plus élémentaire
        de documenter votre code.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #75715e">&lt;?php</span>
          <span style="color: #75715e">// This is a comment</span>
          <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;Hello, World!&quot;</span><span style="color: #f8f8f2">;</span>
          <span style="color: #75715e">?&gt;</span></pre>
      </div>

      <p>
        Les commentaires peuvent être placés à la fin d'une ligne, et PHP
        ignorera le reste de la ligne
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #75715e">&lt;?php</span>
          <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;Hello, World!&quot;</span><span style="color: #f8f8f2">;</span> <span style="color: #75715e">// This is a comment</span>
          <span style="color: #75715e">?&gt;</span></pre>
      </div>

      <p>
        Un commentaire ne doit pas nécessairement être un texte qui explique le
        code, il peut également être utilisé pour empêcher PHP d'exécuter du
        code
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #75715e">&lt;?php</span>
          <span style="color: #75715e">//echo &quot;Hello, World!&quot;;</span>
          <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;Hello, World!&quot;</span><span style="color: #f8f8f2">;</span>
          <span style="color: #75715e">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
