export interface LoginUserData {
  login: string;
  password: string;
}

export interface RegisterUserData {
  first_name: string;
  last_name: string;
  email: string;
  phone: string;
  login: string;
  password: string;
  password_confirmation: string;
}

export interface ForgotPasswordData {
  phone: string;
}

export interface ResetPasswordData {
  token: string;
  phone: string;
  password: string;
  password_confirmation: string;
}
