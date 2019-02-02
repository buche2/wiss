/* tslint:disable */
import { Injectable } from '@angular/core';
import { HttpClient, HttpRequest, HttpResponse, HttpHeaders } from '@angular/common/http';
import { BaseService as __BaseService } from '../base-service';
import { ApiConfiguration as __Configuration } from '../api-configuration';
import { StrictHttpResponse as __StrictHttpResponse } from '../strict-http-response';
import { Observable as __Observable } from 'rxjs';
import { map as __map, filter as __filter } from 'rxjs/operators';

import { Exam } from '../models/exam';

/**
 * Operations with the exam
 */
@Injectable({
  providedIn: 'root',
})
class ExamRestService extends __BaseService {
  constructor(
    config: __Configuration,
    http: HttpClient
  ) {
    super(config, http);
  }

  /**
   * @return OK
   */
  getExamsUsingGETResponse(): __Observable<__StrictHttpResponse<Array<Exam>>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;
    let req = new HttpRequest<any>(
      'GET',
      this.rootUrl + `/exam`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<Array<Exam>>;
      })
    );
  }
  /**
   * @return OK
   */
  getExamsUsingGET(): __Observable<Array<Exam>> {
    return this.getExamsUsingGETResponse().pipe(
      __map(_r => _r.body as Array<Exam>)
    );
  }

  /**
   * @param grade grade
   * @return OK
   */
  getExamsByGradeUsingPOSTResponse(grade: string): __Observable<__StrictHttpResponse<Array<Exam>>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;

    let req = new HttpRequest<any>(
      'POST',
      this.rootUrl + `/exam/${grade}`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<Array<Exam>>;
      })
    );
  }
  /**
   * @param grade grade
   * @return OK
   */
  getExamsByGradeUsingPOST(grade: string): __Observable<Array<Exam>> {
    return this.getExamsByGradeUsingPOSTResponse(grade).pipe(
      __map(_r => _r.body as Array<Exam>)
    );
  }
}

module ExamRestService {
}

export { ExamRestService }
