<template>
  <div class="slide">
    <div class="heading">Prédominance des opérateurs logiques</div>
    <div class="content">
      <p>
        Lorsque vous mélangez les opérateurs logiques dans une expression,
        Python les évalue dans l'ordre qui est appelé la précédence des
        opérateurs.
      </p>

      <p>
        L'exemple suivant montre la préséance des opérateurs <b>not</b>,
        <b>and</b>, et <b>or</b> :
      </p>
      <table class="tg" style="width: 30%; height: 50%">
        <thead>
          <tr>
            <th class="tg-0lax">
              <span style="font-weight: bold">Operator</span>
            </th>
            <th class="tg-0lax">
              <span style="font-weight: bold">Prédominance</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax">!</td>
            <td class="tg-0lax">Haut</td>
          </tr>
          <tr>
            <td class="tg-0lax">and</td>
            <td class="tg-0lax">Moyen</td>
          </tr>
          <tr>
            <td class="tg-0lax">or</td>
            <td class="tg-0lax">Faible</td>
          </tr>
        </tbody>
      </table>
      <img
        src="../assets/illustrations/dominance.svg"
        class="html-css-logo"
        style="left: 36%; top: 45%; height: unset; width: 50%"
      />
    </div>
  </div>
</template>

<style scoped></style>
