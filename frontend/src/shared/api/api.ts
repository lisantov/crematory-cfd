import type {
  ForgotPasswordData,
  LoginUserData,
  RegisterUserData,
  ResetPasswordData
} from "@/shared/api/types.ts";

const BASE_URL = import.meta.env.VITE_URL;
const BASE_PORT = import.meta.env.VITE_PORT;

const checkResponse = (res: Response) => {
  if (res.ok)
    return res.json();
  return Promise.reject(`Ошибка ${res.status}: ${res.statusText}`);
}

const request = async <T>(endpoint: string, options?: Object): Promise<T> => {
  return fetch(`${BASE_URL + ':' + BASE_PORT + '/api/'}${endpoint}`, options)
    .then(checkResponse);
}

export const loginUser = (endpoint: string, data: LoginUserData) => {
  return request('login/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const registerUser = (endpoint: string, data: RegisterUserData) => {
  return request('register/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const forgotPasswordUser = (endpoint: string, data: ForgotPasswordData) => {
  return request('password/forgot/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}

export const resetPasswordUser = (endpoint: string, data: ResetPasswordData) => {
  return request('password/reset/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
}
