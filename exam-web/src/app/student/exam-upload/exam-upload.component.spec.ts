import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExamUploadComponent } from './exam-upload.component';

describe('ExamUploadComponent', () => {
  let component: ExamUploadComponent;
  let fixture: ComponentFixture<ExamUploadComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExamUploadComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExamUploadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
