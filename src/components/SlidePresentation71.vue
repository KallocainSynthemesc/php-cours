<template>
  <div class="slide">
    <div class="heading">Opérateurs logiques - ! (not)</div>
    <div class="content">
      <p>
        L'opérateur <b>!</b> s'applique à une seule condition. Et il inverse le
        résultat de cette condition, <b>True</b> devient <b>False</b> et
        <b>False</b> devient <b>True</b>.
      </p>
      <table class="tg" style="width: 30%; height: 50%">
        <thead>
          <tr>
            <th class="tg-0lax"><span style="font-weight: bold">a</span></th>
            <th class="tg-0lax"><span style="font-weight: bold">! a</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax" style="color: #008000">True</td>
            <td class="tg-0lax" style="color: #800400">False</td>
          </tr>
          <tr>
            <td class="tg-0lax" style="color: #800400">False</td>
            <td class="tg-0lax" style="color: #008000">True</td>
          </tr>
        </tbody>
      </table>
      <br />
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #333333">!</span> <span style="color: #008800; font-weight: bold">True</span>); <span style="color: #888888">//false</span>
            <span style="color: #007020">var_dump</span>((bool) <span style="color: #333333">!</span> <span style="color: #008800; font-weight: bold">False</span>); <span style="color: #888888">//true</span>
          <span style="color: #557799">?&gt;</span></pre>
      </div>

      <img
        src="../assets/illustrations/uno-reverse.svg"
        class="html-css-logo"
        style="left: 40%; top: 30%; height: 66%; width: unset"
      />
    </div>
  </div>
</template>

<style scoped></style>
