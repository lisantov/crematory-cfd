import { createRouter, createWebHistory } from 'vue-router'
import MainPage from '../../pages/MainPage'

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
      component: () => import("../../pages/LoginPage")
    },
    {
      path: '/registration',
      name: 'registration',
      component: () => import("../../pages/RegisterPage")
    },
    {
      path: '/profile',
      name: 'profile',
      component: () => import("../../pages/ProfilePage")
    },
    {
      path: '/change-password',
      name: 'changePassword',
      component: () => import("../../pages/ChangePasswordPage")
    },
  ],
})

export default router
