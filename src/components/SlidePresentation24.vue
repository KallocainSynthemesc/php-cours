<template>
  <div class="slide">
    <div class="heading">Data Types - Integers</div>
    <div class="content">
      <div style="overflow-y: scroll; height: 100%">
        <p>
          En PHP, les Integers sont des nombres entiers nuls, positifs ou
          négatifs, sans partie fractionnaire et ayant une précision illimitée,
          par exemple 0, 100, -10. Les éléments suivants sont des littéraux
          entiers valides en PHP.
        </p>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
                    <span style="color: #0000ff">&lt;?php</span>
                    $zero = 0;
                    $hundred = 100;
                    $minusTen = -10;
                    <span style="color: #0000ff">?&gt;</span></pre>
        </div>

        <p>
          Les nombres entiers peuvent être des valeurs binaires, octales et
          hexadécimales
        </p>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #0000ff">&lt;?php</span>
            $binary = 0b11011000 ; <span style="color: #008000">// Les littéraux binaires commencent par une tête 0b ou 0B, suivie de chiffres binaires (0-1).</span>
            <span style="color: #0000ff">echo</span> $binary ; <span style="color: #008000">// 216</span>
            <span style="color: #0000ff">echo</span> <span style="color: #a31515">&quot;\r\n&quot;</span> ;

            $octal = 012 ; <span style="color: #008000">// Les octaux commencent par un 0o ou 0O (zéro et la lettre o en minuscule ou en majuscule), suivi d&#39;une chaîne de chiffres (0-7).</span>
            <span style="color: #0000ff">echo</span> $octal ; <span style="color: #008000">// 10</span>
            <span style="color: #0000ff">echo</span> <span style="color: #a31515">&quot;\r\n&quot;</span> ;

            $hexadecimal = 0x12 ; <span style="color: #008000">// Les hexadécimaux commencent par un 0x ou 0X, suivi d&#39;une chaîne de chiffres hexadécimaux (0-9 et A-F).</span>
            <span style="color: #0000ff">echo</span> $hexadecimal ; <span style="color: #008000">// 18</span>
            <span style="color: #0000ff">?&gt;</span></pre>
        </div>
        <a
          href="https://www.rightlobemath.com/digitalabacus/abacus_rebuild.html"
          >decimal, </a
        ><a href="https://codepen.io/evanmags/full/ZNWMJW">binary, </a
        ><a href="https://codepen.io/jakealbaugh/full/MKdZrb">hex</a>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
