import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Component } from '@angular/core';
import { NavigationEnd, Router } from '@angular/router';
declare var gtag: Function;
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'palasi royal';
  ipAddress: any;
  constructor(public router: Router, private http: HttpClient) {
    this.router.events.subscribe((event) => {
      if (event instanceof NavigationEnd) {
        gtag('config', 'AW-401331995', {
          page_path: event.urlAfterRedirects,
        });
      }
    });
  }
  ngOnInit(): void {
    if (performance.navigation.type == 2) {
      window.location.reload();
    }
    this.getIp();
  }
  getIp(): void {
    this.http
      .post('https://app.keyonprop.com/api/postIp', 'prop_name=' + this.title, {
        headers: new HttpHeaders({
          'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
        }),
      })
      .subscribe((res: any) => {
        return (this.ipAddress = res.message);
      });
  }
}
