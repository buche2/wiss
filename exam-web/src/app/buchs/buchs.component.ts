import { Component, OnInit } from '@angular/core';
import {User} from '../../swagger/models/user';
import {ActivatedRoute, Router} from '@angular/router';
import {UserRestService} from '../../swagger/services/user-rest.service';

@Component({
  selector: 'app-buchs',
  templateUrl: './buchs.component.html',
  styleUrls: ['./buchs.component.css']
})
export class BuchsComponent implements OnInit {
  private _books: string[] = ['Book1', 'Book2'];

  public book: string;
  public user

  public addBook() {
    // this._books[this._books.length] = this.book;
    this._books.push(this.book);
    this.router.navigate(['admin', 'user']);
  }

  public books(): string[] {
    return this._books;
  }

  constructor(private userService: UserRestService, private activeRoute: ActivatedRoute, private router: Router) {
    this.userService.byIdUsingGET(1).subscribe((user: User) => {
      setTimeout(() => { this.user = user; }, 2000);

    });

  }

  ngOnInit() {
  }

}
