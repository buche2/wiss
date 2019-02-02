/* tslint:disable */
import { Grade } from './grade';
export interface User {
  firstname?: string;
  grade?: Grade;
  id?: number;
  name?: string;
  password?: string;
  role?: 'ADMIN' | 'TEACHER' | 'STUDENT';
  username?: string;
}
