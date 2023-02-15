<template>
  <div class="slide">
    <div class="heading">
      Functions - Argument-Passing Basics - pass by value
    </div>
    <div class="content">
      <div class="flex-container">
        <div style="width: 60%">
          <p>
            <b
              >Les arguments sont transmis en assignant automatiquement des
              objets aux noms de variables locales.
            </b>
          </p>
          <p>
            Par défaut, les valeurs des arguments réels sont transmises par
            valeur aux arguments formels qui deviennent des variables locales à
            l'intérieur de la fonction.
          </p>
          <p>
            <b>C'est un peu comme faire : box = box2 = "text"</b>
          </p>
        </div>
        <div>
          <img
            src="../assets/illustrations/argumentPassing.svg"
            style="width: 85%"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
