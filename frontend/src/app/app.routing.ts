import {NgModule} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';
import {PageNotFoundComponent} from './page-not-found/page-not-found.component';
import { LoginComponent } from './login/login.component';
import { ListingComponent } from './listing/listing.component';
import { DetailComponent } from './detail/detail.component';
import { AuthGuard } from './auth/auth.guard';

export const routes: Routes = [
  {path: '', component: LoginComponent},
  {path: 'login', component: LoginComponent},
  // using{ AuthGuard } to restrict these routes for logged in user only
  {path: 'realestate/list', component: ListingComponent, canActivate: [AuthGuard]},
  {path: 'property/datasheet/:id', component: DetailComponent, canActivate: [AuthGuard]},
  {
  path: '**',
   component: PageNotFoundComponent
}];

@NgModule({
  imports: [
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule],
  declarations: []
})
export class AppRoutingModule {
}
