export const validateName = (value: string) => {
  let error = '';
  if (!/^[a-zA-Z-\s']+$/.test(value)) error = 'Используются недопустимые символы';
  else if (!value) return ''
  else if (value.length < 2) error = 'Минимальная длина - 2';
  else if (value.length > 255) error = 'Максимальная длина - 255';
  return error;
}

export const validateLastName = (value: string) => {
  let error = '';
  if (!/^[a-zA-Z-\s']+$/.test(value)) error = 'Используются недопустимые символы';
  else if (!value) return ''
  else if (value.length < 2) error = 'Минимальная длина - 2';
  else if (value.length > 255) error = 'Максимальная длина - 255';
  return error;
}

export const validatePatronymic = (value: string) => {
  let error = '';
  if (!/^[a-zA-Z-\s']+$/.test(value)) error = 'Используются недопустимые символы';
  else if (!value) return ''
  else if (value.length < 2) error = 'Минимальная длина - 2';
  else if (value.length > 255) error = 'Максимальная длина - 255';
  return error;
}

export const validateLogin = (value: string) => {
  let error = '';
  if (!/^\w+$/.test(value)) error = 'Используются недопустимые символы';
  else if (!value) return ''
  else if (value.length < 6) error = 'Минимальная длина - 6';
  else if (value.length > 32) error = 'Максимальная длина - 32';
  return error;
}

export const validateEmail = (value: string) => {
  let error = '';
  if (!/^[\w.\-]+@[\w]+.[\w]{2}$/.test(value)) error = 'Введите корректный формат почты';
  else if (!value) return ''
  return error;
}

export const validatePhone = (value: string) => {
  let error = '';
  if (!/^\+\d+$/.test(value)) error = 'Введите телефон формата +7xxxxxxxxxx';
  else if (!value) return ''
  return error;
}

export const validatePassword = (value: string) => {
  let error = '';
  if (value.length < 8) error = 'Минимальная длина - 8';
  else if (value.length > 255) error = 'Максимальная длина - 255';
  else if (!/[A-Z]/.test(value)) error = 'Должна быть как минимум одна заглавная буква';
  else if (!/\d/.test(value)) error = 'Должна быть как минимум одна цифра';
  else if (!value) return ''
  return error;
}
