<template>
  <div class="slide">
    <div class="heading">Functions - Variable Parameters</div>
    <div class="content">
      <p>
        Pour déclarer une fonction avec un nombre variable d'arguments
        d'arguments, laissez le bloc de paramètres entièrement vide
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">getPreferences</span>()
            {
              <span style="color: #888888">// some code</span>
            }
          <span style="color: #557799">?&gt;</span></pre>
      </div>
      <p>
        PHP fournit trois fonctions que vous pouvez utiliser dans la fonction
        pour récupérer les paramètres passés à la fonction
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #996633">$array</span> <span style="color: #333333">=</span> <span style="color: #007020">func_get_args</span>();
          <span style="color: #996633">$count</span> <span style="color: #333333">=</span> <span style="color: #007020">func_num_args</span>();
          <span style="color: #996633">$value</span> <span style="color: #333333">=</span> <span style="color: #007020">func_get_arg</span>(argument_number);</pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
