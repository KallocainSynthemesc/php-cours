<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Variables</div>
    <div class="content">
      <p>
        La configuration du serveur et les informations relatives aux requêtes
        (y compris les paramètres de formulaire et les cookies) sont accessibles
        via des variables dans les scripts PHP.
      </p>
      <table>
        <tbody>
          <tr>
            <th>Nom variable</th>
            <th>Description</th>
          </tr>
          <tr>
            <td>$_COOKIE</td>
            <td>
              Contient toutes les valeurs de cookie transmises dans le cadre de
              la requête
            </td>
          </tr>
          <tr>
            <td>$_GET</td>
            <td>
              Contient tous les paramètres qui font partie d'une requête GET
            </td>
          </tr>
          <tr>
            <td>$_POST</td>
            <td>
              Contient tous les paramètres qui font partie d'une requête POST
            </td>
          </tr>
          <tr>
            <td>$_FILES</td>
            <td>Contient des informations sur les fichiers téléchargés</td>
          </tr>
          <tr>
            <td>$_SERVER</td>
            <td>Contient des informations utiles sur le serveur web</td>
          </tr>
          <tr>
            <td>$_ENV</td>
            <td>
              Contient les valeurs de toutes les variables d'environnement
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped></style>
