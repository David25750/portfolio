import Vue from 'vue'
import Router from 'vue-router'
import Page from "../components/Page.vue";
import Contact from "../components/Contact.vue";
import Biographie from "../components/Biographie.vue";
import Projets from "../components/Projets.vue";


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Page',
      component: Page
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Contact
    },
    {
      path: '/biographie',
      name: 'Biographie',
      component: Biographie
    },
    {
      path: 'projets',
      name: 'Projets',
      component: Projets
    },
  ]
})
