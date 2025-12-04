import { createRouter, createWebHistory } from 'vue-router'
import MainPage from '../../pages/MainPage'
import RegisterPage from "../../pages/RegisterPage";
import LoginPage from "../../pages/LoginPage";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: MainPage
    },
    {
      path: '/login',
      name: 'login',
      component: LoginPage
    },
    {
      path: '/registration',
      name: 'registration',
      component: RegisterPage
    }
  ],
})

export default router
