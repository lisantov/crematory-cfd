import type {
  LoginUserData,
  MessageResponse,
  ProfileResponse,
  RegisterUserData,
  TokenResponse,
} from '@/shared/api/types.ts'
import { useUserStore } from '@/entities/user/store/userStore.ts'

const userStore = useUserStore()

const checkResponse = (res: Response) => {
  if (res.ok) return res.json()
  return Promise.reject(`Ошибка ${res.status}: ${res.statusText}`)
}

const request = async <T>(endpoint: string, options?: object): Promise<T> => {
  return fetch(`/api/${endpoint}`, options).then(checkResponse)
}

export const loginUser = (data: LoginUserData) => {
  return request<TokenResponse>('login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const registerUser = (data: RegisterUserData) => {
  return request<MessageResponse>('register', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const profileUser = () => {
  if (userStore.token)
    return request<ProfileResponse>('profile', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${userStore.token}`,
      },
    })
  else
    return Promise.reject({
      message: 'Вы не авторизованы',
    })
}
