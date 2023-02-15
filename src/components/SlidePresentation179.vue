<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Traitement des formulaires</div>
    <div class="content">
      <p><b>Methods:</b></p>
      <p>
        il existe deux méthodes HTTP qu'un client peut utiliser pour transmettre
        des les données du formulaire au serveur : GET et POST.
      </p>
      <p><b>$_GET:</b></p>
      <p>
        Une requête GET encode les paramètres du formulaire dans l'URL dans ce
        que l'on appelle une chaîne de requête. Le texte qui suit le ? est la
        chaîne de requête.
      </p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        ><span style="color: #000000; background-color: #fff0ff">/path/</span>to<span style="color: #333333">/</span>chunkify<span style="color: #333333">.</span>php?word<span style="color: #333333">=</span>despicable<span style="color: #333333">&amp;</span><span style="color: #007020">length</span><span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">3</span></pre>
      </div>
      <br />
      <p><b>$_POST:</b></p>
      <p>
        Une requête POST transmet les paramètres du formulaire dans le corps de
        la requête HTTP, laissant l'URL intacte.
      </p>
    </div>
  </div>
</template>

<style scoped></style>
