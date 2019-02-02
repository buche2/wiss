import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-diego',
  templateUrl: './diego.component.html',
  styleUrls: ['./diego.component.css']
})
export class DiegoComponent implements OnInit {

  private _books: string[] = ['Book1', 'Book2'];

  public book = '';

  public addBook() {
    this._books.push(this.book);
  }

  public getBooks() {
    return this._books;
  }

  constructor() { }

  ngOnInit() {
  }

}
