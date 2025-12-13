const BASE_URL = import.meta.env.BASE_URL;

const checkResponse = (res: Response) => {
  if (res.ok)
    return res.json();
  return Promise.reject(`Ошибка ${res.status}: ${res.statusText}`);
}

const request = async <T>(endpoint: string, options?: Object): Promise<T> => {
  return fetch(`${BASE_URL}${endpoint}`, options)
    .then(checkResponse);
}
