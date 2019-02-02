/* tslint:disable */
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ApiConfiguration } from './api-configuration';

import { BasicErrorControllerService } from './services/basic-error-controller.service';
import { ExamRestService } from './services/exam-rest.service';
import { SolutionRestService } from './services/solution-rest.service';
import { UserRestService } from './services/user-rest.service';

/**
 * Provider for all Api services, plus ApiConfiguration
 */
@NgModule({
  imports: [
    HttpClientModule
  ],
  exports: [
    HttpClientModule
  ],
  declarations: [],
  providers: [
    ApiConfiguration,
    BasicErrorControllerService,
    ExamRestService,
    SolutionRestService,
    UserRestService
  ],
})
export class ApiModule { }
