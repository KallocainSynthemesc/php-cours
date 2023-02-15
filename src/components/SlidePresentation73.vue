<template>
  <div class="slide">
    <div class="heading">Opérateurs logiques - xor</div>
    <div class="content">
      <p>
        Comme l'opérateur <b>and</b>, l'opérateur <b>or</b> vérifie plusieurs
        conditions. Mais il renvoie <b>True</b> lorsque
        <b>l'une ou l'autre ou les deux conditions</b> individuelles sont vraies
        (True) :
      </p>
      <table class="tg" style="width: 100%; height: 50%">
        <thead>
          <tr>
            <th class="tg-0lax"><span style="font-weight: bold">a</span></th>
            <th class="tg-0lax"><span style="font-weight: bold">b</span></th>
            <th class="tg-0lax">
              <span style="font-weight: bold">a xor b</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax" style="color: #008000">True</td>
            <td class="tg-0lax" style="color: #008000">True</td>
            <td class="tg-0lax" style="color: #800400">False</td>
          </tr>
          <tr>
            <td class="tg-0lax" style="color: #008000">True</td>
            <td class="tg-0lax" style="color: #800400">False</td>
            <td class="tg-0lax" style="color: #008000">True</td>
          </tr>
          <tr>
            <td class="tg-0lax" style="color: #800400">False</td>
            <td class="tg-0lax" style="color: #800400">False</td>
            <td class="tg-0lax" style="color: #800400">False</td>
          </tr>
          <tr>
            <td class="tg-0lax" style="color: #800400">False</td>
            <td class="tg-0lax" style="color: #008000">True</td>
            <td class="tg-0lax" style="color: #008000">True</td>
          </tr>
        </tbody>
      </table>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #008800; font-weight: bold">True</span> <span style="color: #008800; font-weight: bold">xor</span> <span style="color: #008800; font-weight: bold">True</span>); <span style="color: #888888">//false</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #008800; font-weight: bold">False</span> <span style="color: #008800; font-weight: bold">xor</span> <span style="color: #008800; font-weight: bold">True</span>); <span style="color: #888888">//true</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #008800; font-weight: bold">False</span> <span style="color: #008800; font-weight: bold">xor</span> <span style="color: #008800; font-weight: bold">False</span>); <span style="color: #888888">//false</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #008800; font-weight: bold">True</span> <span style="color: #008800; font-weight: bold">xor</span> <span style="color: #008800; font-weight: bold">False</span>); <span style="color: #888888">//true</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
