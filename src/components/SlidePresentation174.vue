<template>
  <div class="slide">
    <div class="heading">PHP et HTML - Server Information</div>
    <div class="content">
      <p>
        La configuration du serveur et les informations relatives aux requêtes
        (y compris les paramètres de formulaire et les cookies) sont accessibles
        via des variables dans les scripts PHP.
      </p>
      <table>
        <tbody>
          <tr>
            <th>Entry</th>
            <th>Description</th>
          </tr>
          <tr>
            <td>PHP_SELF</td>
            <td>Le nom du script actuel, relatif à la racine du document</td>
          </tr>
          <tr>
            <td>SERVER_SOFTWARE</td>
            <td>Une chaîne qui identifie le serveur</td>
          </tr>
          <tr>
            <td>SERVER_NAME</td>
            <td>
              Le nom d'hôte, l'alias DNS ou l'adresse IP pour les URL
              auto-référencées
            </td>
          </tr>
          <tr>
            <td>GATEWAY_INTERFACE</td>
            <td>La version de la norme CGI suivie</td>
          </tr>
          <tr>
            <td>SERVER_PROTOCOL</td>
            <td>Le nom et la révision du protocole de demande</td>
          </tr>
          <tr>
            <td>SERVER_PORT</td>
            <td>
              Le numéro de port du serveur auquel la requête a été envoyée.
            </td>
          </tr>
          <tr>
            <td>REQUEST_METHOD</td>
            <td>
              La méthode utilisée par le client pour récupérer le document
            </td>
          </tr>
          <tr>
            <td>PATH_INFO</td>
            <td>Éléments supplémentaires du chemin donnés par le client</td>
          </tr>
          <tr>
            <td>PATH_TRANSLATED</td>
            <td>
              La valeur de PATH_INFO, traduite par le serveur en nom de fichier
            </td>
          </tr>
          <tr>
            <td>SCRIPT_NAME</td>
            <td>
              Le chemin d'accès URL à la page actuelle, ce qui est utile pour
              les scripts auto-référencés.
            </td>
          </tr>
          <tr>
            <td>QUERY_STRING</td>
            <td>
              Tout ce qui suit le ? dans l'URL (par exemple, name=Fred+age=35).
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped></style>
