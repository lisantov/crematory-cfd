export interface CremationCard {
  id: number;
  name: string;
  surname: string;
  patronymic?: string;
  date: string;
  time: string;
  order_number: string;
  status: string;
  hall: string;
  employee: string;
  documents?: string;
}
