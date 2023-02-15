<template>
  <div class="slide">
    <div class="heading">Data Types - Escape Sequences in String</div>
    <div class="content">
      <p>
        Le caractère backslash (\) a une fonction particulière dans les strings
        JavaScript. Combiné avec le caractère qui le suit, il représente un
        caractère qui n'est pas autrement représentable dans le string.
      </p>
      <div class="flex-container">
        <div>
          <table class="tg">
            <thead>
              <tr>
                <th class="tg-0pky">
                  <span style="font-weight: bold">Sequence</span>
                </th>
                <th class="tg-0pky">
                  <span style="font-weight: bold">Caractère représenté</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0pky">\t</td>
                <td class="tg-0pky">Horizontal tab</td>
              </tr>
              <tr>
                <td class="tg-0pky">\n</td>
                <td class="tg-0pky">Nouvelle ligne</td>
              </tr>
              <tr>
                <td class="tg-0pky">\r</td>
                <td class="tg-0pky">Retour à la ligne</td>
              </tr>
              <tr>
                <td class="tg-0pky">\{</td>
                <td class="tg-0pky">Left brace</td>
              </tr>
              <tr>
                <td class="tg-0pky">\}</td>
                <td class="tg-0pky">Right brace</td>
              </tr>
              <tr>
                <td class="tg-0pky">\0 through \777</td>
                <td class="tg-0pky">ASCII octal value</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <table class="tg">
            <thead>
              <tr>
                <th class="tg-0pky">
                  <span style="font-weight: bold">Sequence</span>
                </th>
                <th class="tg-0pky">
                  <span style="font-weight: bold">Caractère représenté</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0pky">\"</td>
                <td class="tg-0pky">Guillemets doubles</td>
              </tr>
              <tr>
                <td class="tg-0pky">\'</td>
                <td class="tg-0pky">Apostrophe ou Guillemets simples</td>
              </tr>
              <tr>
                <td class="tg-0pky">\\</td>
                <td class="tg-0pky">Backslash</td>
              </tr>
              <tr>
                <td class="tg-0pky">\$</td>
                <td class="tg-0pky">Dollar sign</td>
              </tr>
              <tr>
                <td class="tg-0pky">\[</td>
                <td class="tg-0pky">Left bracket</td>
              </tr>
              <tr>
                <td class="tg-0pky">\]</td>
                <td class="tg-0pky">Right bracket</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
