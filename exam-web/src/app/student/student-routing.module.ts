import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ExamDownloadComponent } from './exam-download/exam-download.component';
import { ExamUploadComponent } from './exam-upload/exam-upload.component';

const routes: Routes = [
  { path: 'exam-download', component: ExamDownloadComponent  },
  { path: 'exam-upload', component: ExamUploadComponent  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class StudentRoutingModule { }
