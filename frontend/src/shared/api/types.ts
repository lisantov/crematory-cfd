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

export interface MessageResponse {
  message: string;
}

export interface TokenResponse {
  token: string;
}

export interface ProfileResponse {
  profile: string;
}

export interface ErrorResponse extends MessageResponse {
  errors: Record<string, string[]>;
}
