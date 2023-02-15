<template>
  <div class="slide">
    <div class="heading">Prédominance des opérateurs logiques</div>
    <div class="content">
      <table class="tg" style="height: 50%">
        <tbody>
          <tr>
            <td class="tg-0lax">$a or $b and $c</td>
            <td class="tg-0lax">signifie</td>
            <td class="tg-0lax">$a or ($b and $c)</td>
          </tr>
          <tr>
            <td class="tg-0lax">$a and $b or $c and $d</td>
            <td class="tg-0lax">signifie</td>
            <td class="tg-0lax">($a and $b) or ($c and $d)</td>
          </tr>
          <tr>
            <td class="tg-0lax">$a and $b and $c or $d</td>
            <td class="tg-0lax">signifie</td>
            <td class="tg-0lax">(($a and $b) and $c) or $d</td>
          </tr>
          <tr>
            <td class="tg-0lax">! $a and $b or $c</td>
            <td class="tg-0lax">signifie</td>
            <td class="tg-0lax">((! $a) and $b) or $c</td>
          </tr>
        </tbody>
      </table>
      <br />
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #996633">$a</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">True</span>;
            <span style="color: #996633">$b</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">False</span>;
            <span style="color: #996633">$c</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">True</span>;
            <span style="color: #007020">var_dump</span>(<span style="color: #996633">$a</span> <span style="color: #008800; font-weight: bold">or</span> <span style="color: #996633">$b</span> <span style="color: #008800; font-weight: bold">and</span> <span style="color: #996633">$c</span>); <span style="color: #888888">//True</span>
            <span style="color: #007020">var_dump</span>(<span style="color: #996633">$a</span> <span style="color: #008800; font-weight: bold">or</span> (<span style="color: #996633">$b</span> <span style="color: #008800; font-weight: bold">and</span> <span style="color: #996633">$c</span>)); <span style="color: #888888">//True (même instruction que ci-dessus)</span>
            <span style="color: #007020">var_dump</span>(<span style="color: #333333">!</span> <span style="color: #996633">$a</span> <span style="color: #008800; font-weight: bold">and</span> <span style="color: #996633">$b</span> <span style="color: #008800; font-weight: bold">or</span> <span style="color: #996633">$c</span>); <span style="color: #888888">//True</span>
            <span style="color: #007020">var_dump</span>(((<span style="color: #333333">!</span> <span style="color: #996633">$a</span>) <span style="color: #008800; font-weight: bold">and</span> <span style="color: #996633">$b</span>) <span style="color: #008800; font-weight: bold">or</span> <span style="color: #996633">$c</span>); <span style="color: #888888">//True (même instruction que ci-dessus)</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
