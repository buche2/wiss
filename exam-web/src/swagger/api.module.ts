/* tslint:disable */
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ApiConfiguration } from './api-configuration';

import { BasicErrorControllerService } from './services/basic-error-controller.service';
import { ExamRestService } from './services/exam-rest.service';
<<<<<<< HEAD
import { SolutionRestService } from './services/solution-rest.service';
import { UserRestService } from './services/user-rest.service';
=======
import { UserRestService } from './services/user-rest.service';
import { SolutionRestService } from './services/solution-rest.service';
>>>>>>> 2d7adc1d96bb5fc07149a171590a3e26af048e8d

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
<<<<<<< HEAD
    SolutionRestService,
    UserRestService
=======
    UserRestService,
    SolutionRestService
>>>>>>> 2d7adc1d96bb5fc07149a171590a3e26af048e8d
  ],
})
export class ApiModule { }
