<template>
  <v-app id="inspire">
    <top-navbar></top-navbar>
    <side-navbar></side-navbar>

    <v-main>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col class="shrink">
            <v-tooltip right>
              <template v-slot:activator="{ on }">
                <v-btn
                  :href="source"
                  icon
                  large
                  target="_blank"
                  v-on="on"
                >
                  <v-icon large>mdi-code-tags</v-icon>
                </v-btn>
              </template>
              <span>Source</span>
            </v-tooltip>
          </v-col>
        </v-row>
      </v-container>
    </v-main>

    <v-footer app>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
  import SideNavbar from './';
  import TopNavbar from '../navbar/TopNavbar';

  export default {
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
    components:{
      SideNavbar,
      TopNavbar
    },
    created () {
      this.$vuetify.theme.dark = true
    },
  }
</script>