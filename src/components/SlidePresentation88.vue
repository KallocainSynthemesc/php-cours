<template>
  <div class="slide">
    <div class="heading">Functions - La déclaration globale</div>
    <div class="content">
      <p>
        Le mot-clé global importe des variables de la portée globale dans la
        portée locale d'une fonction.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$X</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">88</span>; <span style="color: #888888">// Global X</span>
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$X</span>; <span style="color: #888888">// prints 88</span>

            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">func</span>() {
                <span style="color: #008800; font-weight: bold">global</span> <span style="color: #996633">$X</span>; <span style="color: #888888">// reference the global variable</span>
                <span style="color: #996633">$X</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">99</span>; <span style="color: #888888">// global X: en dehors de def</span>
            }

            func();
            <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$X</span>; <span style="color: #888888">// prints 99</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
