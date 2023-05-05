import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MainPageComponent } from './main-page/main-page.component';
import { ThankyouComponent } from './thankyou/thankyou.component';

const routes: Routes = [
  {path: '',redirectTo:'home',pathMatch:'full'},
  {path:'home',component:MainPageComponent},
  {path:'thankyou',component:ThankyouComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
