<template>
  <v-app>
    <main-menu></main-menu>
    <main-bar></main-bar>
    <v-main>
      <v-container fluid>
         <router-view/>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import MainBar from "./components/MainBar";
import MainMenu from "./components/MainMenu";

export default {
  name: "App",

  components: {
    MainMenu,
    MainBar,
  },

  data: () => ({
    //
  }),
};
</script>
