<template>
  <div class="slide">
    <div class="heading">Functions - Scopes (LEGS lookup rule)</div>
    <div class="content">
      <div class="flex-container">
        <div>
          <p>
            PHP recherche jusqu'à quatre scopes - le <b>local (L) scope</b>,
            puis les <b>Eclosing locals scopes (E)</b>, puis le
            <b>scope global (G)</b>, et enfin la <b>superglobal (S) scope</b>
            - et s'arrête au premier endroit où le nom est trouvé. Si le nom
            n'est pas trouvé au cours de cette recherche, PHP signale une
            erreur.
          </p>
          <p><b>Ignorons pour l'instant les superglobals</b></p>
        </div>
        <div style="width: 50%">
          <img
            src="../assets/illustrations/magnifier.svg"
            style="width: 100%"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
