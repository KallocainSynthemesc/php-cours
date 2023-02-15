<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Multivalued Parameters</div>
    <div class="content">
      <p>
        Pour que PHP reconnaisse les valeurs multiples que le navigateur
        transmet à un script de traitement de formulaire, vous devez faire en
        sorte que le nom du champ dans le formulaire HTML se termine par [].
      </p>
      <p><b>Exemple: </b></p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #007700">&lt;select</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;languages[]&quot;</span><span style="color: #007700">&gt;</span>
            <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;c&quot;</span><span style="color: #007700">&gt;</span>C<span style="color: #007700">&lt;/input&gt;</span>
            <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;c++&quot;</span><span style="color: #007700">&gt;</span>C++<span style="color: #007700">&lt;/input&gt;</span>
            <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;php&quot;</span><span style="color: #007700">&gt;</span>PHP<span style="color: #007700">&lt;/input&gt;</span>
            <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;perl&quot;</span><span style="color: #007700">&gt;</span>Perl<span style="color: #007700">&lt;/input&gt;</span>
          <span style="color: #007700">&lt;/select&gt;</span></pre>
      </div>
      <br />
      <a
        href="../assets/exercices/multivalued_processing/personality.php"
        download="personality.php"
        ><img
          src="../assets/illustrations/php-file.svg"
          style="width: 5%"
        />Download php exemple.</a
      >
      <a
        href="../assets/exercices/multivalued_processing/index.html"
        download="index.html"
        ><img
          src="../assets/illustrations/html-file.svg"
          style="width: 5%"
        />Download html exemple.</a
      >
    </div>
  </div>
</template>

<style scoped></style>
