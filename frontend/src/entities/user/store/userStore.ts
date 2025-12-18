import { defineStore } from 'pinia'
import type { User } from '@/entities/user/model/types.ts'
import { ref } from 'vue'

export const useUserStore = defineStore('user', () => {
  const user = ref<User | null>(null)
  const token = ref<string | null>(null)

  const setToken = (data: string) => (token.value = data)
  const setUser = (data: User) => (user.value = data)

  const resetToken = () => {
    token.value = null
    localStorage.removeItem('token')
  }
  const resetUser = () => (user.value = null)

  return { user, token, setUser, resetToken, resetUser, setToken }
})
