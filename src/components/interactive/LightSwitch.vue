<script>
export default {
  name: "LightSwitch",

  data: function () {
    return {
      isActive: false,
    };
  },

  methods: {
    myFilter: function () {
      console.log("do something");
      this.isActive = !this.isActive;
    },
  },
};
</script>

<template>
  <div class="encapsulation" v-bind:class="{ white: isActive }">
    <div id="light" class="container center">
      <div class="rec1 center">
        <div class="rec2 center">
          <button
            class="switch"
            @click="myFilter()"
            v-bind:class="{ active: isActive }"
          ></button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
button {
  all: unset;
}

.encapsulation {
  align-items: center;
  background-color: #222;
  display: flex;
  margin: 0;
  min-height: 90%;
  justify-content: center;
  transition: background-color 0.5s linear;
}

.white {
  background-color: white;
}

.center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.container {
  border-radius: 8px;
  background-color: #eee;
  box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.6),
    inset 5px 0px 8px 2px rgba(0, 0, 0, 0.3),
    inset -8px 5px 6px 5px rgba(255, 255, 255, 1);
  height: 250px;
  width: 150px;
}

.rec1 {
  background-color: #f2f2f2;
  border: 1px solid rgba(0, 0, 0, 0.6);
  border-top: 1px solid rgba(0, 0, 0, 0.4);
  box-shadow: -5px 10px 10px 1px rgba(0, 0, 0, 0.2),
    inset 0 2px 1px 0 rgba(255, 255, 255, 1);
  height: 100px;
  width: 40px;
}

.rec2 {
  box-shadow: inset 0 0 1px 1px rgba(0, 0, 0, 1);
  height: 90px;
  width: 34px;
}

.switch {
  background-color: #fff;
  box-shadow: 0 30px 1px 0 #ddd, inset 0 3px 2px 0 rgba(0, 0, 0, 0.5),
    inset 0 8px 2px 1px rgba(255, 255, 255, 0.5), inset 0 32px 0 0 #ddd;
  cursor: pointer;
  margin-top: 1px;
  margin-bottom: auto;
  position: relative;
  height: 70px;
  width: 30px;
}

.switch::after {
  content: "OFF";
  color: #646464;
  font-size: 12px;
  font-weight: bold;
  top: 12px;
  left: 2px;
  position: absolute;
}

.switch.active {
  background-color: #eee;
  box-shadow: 0 -1px 4px 0px rgba(0, 0, 0, 0.1),
    0 -30px 2px 0 rgba(245, 245, 245, 1), 0 -30px 0px 0px rgba(0, 0, 0, 0.8),
    inset 0 -3px 2px 0 rgba(0, 0, 0, 0.5),
    inset 0 -8px 2px 1px rgba(255, 255, 255, 0.5), inset 0 -32px 0 0 #ddd;
  margin-top: auto;
  margin-bottom: 1px;
}

.switch.active::after {
  content: "ON";
  left: 5px;
  top: 45px;
}
</style>
