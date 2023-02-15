<template>
  <div class="slide">
    <div class="heading">Opérateurs d'assignation arithmétiques</div>
    <div class="content">
      <div class="flex-container">
        <div>
          <table class="tg">
            <thead>
              <tr>
                <th class="tg-0lax">
                  <span style="font-weight: bold">Opérateur</span>
                </th>
                <th class="tg-0lax">
                  <span style="font-weight: bold">Exemple</span>
                </th>
                <th class="tg-0lax">
                  <span style="font-weight: bold">Identique à</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0lax">=</td>
                <td class="tg-0lax">$x = 5</td>
                <td class="tg-0lax">$x = 5</td>
              </tr>
              <tr>
                <td class="tg-0lax">+=</td>
                <td class="tg-0lax">$x += 3</td>
                <td class="tg-0lax">$x = $x + 3</td>
              </tr>
              <tr>
                <td class="tg-0lax">-=</td>
                <td class="tg-0lax">$x -= 3</td>
                <td class="tg-0lax">$x = $x - 3</td>
              </tr>
              <tr>
                <td class="tg-0lax">*=</td>
                <td class="tg-0lax">$x *= 3<br /></td>
                <td class="tg-0lax">$x = $x * 3<br /></td>
              </tr>
              <tr>
                <td class="tg-0lax">/=</td>
                <td class="tg-0lax">$x /= 3</td>
                <td class="tg-0lax">$x = $x / 3</td>
              </tr>
              <tr>
                <td class="tg-0lax">%=</td>
                <td class="tg-0lax">$x %= 3</td>
                <td class="tg-0lax">$x = $x % 3</td>
              </tr>
              <tr>
                <td class="tg-0lax">**=</td>
                <td class="tg-0lax">$x **= 3</td>
                <td class="tg-0lax">$x = $x ** 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <p>Exemples:</p>
          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$x</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span>
              <span style="color: #996633">$x</span> <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">3</span>
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$x</span> <span style="color: #888888">#8</span>
              <span style="color: #557799">?&gt;</span></pre>
          </div>

          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$x</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span>;
              <span style="color: #996633">$x</span> <span style="color: #333333">/=</span> <span style="color: #0000DD; font-weight: bold">3</span>;
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$x</span>;<span style="color: #888888">//1.6666666666666667</span>
              <span style="color: #557799">?&gt;</span></pre>
          </div>

          <div class="codeblock">
            <pre style="margin: 0; line-height: 125%">
              <span style="color: #557799">&lt;?php</span>
              <span style="color: #996633">$x</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span>;
              <span style="color: #996633">$x</span> <span style="color: #333333">-=</span> <span style="color: #0000DD; font-weight: bold">3</span>;
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$x</span>; <span style="color: #888888">//2</span>
              <span style="color: #557799">?&gt;</span></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
