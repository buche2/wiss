/* tslint:disable */
import { Grade } from './grade';
import { Solution } from './solution';
export interface Exam {
  date?: string;
  file?: string;
  grade?: Grade;
  id?: number;
  solutions?: Array<Solution>;
}
