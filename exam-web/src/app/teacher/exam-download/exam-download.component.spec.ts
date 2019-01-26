import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExamDownloadComponent } from './exam-download.component';

describe('ExamDownloadComponent', () => {
  let component: ExamDownloadComponent;
  let fixture: ComponentFixture<ExamDownloadComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExamDownloadComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExamDownloadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
