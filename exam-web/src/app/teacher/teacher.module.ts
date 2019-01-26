import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ExamCreateComponent } from './exam-create/exam-create.component';
import { ExamListeComponent } from './exam-liste/exam-liste.component';
import { ExamDownloadComponent } from './exam-download/exam-download.component';

@NgModule({
  declarations: [ExamCreateComponent, ExamListeComponent, ExamDownloadComponent],
  imports: [
    CommonModule
  ]
})
export class TeacherModule { }
