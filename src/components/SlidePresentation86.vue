<template>
  <div class="slide">
    <div class="heading">Functions - Scopes</div>
    <div class="content">
      <p>
        les variables peuvent être assignées à trois endroits différents,
        correspondant à trois scopes différentes
      </p>
      <ul>
        <li>
          une <b>variable</b> assignée à l'intérieur d'une <b>function</b>, est
          <b>locale</b> à cette fonction.
        </li>
        <li>
          une <b>variable</b> assignée en dehors de toutes les <b>functions</b>,
          est <b>globale</b> à l'ensemble du fichier.
        </li>
      </ul>
      <br />
      <p>
        Par exemple, dans le fichier de module suivant, l'affectation X = 99
        crée une variable globale nommée X, mais l'affectation X = 88 crée une
        variable locale X :
      </p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #996633">$x</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">99</span>; <span style="color: #888888">// Global scope X</span>

          <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">func</span>() {
              <span style="color: #996633">$x</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">88</span>; <span style="color: #888888">// Local (function) scope X: une autre variable</span>
              <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$x</span>;
          }

          func(); <span style="color: #888888">// prints 88</span>
          <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$x</span>; <span style="color: #888888">// prints 99</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
