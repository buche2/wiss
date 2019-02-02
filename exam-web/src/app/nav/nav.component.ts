import {Component, Input, OnChanges, OnInit, Output, SimpleChanges, ViewChild} from '@angular/core';
import {debounceTime} from 'rxjs/operators';
import {Form} from '@angular/forms';
import {setOffsetToUTC} from 'ngx-bootstrap/chronos/units/offset';
import {ActivatedRoute, Router} from '@angular/router';
import {AuthGuard} from '../auth/auth.guard';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css']
})
export class NavComponent implements OnInit, OnChanges {

  @Input() title;

  @ViewChild('searchForm') searchForm;

  constructor(private router: Router, public activeRoute: ActivatedRoute, public authGuard: AuthGuard) {

  }

  ngOnInit() {
    // this.searchForm.valueChanges
    //   .pipe(
    //     debounceTime(500)
    //   ).subscribe(
    //   input => {
    //     // if (input.searchTerm.length > 0) {
    //     if (!this.activeRoute.component.toString().includes('catalog')) {
    //       this.router.navigate(['catalog']);
    //     }
    //     this.searchService.search(input.searchTerm);
    //     // }
    //   }
    // );
  }

  ngOnChanges(changes: SimpleChanges): void {
  }


}

