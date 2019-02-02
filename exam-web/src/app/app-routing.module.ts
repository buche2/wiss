import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {RegisterComponent} from './register/register.component';
import {AuthComponent} from './auth/auth.component';
import {AuthGuard} from './auth/auth.guard';
import {Role} from './auth/role.model';

// , canActivate: [AuthGuard],
//     data: {roles: [Role.ADMIN]}
const routes: Routes = [
  {path: 'auth', component: AuthComponent},
  {path: 'admin', loadChildren: './admin/admin.module#AdminModule'},
  {path: 'teacher', loadChildren: './teacher/teacher.module#TeacherModule'},
  {path: 'student', loadChildren: './student/student.module#StudentModule'},
  {path: 'register', component: RegisterComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
