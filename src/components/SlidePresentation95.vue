<template>
  <div class="slide">
    <div class="heading">Functions - Paramètre Valeur par défaut</div>
    <div class="content">
      <p>
        Si nous appelons la fonction sans argument, elle utilise la valeur par
        défaut
      </p>
      <div class="flex-container">
        <div>
          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
                <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">multiply</span>(<span style="color: #996633">$x</span>, <span style="color: #996633">$y</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span>) {
                  <span style="color: #008800; font-weight: bold">return</span> <span style="color: #996633">$x</span> <span style="color: #333333">*</span> <span style="color: #996633">$y</span>;
                }
                <span style="color: #008800; font-weight: bold">echo</span> multiply(<span style="color: #0000DD; font-weight: bold">8</span>);
              <span style="color: #557799">?&gt;</span></pre>
          </div>
        </div>
        <div>
          <img
            src="../assets/illustrations/defaultParameter.svg"
            style="width: 100%"
          />
        </div>
      </div>
      <br />
    </div>
  </div>
</template>

<style scoped></style>
