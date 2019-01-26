import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ExamDownloadComponent } from './exam-download/exam-download.component';
import { ExamUploadComponent } from './exam-upload/exam-upload.component';

@NgModule({
  declarations: [ExamDownloadComponent, ExamUploadComponent],
  imports: [
    CommonModule
  ]
})
export class StudentModule { }
