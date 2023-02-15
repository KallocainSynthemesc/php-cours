<template>
  <div class="slide">
    <div class="heading">Data Types - Strings</div>
    <div class="content">
      <div style="overflow-y: scroll; height: 100%">
        <p>
          Les Strings (chaînes de caractères) sont le type de PHP pour
          représenter du texte.
        </p>
        <p>
          En PHP, les chaînes de caractères sont entourées soit de guillemets
          simples, soit de guillemets doubles. 'bonjour' est identique à
          "bonjour".
        </p>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$a</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Bonjour&quot;</span>;
              <span style="color: #996633">$b</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Bonjour&#39;</span>;
            <span style="color: #557799">?&gt;</span></pre>
        </div>

        <p>
          La syntaxe Heredoc constitue une troisième possibilité de délimiter
          les chaînes : &lt;&lt;&lt;. Après cet opérateur, un identificateur
          quelconque est indiqué, puis une nouvelle ligne.
        </p>
        <p><b>Heredoc</b>:</p>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$str</span> <span style="color: #333333">=</span> <span style="color: #333333">&lt;&lt;&lt;</span>EOD
                Exemple de chaîne de caractères
                s&#39;étendant sur plusieurs lignes
                en utilisant la syntaxe heredoc<span style="color: #333333">.</span>
                EOD;
            <span style="color: #557799">?&gt;</span></pre>
        </div>
        <br />
        <p><b>Nowdoc</b>:</p>
        <div class="codeblock">
          <pre style="margin: 0; line-height: 125%">
            <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$str</span> <span style="color: #333333">=</span> <span style="color: #333333">&lt;&lt;&lt;</span><span style="background-color: #fff0f0">&#39;EOD&#39;</span>
                Un exemple de chaîne de caractères s&#39;étendant sur plusieurs lignes
                en utilisant la syntaxe Nowdoc<span style="color: #333333">.</span> Les anti<span style="color: #333333">-</span>slashs sont toujours considérés comme des
                lettres<span style="color: #333333">.</span> Par exemple \\ et \&#39;<span style="color: #333333">.</span>
                EOD;

            <span style="color: #557799">?&gt;</span></pre>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
