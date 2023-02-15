<template>
  <div class="slide">
    <div class="heading">Data Types - Integers</div>
    <div class="content">
      <p>Solution:</p>
      <div class="codeblock">
        <pre
          style="margin: 0; line-height: 125%"
        ><span style="color: #0000ff">&lt;?php</span>
            $a = 39;
            $b = 25;

            $c = $a;
            $a = $b;
            $b = $c;
            <span style="color: #0000ff">echo</span> $a;
            <span style="color: #0000ff">echo</span> <span style="color: #a31515">&quot;\r\n&quot;</span>;
            <span style="color: #0000ff">echo</span> $b;
            <span style="color: #0000ff">?&gt;</span></pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
