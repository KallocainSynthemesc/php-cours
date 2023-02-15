<template>
  <div class="slide">
    <div class="heading">PHP et HTML - traitement séparé</div>
    <div class="content">
      <p>
        Nous pouvons écrire du HTML et afficher un formulaire et traiter le
        formulaire soumis avec un fichier php dédié.
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #007700">&lt;html&gt;</span>
          <span style="color: #007700">&lt;head&gt;&lt;title&gt;</span>Fragment Form<span style="color: #007700">&lt;/title&gt;&lt;/head&gt;</span>
          <span style="color: #007700">&lt;body&gt;</span>
            <span style="color: #007700">&lt;form</span> <span style="color: #0000CC">action=</span><span style="background-color: #fff0f0">&quot;chunkify.php&quot;</span> <span style="color: #0000CC">method=</span><span style="background-color: #fff0f0">&quot;POST&quot;</span><span style="color: #007700">&gt;</span>
              Entrez un mot : <span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;word&quot;</span> <span style="color: #007700">/&gt;&lt;br</span> <span style="color: #007700">/&gt;</span>
              Quelle doit être la longueur des morceaux ?
              <span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;number&quot;</span> <span style="color: #007700">/&gt;&lt;br</span> <span style="color: #007700">/&gt;</span>
              <span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;submit&quot;</span> <span style="color: #0000CC">value=</span><span style="background-color: #fff0f0">&quot;Fragment!&quot;</span><span style="color: #007700">&gt;</span>
            <span style="color: #007700">&lt;/form&gt;</span>
          <span style="color: #007700">&lt;/body&gt;</span>
          <span style="color: #007700">&lt;/html&gt;</span></pre>
      </div>
      <br />
      <a
        href="/exercices/seperate_processing/chunkify.php"
        download="chunkify.php"
        ><img
          src="../assets/illustrations/php-file.svg"
          style="width: 5%"
        />Download php exemple.</a
      >
      <a href="/exercices/seperate_processing/index.html" download="index.html"
        ><img
          src="../assets/illustrations/html-file.svg"
          style="width: 5%"
        />Download html exemple.</a
      >
    </div>
  </div>
</template>

<style scoped></style>
