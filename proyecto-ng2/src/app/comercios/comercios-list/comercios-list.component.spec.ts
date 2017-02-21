/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { ComerciosListComponent } from './comercios-list.component';

describe('ComerciosListComponent', () => {
  let component: ComerciosListComponent;
  let fixture: ComponentFixture<ComerciosListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ComerciosListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ComerciosListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
