import { Component, OnInit } from '@angular/core';
import {User} from '../../swagger/models';
import {UserRestService} from '../../swagger/services/user-rest.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  user: User;

  constructor(private userService: UserRestService) {

    this.user = new class implements User {
      firstname: string;
      grade: null;
      id: number;
      name: string;
      password: string;
      role: 'STUDENT';
      username: string;
    };
  }

  ngOnInit() {
  }

  addNewUser() {
    console.log('Neuer User');
    this.userService.registerUsingPOST(this.user).subscribe(user => this.user = user);
  }

}
