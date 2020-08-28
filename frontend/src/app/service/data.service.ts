import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import { TokenStorageService } from 'app/auth/token-storage.service';
import { Observable } from 'rxjs';

const httpOptions = {
  headers: new HttpHeaders({ 'Content-Type': 'application/json', 'Access-Control-Allow-Origin': '*'})
};

@Injectable({
  providedIn: 'root'
})
export class DataService {
  //api url of the backend here
  public API = 'http://estates.homerock/public/index.php/api';

  private api_url_realestate = this.API + '/realestate';

  constructor(private httpClient: HttpClient, private token: TokenStorageService) { }

  public getAllRealestates(): Observable<any> {
    return this.httpClient.get(this.api_url_realestate, httpOptions);
  }
  get(id: string) {
    return this.httpClient.get(this.api_url_realestate + '/' + id, httpOptions);
  }

}
