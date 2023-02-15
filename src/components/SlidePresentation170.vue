<template>
  <div class="slide">
    <div class="heading">Web Server detour - Built-in web server</div>
    <div class="content">
      <p>PHP est livré avec un serveur web intégré depuis la version 5.4.</p>
      <p style="background-color: #fa8f8f">
        Avertissement: Ce serveur web est prévu pour aider dans le développement
        des applications. Il peut également être utile pour les tests, et pour
        les démonstrations d'applications qui sont exécutées dans des
        environnements contrôlés.
      </p>
      <br />
      <p>
        C'est une bonne chose puisque nous sommes en train d'apprendre PHP et
        que cela accélère notre processus. Plus tard dans la formation, vous
        allez utiliser un serveur web complet.
      </p>
      <br />
      <p>Exemple #1 Démarrage du serveur web</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
                  <span style="color: #996633">$</span> <span style="color: #996633">cd</span> <span style="color: #333333">~/</span>public_html
                  <span style="color: #996633">$</span> <span style="color: #996633">php</span> <span style="color: #333333">-</span>S localhost:8000</pre>
      </div>
      <div codeblock>
        <pre
          style="margin: 0; line-height: 125%"
        ><span style="color: #996633">$</span> <span style="color: #996633">php</span> <span style="color: #333333">-</span>S localhost:8000 <span style="color: #333333">-</span>t subfolder<span style="color: #333333">/</span></pre>
      </div>

      <p>
        Tout d'abord, il faut installer
        <a href="https://www.php.net/downloads.php">PHP</a> si ce n'est pas déjà
        fait.
      </p>
    </div>
  </div>
</template>

<style scoped></style>
