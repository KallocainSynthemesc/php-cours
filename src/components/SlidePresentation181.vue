<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Self-Processing Pages</div>
    <div class="content">
      <p>
        Une page PHP peut être utilisée à la fois pour générer un formulaire et
        pour le traiter.
      </p>
      <p>Pour ce faire, nous vérifions si la méthode est GET ou POST</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                    <span style="color: #996633">$_SERVER</span>[<span style="background-color: #fff0f0">&#39;REQUEST_METHOD&#39;</span>] <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&#39;GET&#39;</span>
                    <span style="color: #996633">$_SERVER</span>[<span style="background-color: #fff0f0">&#39;REQUEST_METHOD&#39;</span>] <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&#39;POST&#39;</span></pre>
      </div>
      <br />
      <p>il y a une troisième commande qui nous aide à créer le formulair.</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                <span style="color: #996633">$_SERVER</span>[<span style="background-color: #fff0f0">&#39;PHP_SELF&#39;</span>] <span style="color: #888888">// est transformée en /index.php</span></pre>
      </div>
      <br />
      <a
        href="../assets/exercices/self_processing/index.php"
        download="index.php"
        ><img
          src="../assets/illustrations/php-file.svg"
          style="width: 10%"
        />Download php exemple.</a
      >
    </div>
  </div>
</template>

<style scoped></style>
