import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { UserComponent } from './user/user.component';
import { RoleComponent } from './role/role.component';

@NgModule({
  declarations: [UserComponent, RoleComponent],
  imports: [
    CommonModule
  ]
})
export class AdminModule { }
