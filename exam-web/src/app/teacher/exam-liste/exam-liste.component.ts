import { Component, OnInit } from '@angular/core';
import {ExamRestService} from '../../../swagger/services';
import {log} from 'util';
import {Exam} from '../../../swagger/models/exam';

@Component({
  selector: 'app-exam-liste',
  templateUrl: './exam-liste.component.html',
  styleUrls: ['./exam-liste.component.css']
})
export class ExamListeComponent implements OnInit {
  public exams: Exam[];


  constructor(private examService: ExamRestService) { }

  ngOnInit() {
    this.examService.getExamsUsingGET().subscribe(exams => this.exams = exams);
  }
}
