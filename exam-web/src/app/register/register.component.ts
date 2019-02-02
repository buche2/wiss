import { Component, OnInit } from '@angular/core';
import {UserService} from '../../swagger/services/user.service';
import {User} from '../../swagger/models';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  user: User;

  constructor(private userService: UserService) {

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

}
