<template>
  <div class="slide">
    <div class="heading">Variables - Variable Variables</div>
    <div class="content">
      <div class="flex-container">
        <div style="width: 77%">
          <p>
            Vous pouvez faire référence à la valeur d'une variable dont le nom
            est stocké dans une autre variable.
          </p>
          <br />
          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
                <span style="color: #996633">$box</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;inception&#39;</span>;
                <span style="color: #996633">$$box</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Leonardo DiCaprio&#39;</span>; <span style="color: #888888">//le double $$ est intentionnel et non une faute de frappe</span>
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$inception</span>; <span style="color: #888888">//La variable $inception existe à cause de la deuxième instruction</span>
              <span style="color: #557799">?&gt;</span></pre>
          </div>
          <br />
          <p>
            Après l'exécution de la deuxième instruction, la variable $inception
            a la valeur "Leonardo DiCaprio".
          </p>
        </div>
        <div style="width: 18%">
          <img
            src="../assets/illustrations/inception-var.svg"
            style="width: 95%"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
