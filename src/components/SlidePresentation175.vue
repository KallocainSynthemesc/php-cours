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
            <td>REMOTE_HOST</td>
            <td>Le nom d'hôte de la machine qui a demandé cette page</td>
          </tr>
          <tr>
            <td>REMOTE_ADDR</td>
            <td>
              Une chaîne contenant l'adresse IP de la machine qui a demandé
              cette page.
            </td>
          </tr>
          <tr>
            <td>AUTH_TYPE</td>
            <td>
              Si la page est protégée par un mot de passe, il s'agit de la
              méthode d'authentification utilisée pour protéger la page
            </td>
          </tr>
          <tr>
            <td>REMOTE_USER</td>
            <td>
              Si la page est protégée par un mot de passe, il s'agit du nom
              d'utilisateur avec lequel le client s'est s'est authentifié
            </td>
          </tr>
          <tr>
            <td>CONTENT_TYPE</td>
            <td>
              Le type de contenu des informations jointes aux requêtes telles
              que PUT et POST.
            </td>
          </tr>
          <tr>
            <td>CONTENT_LENGTH</td>
            <td>
              La longueur des informations jointes aux requêtes telles que PUT
              et POST
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped></style>
