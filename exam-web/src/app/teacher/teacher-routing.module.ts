import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ExamCreateComponent } from './exam-create/exam-create.component';
import { ExamListeComponent } from './exam-liste/exam-liste.component';
import { ExamDownloadComponent } from './exam-download/exam-download.component';

const routes: Routes = [
  { path: 'exam-create', component: ExamCreateComponent  },
  { path: 'exam-liste', component: ExamListeComponent  },
  { path: 'exam-download', component: ExamDownloadComponent  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TeacherRoutingModule { }
