<template>
  <div class="slide">
    <div class="heading">Functions - Nombre d'arguments</div>
    <div class="content">
      <p>
        Par défaut, une fonction doit être appelée avec le nombre correct
        d'arguments.
      </p>
      <p>Cette fonction attend 2 arguments, et reçoit 2 arguments :</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">my_function</span>(<span style="color: #996633">$fname</span>, <span style="color: #996633">$lname</span>) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$fname</span> <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">.</span> <span style="color: #996633">$lname</span>;
            }
            my_function(<span style="background-color: #fff0f0">&quot;Emil&quot;</span>, <span style="background-color: #fff0f0">&quot;Refsnes&quot;</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>

      <p>Cette fonction attend 2 arguments, mais n'en reçoit qu'un seul:</p>
      <div class="codeblock">
        <pre style="margin: 0; line-height: 125%">
          <span style="color: #557799">&lt;?php</span>
            <span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">my_function</span>(<span style="color: #996633">$fname</span>, <span style="color: #996633">$lname</span>) {
                <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$fname</span> <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">.</span> <span style="color: #996633">$lname</span>;
            }
            my_function(<span style="background-color: #fff0f0">&quot;Emil&quot;</span>);
          <span style="color: #557799">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
