<template>
  <div class="slide">
    <div class="heading">Scopes</div>
    <div class="content">
      <p>
        Les scopes permettent d'éviter les conflits de noms dans le code de
        votre programme : les noms définis dans une unité de programme
        n'interfèrent pas avec les noms d'une autre unité.
      </p>
      <br />
      <div class="flex-container">
        <div>
          <p>
            Lorsque vous utilisez un nom dans un programme, PHP crée, modifie ou
            recherche le nom dans ce que l'on appelle un
            <b>espace de noms, c'est-à-dire un endroit où vivent les noms</b>.
          </p>
          <p>
            L'endroit où vous attribuez un nom dans votre code source détermine
            l'espace de nom dans lequel il va vivre et donc sa visibilité.
          </p>
        </div>
        <div>
          <img
            src="../assets/illustrations/variable-living-space.svg"
            style="width: 100%"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
