<script setup>
import TimeMod from "@/components/interactive/TimeMod.vue";
</script>
<template>
  <div class="slide">
    <div class="heading">Opérateurs arithmétiques</div>
    <div class="content">
      <p>
        Exercice: Il est actuellement minuit. Quelle heure sera-t-il après 40
        heures passées sur une horloge de 12 heures ? Utilisez l'opérateur
        modulo % pour calculer l'heure
      </p>
      <img
        src="../assets/illustrations/mod.svg"
        class="html-css-logo"
        style="left: 40%; top: unset; height: 60%; width: 60%"
      />
      <TimeMod></TimeMod>
    </div>
  </div>
</template>

<style scoped></style>
