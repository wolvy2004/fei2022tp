<template>
  <v-container>
    <v-navigation-drawer v-model="drawer" app absolute >
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6"> Curza </v-list-item-title>
          <v-list-item-subtitle> Fei </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense nav>
        <v-list-item v-for="item in items" :key="item.title" link :to="item.to">
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      drawer: null,
      items: [
        { title: "HOME", icon: "mdi-view-dashboard", to: "/" },
        { title: "ACERCA DE", icon: "mdi-help-box", to: "/acerca" },
      ],
      right: null,
    };
  },
};
</script>

