import {ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot} from '@angular/router';
import {Injectable} from '@angular/core';

@Injectable()
export class AuthGuard implements CanActivate {

  constructor(private router: Router) {
  }

  forNavigation(data) {
    console.log('authguard: fornavigation');
    console.log('authguard ' + data.roles);
    const currentUser = JSON.parse(localStorage.getItem('currentUser'));
    if (currentUser) {
      // logged in so return true
      if (data.roles && data.roles.indexOf(currentUser.role.toString()) === -1) {
        console.log('authguard: false');
        return false;
      }
      console.log('authguard: true');
      return true;
    }
    console.log('authguard: false');
    return false;
  }

  canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot) {
    // console.log('activated: ' + localStorage.getItem('currentUser'));
    const currentUser = JSON.parse(localStorage.getItem('currentUser'));
    if (currentUser) {
      // logged in so return true
      if (route.data.roles && route.data.roles.indexOf(currentUser.role.toString()) === -1) {
        // role not authorised so redirect to home page
        this.router.navigate(['/']);
        return false;
      }

      return true;
    }
    if (route != null && state != null) {
      this.router.navigate(['auth'], { queryParams: { auth: 'failed' } });
    }
    return false;
  }
}
