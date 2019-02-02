/* tslint:disable */
import { Injectable } from '@angular/core';
import { HttpClient, HttpRequest, HttpResponse, HttpHeaders } from '@angular/common/http';
import { BaseService as __BaseService } from '../base-service';
import { ApiConfiguration as __Configuration } from '../api-configuration';
import { StrictHttpResponse as __StrictHttpResponse } from '../strict-http-response';
import { Observable as __Observable } from 'rxjs';
import { map as __map, filter as __filter } from 'rxjs/operators';

import { User } from '../models/user';

/**
 * Operations pertaining to user in exam
 */
@Injectable({
  providedIn: 'root',
})
class UserService extends __BaseService {
  constructor(
    config: __Configuration,
    http: HttpClient
  ) {
    super(config, http);
  }

  /**
   * @return OK
   */
  loginUsingGETResponse(): __Observable<__StrictHttpResponse<Array<User>>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;
    let req = new HttpRequest<any>(
      'GET',
      this.rootUrl + `/user`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<Array<User>>;
      })
    );
  }
  /**
   * @return OK
   */
  loginUsingGET(): __Observable<Array<User>> {
    return this.loginUsingGETResponse().pipe(
      __map(_r => _r.body as Array<User>)
    );
  }

  /**
   * @param params The `UserService.LoginUsingPOSTParams` containing the following parameters:
   *
   * - `username`: username
   *
   * - `password`: password
   *
   * @return OK
   */
  loginUsingPOSTResponse(params: UserService.LoginUsingPOSTParams): __Observable<__StrictHttpResponse<User>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;
    if (params.username != null) __params = __params.set('username', params.username.toString());
    if (params.password != null) __params = __params.set('password', params.password.toString());
    let req = new HttpRequest<any>(
      'POST',
      this.rootUrl + `/user/login`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<User>;
      })
    );
  }
  /**
   * @param params The `UserService.LoginUsingPOSTParams` containing the following parameters:
   *
   * - `username`: username
   *
   * - `password`: password
   *
   * @return OK
   */
  loginUsingPOST(params: UserService.LoginUsingPOSTParams): __Observable<User> {
    return this.loginUsingPOSTResponse(params).pipe(
      __map(_r => _r.body as User)
    );
  }
  testCreateUsingGETResponse(): __Observable<__StrictHttpResponse<null>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;
    let req = new HttpRequest<any>(
      'GET',
      this.rootUrl + `/user/test`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<null>;
      })
    );
  }  testCreateUsingGET(): __Observable<null> {
    return this.testCreateUsingGETResponse().pipe(
      __map(_r => _r.body as null)
    );
  }

  /**
   * @param id id
   * @return OK
   */
  byIdUsingGETResponse(id: number): __Observable<__StrictHttpResponse<User>> {
    let __params = this.newParams();
    let __headers = new HttpHeaders();
    let __body: any = null;

    let req = new HttpRequest<any>(
      'GET',
      this.rootUrl + `/user/${id}`,
      __body,
      {
        headers: __headers,
        params: __params,
        responseType: 'json'
      });

    return this.http.request<any>(req).pipe(
      __filter(_r => _r instanceof HttpResponse),
      __map((_r) => {
        return _r as __StrictHttpResponse<User>;
      })
    );
  }
  /**
   * @param id id
   * @return OK
   */
  byIdUsingGET(id: number): __Observable<User> {
    return this.byIdUsingGETResponse(id).pipe(
      __map(_r => _r.body as User)
    );
  }
}

module UserService {

  /**
   * Parameters for loginUsingPOST
   */
  export interface LoginUsingPOSTParams {

    /**
     * username
     */
    username?: string;

    /**
     * password
     */
    password?: string;
  }
}

export { UserService }
