import { Component, OnInit } from '@angular/core';
import { DataService } from '../service/data.service';

@Component({
  selector: 'app-listing',
  templateUrl: './listing.component.html',
  styleUrls: ['./listing.component.scss']
})
export class ListingComponent implements OnInit {

  estates=[];
  constructor(private dataService: DataService) {
    this.dataService.getAllRealestates().subscribe((data: any[]) => {
      const planeJson = JSON.stringify(data);
      console.log(planeJson);
      this.estates = data
    })

  }

  ngOnInit(): void {
  }



}
