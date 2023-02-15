<template>
  <div class="slide">
    <div class="heading">Opérateurs de comparaison - spaceship</div>
    <div class="content">
      <div class="flex-container">
        <div style="width: 57%">
          <p><b>Cet opérateur &lt;=&gt; offre une comparaison combinée</b></p>
          <p>- Retourne 0 si les valeurs de part et d'autre sont égales</p>
          <p>- Retourne 1 si la valeur de gauche est supérieure</p>
          <p>- Retourne -1 si la valeur de droite est plus grande</p>

          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
                <span style="color: #888888">// Comparing Integers</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #0000DD; font-weight: bold">1</span> <span style="color: #333333">&lt;=&gt;</span> <span style="color: #0000DD; font-weight: bold">1</span>; <span style="color: #888888">// outputs 0</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #0000DD; font-weight: bold">3</span> <span style="color: #333333">&lt;=&gt;</span> <span style="color: #0000DD; font-weight: bold">4</span>; <span style="color: #888888">// outputs -1</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #0000DD; font-weight: bold">4</span> <span style="color: #333333">&lt;=&gt;</span> <span style="color: #0000DD; font-weight: bold">3</span>; <span style="color: #888888">// outputs 1</span>

                <span style="color: #888888">// String Comparison</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;a&quot;</span> <span style="color: #333333">&lt;=&gt;</span> <span style="background-color: #fff0f0">&quot;a&quot;</span>; <span style="color: #888888">// outputs 0 </span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;m&quot;</span> <span style="color: #333333">&lt;=&gt;</span> <span style="background-color: #fff0f0">&quot;y&quot;</span>; <span style="color: #888888">// outputs -1</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;y&quot;</span> <span style="color: #333333">&lt;=&gt;</span> <span style="background-color: #fff0f0">&quot;c&quot;</span>; <span style="color: #888888">// outputs 1</span>
              <span style="color: #557799">?&gt;</span></pre>
          </div>
        </div>
        <div style="width: 42%">
          <img src="../assets/illustrations/range.svg" style="width: 95%" />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
