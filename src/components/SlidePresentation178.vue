<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Exercice</div>
    <div class="content">
      <p>
        La plupart des serveurs Web créent également des entrées dans le tableau
        $_SERVER. Les plus courantes sont les deux suivantes.
      </p>
      <table>
        <tbody>
          <tr>
            <th>Entry</th>
            <th>Description</th>
          </tr>
          <tr>
            <td>HTTP_USER_AGENT</td>
            <td>
              La chaîne utilisée par le navigateur pour s'identifier (par
              exemple, "Mozilla/5.0 (Windows 2000 ; U) Opera 6.0 [en]")
            </td>
          </tr>
          <tr>
            <td>HTTP_REFERER</td>
            <td>
              La page dont le navigateur a dit qu'il venait pour arriver à la
              page actuelle (par exemple, http://
              www.example.com/last_page.html)
            </td>
          </tr>
        </tbody>
      </table>
      <p>
        <b
          >Compte tenu de ces informations, pouvez-vous m'écrire un site de
          détection de navigateur ?</b
        >
      </p>
      <a href="/exercices/browser_detection/index.php" download="index.php"
        ><img
          src="../assets/illustrations/php-file.svg"
          style="width: 10%"
        />Download php exercice.</a
      >
      <p>
        <b>exemple de résultat : </b>"Votre browser est :" Mozilla/5.0 (Windows
        NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0
      </p>
    </div>
  </div>
</template>

<style scoped></style>
