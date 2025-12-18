import type {
  LoginUserData,
  MessageResponse,
  RegisterUserData,
  TokenResponse,
} from '@/shared/api/types.ts'

const checkResponse = (res: Response) => {
  if (res.ok) return res.json()
  return Promise.reject(`Ошибка ${res.status}: ${res.statusText}`)
}

const request = async <T>(endpoint: string, options?: object): Promise<T> => {
  return fetch(`/api/${endpoint}`, options).then(checkResponse)
}

export const loginUser = (data: LoginUserData) => {
  return request<TokenResponse>('login/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const registerUser = (data: RegisterUserData) => {
  return request<MessageResponse>('register/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}
