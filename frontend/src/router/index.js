import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '@/views/Dashboard.vue'
import Gastos from '@/views/Gastos.vue'
import Categorias from '@/views/Categorias.vue'

const routes = [
  { path: '/', component: App },
  { path: '/gastos', component: Gastos },
  //{ path: '/categorias', component: Categorias }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
