import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { UserComponent } from './user/user.component';
import { RoleComponent } from './role/role.component';
import { AdminRoutingModule } from './admin-routing.module';

@NgModule({
  declarations: [UserComponent, RoleComponent],
  imports: [
    CommonModule,
    AdminRoutingModule
  ]
})
export class AdminModule { }
