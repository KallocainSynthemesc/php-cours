<template>
  <div class="slide">
    <div class="heading">Opérateurs logiques</div>
    <div class="content">
      <table class="tg" style="width: 100%; height: 50%">
        <thead>
          <tr>
            <th class="tg-0lax">
              <span style="font-weight: bold">Operator</span>
            </th>
            <th class="tg-0lax">
              <span style="font-weight: bold">Alternative</span>
            </th>
            <th class="tg-0lax">
              <span style="font-weight: bold">Description</span>
            </th>
            <th class="tg-0lax">
              <span style="font-weight: bold">Exemple</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax">and</td>
            <td class="tg-0lax">&&</td>
            <td class="tg-0lax">
              Retourne Vrai si les deux déclarations sont vraies
            </td>
            <td class="tg-0lax">$x &lt; 5 and $x &lt; 10</td>
          </tr>
          <tr>
            <td class="tg-0lax">or</td>
            <td class="tg-0lax">||</td>
            <td class="tg-0lax">
              Renvoie Vrai si l'une des déclarations est vraie.
            </td>
            <td class="tg-0lax">$x &lt; 5 or $x &lt; 4</td>
          </tr>
          <tr>
            <td class="tg-0lax">!</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">
              Inverse le résultat, renvoie Faux si le résultat est vrai.
            </td>
            <td class="tg-0lax">!($x &lt; 5)</td>
          </tr>
          <tr>
            <td class="tg-0lax">xor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">
              Retourne Vrai lorsque l'une ou l'autre des deux entrées est vraie,
              mais pas les deux.
            </td>
            <td class="tg-0lax">$x &lt; 5 xor $x &lt; 10</td>
          </tr>
        </tbody>
      </table>
      <img
        src="../assets/illustrations/andornot.svg"
        style="width: 48%; margin-top: 1%"
      />
    </div>
  </div>
</template>

<style scoped></style>
