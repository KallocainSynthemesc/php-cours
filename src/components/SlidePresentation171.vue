<template>
  <div class="slide">
    <div class="heading">PHP et HTML - xampp comme exemple</div>
    <div class="content">
      <p>
        Puisque nous savons maintenant comment fonctionnent PHP et HTML,
        examinons
        <a
          href="https://onlinephp.io?s=VVFLasMwEN0bfIeJCCSBUu0bRdlmGUjpKhvZnsQGWVL1MailB-o5erFK_oRWCN583psZjdiq0bWPBqH1veRlwR6IosnoOy-Rv7adg3T7CLfOOg_n0xmM1Xcr-hWjEymx6SKrdBMzGnA-SjyQWkttXyw2hL_p4GDQET_gPSCo7IpBKwdBgcEAzTQOoP9DCPcelc8sOacr4X6-wQWbI7VOKtOaZ0ZNbnxMNpTFWlgrIhxgxC25CBk8eQJywjiCkFJn44J2CI7s9mWBdathw4Lkm-TdtEVRt7CdSwkHa5SYh9mVxWdZQDqjhDDZ8SXHaHKuKle5KrL_R6NjcAp_PfrRueGRs8oCTY_IC10WSceP-QU%2C&v=8.2.1"
          >ceci</a
        >.
      </p>
      <div class="codeblock" style="font-size: 0.86rem">
        <pre style="margin: 0; line-height: 125%">
          &lt;!doctype html&gt;
          &lt;html&gt;
          &lt;head&gt;
          &lt;title&gt;This is my first PHP program!&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
          &lt;p style=&quot;color:red&quot;&gt;Vous voyez que nous avons un peu de html et que nous augmentons le html basé sur le code php.&lt;/p&gt;
          <span style="color: #557799">&lt;?php</span> 
          <span style="color: #996633">$array</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Salut&quot;</span>, <span style="background-color: #fff0f0">&quot;Hey&quot;</span>, <span style="background-color: #fff0f0">&quot;Hallo&quot;</span>, <span style="background-color: #fff0f0">&quot;Servus&quot;</span>);
          <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&#39;&lt;ul&gt;&#39;</span>;
          <span style="color: #008800; font-weight: bold">foreach</span> (<span style="color: #996633">$array</span> <span style="color: #008800; font-weight: bold">as</span> <span style="color: #996633">$element</span>)
          {
              <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;li&gt;</span><span style="background-color: #eeeeee">$element</span><span style="background-color: #fff0f0">&lt;/li&gt;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&lt;ul&gt;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
              <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;/ul&gt;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n\n</span><span style="background-color: #fff0f0">&quot;</span>;
          }
          <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&#39;&lt;/ul&gt;&#39;</span>;
          <span style="color: #557799">?&gt;</span>&lt;br /&gt;
          &lt;/body&gt;
          &lt;/html&gt;</pre>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
