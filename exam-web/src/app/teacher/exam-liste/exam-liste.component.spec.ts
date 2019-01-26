import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExamListeComponent } from './exam-liste.component';

describe('ExamListeComponent', () => {
  let component: ExamListeComponent;
  let fixture: ComponentFixture<ExamListeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExamListeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExamListeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
