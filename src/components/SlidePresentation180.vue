<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Traitement des formulaires</div>
    <div class="content">
      <p>
        Sur le serveur, nous pouvons déterminer quel type de méthode a été
        utilisé pour accéder à la ressource.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                <span style="color: #557799">&lt;?php</span>
                  <span style="color: #008800; font-weight: bold">if</span> (<span style="color: #996633">$_SERVER</span>[<span style="background-color: #fff0f0">&#39;REQUEST_METHOD&#39;</span>] <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&#39;GET&#39;</span>) {
                    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Vous avez utilisé une requête get, vous utilisez probablement un navigateur.&quot;</span>;
                  }
                  <span style="color: #008800; font-weight: bold">else</span> {
                    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Vous avez probablement essayé d&#39;obtenir du contenu en utilisant la méthode POST. Essayez d&#39;utiliser GET&quot;</span>;
                  }
                <span style="color: #557799">?&gt;</span></pre>
      </div>
      <br />
      <a href="/exercices/request_method/index.php" download="index.php"
        ><img
          src="../assets/illustrations/php-file.svg"
          style="width: 10%"
        />Download php exemple.</a
      >
    </div>
  </div>
</template>

<style scoped></style>
