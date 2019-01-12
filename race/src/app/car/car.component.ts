import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-car',
  templateUrl: './car.component.html',
  styleUrls: ['./car.component.css']
})
export class CarComponent implements OnInit {

  private color: string;

  constructor() { }

  public buttonClick(): any {
    return alert('was geht ab');
  }

  public getColor(): string {
    return this.color;
  }

  ngOnInit() {
    this.color = 'red';
  }

}
