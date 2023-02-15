<template>
  <div class="slide">
    <div class="heading">Callback</div>
    <div class="content">
      <p>
        Un callback est une fonction passée comme argument à une autre fonction.
      </p>
      <p>Exemple:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">displayer</span>(<span style="color: #996633">$value</span>) {
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$value</span>;
            }

            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">calculator</span>(<span style="color: #996633">$num1</span>, <span style="color: #996633">$num2</span>, <span style="color: #996633">$callbackFunc</span>) {
              <span style="color: #996633">$sum</span> <span style="color: #333333">=</span> <span style="color: #996633">$num1</span> <span style="color: #333333">+</span> <span style="color: #996633">$num2</span>;
              <span style="color: #996633">$callbackFunc</span>(<span style="color: #996633">$sum</span>);
            }

            calculator(<span style="color: #0000DD; font-weight: bold">5</span>, <span style="color: #0000DD; font-weight: bold">5</span>, <span style="background-color: #fff0f0">&#39;displayer&#39;</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
