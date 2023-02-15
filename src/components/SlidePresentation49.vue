<template>
  <div class="slide">
    <div class="heading">Variables - References</div>
    <div class="content">
      <div class="flex-container">
        <div>
          <p>
            En PHP, les références sont le moyen de créer des alias de variables
          </p>
          <p>
            Après l'affectation, les deux variables sont des noms alternatifs
            pour la même valeur. La suppression (unset())d'une variable aliasée
            n'affecte pas les autres noms de la valeur de cette variable.
          </p>
          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$white</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;snow&quot;</span>;
              <span style="color: #996633">$black</span> <span style="color: #333333">=&amp;</span> <span style="color: #996633">$white</span>;
              <span style="color: #007020">unset</span>(<span style="color: #996633">$white</span>);
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$black</span>;
              <span style="color: #557799">?&gt;</span></pre>
          </div>
        </div>
        <div style="width: 50%">
          <img
            src="../assets/illustrations/sicssor.svg"
            style="width: 100%; height: 100%"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
