import { Component, OnInit } from '@angular/core';
import {User} from '../../swagger/models';

@Component({
  selector: 'app-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css']
})
export class AuthComponent implements OnInit {

  constructor() { }

  login(as = 'ADMIN') {
    localStorage.setItem('currentUser', JSON.stringify({role: as, name: 'BUCHS'}));
  }

  logout() {
    localStorage.removeItem('currentUser');
  }

  ngOnInit() {
  }

}
