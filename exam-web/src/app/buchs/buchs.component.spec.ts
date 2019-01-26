import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BuchsComponent } from './buchs.component';

describe('BuchsComponent', () => {
  let component: BuchsComponent;
  let fixture: ComponentFixture<BuchsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BuchsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BuchsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
