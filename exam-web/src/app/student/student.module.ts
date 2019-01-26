import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ExamDownloadComponent } from './exam-download/exam-download.component';
import { ExamUploadComponent } from './exam-upload/exam-upload.component';
import { StudentRoutingModule } from './student-routing.module';

@NgModule({
  declarations: [ExamDownloadComponent, ExamUploadComponent],
  imports: [
    CommonModule,
    StudentRoutingModule
  ]
})
export class StudentModule { }
