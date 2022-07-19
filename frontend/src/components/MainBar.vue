<template>
  <v-container>
    <v-app-bar color="blue" elevation="4" app permanent>
      <v-app-bar-nav-icon
        color="white"
        @click="$emit('toogle-menu')"
      ></v-app-bar-nav-icon>
      <v-app-bar-title class="white--text"
        >Sistema de Reservas Aulas</v-app-bar-title
      >
      <v-spacer></v-spacer>

      <v-btn small text fab @click="logout">
        <v-icon>mdi mdi-exit-to-app</v-icon></v-btn
      >
    </v-app-bar>
  </v-container>
</template>

<script>
export default {
  name: "MainBar",
  data: () => ({}),
  methods: {
    logout() {
      console.log("cerrar aplicacion");
    },
  },
};
</script>